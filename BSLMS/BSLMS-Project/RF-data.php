<?php 
session_start();
include ("connect_db.php");

$curr_year=date("Y"); // current_year
$curr_month=date("m"); // current month
$comp=$connect->query('select * from compagne where annee='.$curr_year);//la compagne de l'année courante 
$compa=$comp->fetch();

function is_verified($date){
  $today=date_create(date("Y-m-d"));
  $date1=date_create($date);
  $diff=date_diff($date1,$today);
  if($diff->format("%a") > 0)
      return 1;
  return 0;

}
//COMPTER LES MUST
$qr=$connect->query("select count(*) from user_must_learn");
$slc=$qr->fetch();
//eval a froid
$froid=$connect->query("select count(*) from user_on_event where eval_froid=1");
$evalf=$froid->fetch();
//eval a chaud
$chaud=$connect->query("select count(*) from user_on_event where eval_chaud=1");
$evalc=$chaud->fetch();
//toutes les actions 
$acq=$connect->query("select count(*) from user_on_event where desiste=0");
$test=$acq->fetch();
// les actions certifiantes & diplomantes
$cert_dip=$connect->query("select id from event");
$dip=0;$cert=0;
while($form=$cert_dip->fetch()){
  $type=$connect->query("select type from formation where id=".$form["id"]);
  $tp=$type->fetch();
  if($tp["type"]=='certifiante')
    $cert++;
  elseif($tp["type"]=='diplomante')
    $dip++;
}
//Taux des formés et non formés
$taux=$connect->query("select matricule from users");
$usr_evt=$connect->query("select matricule from user_on_event");
$check=array(); $i=0;
while($rslt=$usr_evt->fetch()){
  $check[$i]=$rslt["matricule"];
  $i++;
}
$formes=0; $nonformes=0;
while($taux1=$taux->fetch()){
  if(in_array($taux1["matricule"],$check))
    $formes++;
  else
    $nonformes++;
}

$entity=$connect->query("select * from entity");
$donnees=array();
//reporting on entities
while($entities=$entity->fetch()){
    $query=$connect->query("select * from users where id_entity='".$entities['id_entity']."'");
    $som=0;$act=0; $i=0;$froid=0;$j=0;$pres=0;
    while($users=$query->fetch()){
        $pre=$connect->query("select count(*) from user_presence where matricule='".$users['matricule']."'");
        $presences=$pre->fetch();
        $req1=$connect->query("select count(*) from user_presence where matricule='".$users['matricule']."' and status=1");
        $presence=$req1->fetch();
        if($presences[0])
          $pres+=($presence[0] /$presences[0] )*100;
        $req=$connect->query("select * from user_on_event where matricule='".$users['matricule']."' and desiste=0");
          
        while($res=$req->fetch()){ 
    
          $ev=$connect->query("select * from event where id_e=".$res['id_e']);
          $rw=$ev->fetch();
          $date1 = substr($rw['date_debut'], 6, 4)."-".substr($rw['date_debut'], 3, 2)."-".substr($rw['date_debut'], 0, 2);
          $date2 = substr($rw['date_fin'], 6, 4)."-".substr($rw['date_fin'], 3, 2)."-".substr($rw['date_fin'], 0, 2);
          $date_d = date_create($date1);
          $date_f = date_create($date2);   
          $diff = date_diff($date_d,$date_f);
    
          if(is_verified($date2)){
              $froid+=$res['note_eval_froid'];
              $som+=($res['note_test_acquis']/20)*100;
              $act+=$diff->format("%a");
              $i++;
          }
        
        }
       $j++;
      }
      $froid/=$i ; $som/=$i ; $act /= $i; $pres /=$j;
      $donnees[]=array(
          'id'=>$entities['id_entity'],'desc' => $entities['description'], 'actions'=>$i, 'durée'=>$act,'acquis'=>$som, 'froid'=> $froid , 'presence'=>$pres
      );
}
//Les etats des actions 
$datos=$connect->query("select id_e from user_on_event");
$retrait=$connect->query("select count(*) from user_on_event where desiste=1");//actions retraites
$retr=$retrait->fetch();
$planifie=0;$encours=0;$realise=0;

while($dates=$datos->fetch()) {
  $var=$connect->query("select date_debut,date_fin from event where id_e=".$dates["id_e"]);
  $row=$var->fetch();
  $date1 = substr($row['date_debut'], 6, 4)."-".substr($row['date_debut'], 3, 2)."-".substr($row['date_debut'], 0, 2);
  $date2 = substr($row['date_fin'], 6, 4)."-".substr($row['date_fin'], 3, 2)."-".substr($row['date_fin'], 0, 2);
  $date_d=date_create($date1);  $date_f=date_create($date2);
  $today=date_create(date("Y-m-d"));
  $diff=date_diff($date_d,$today);
  $diff1=date_diff($date_f,$today);
  if($diff->format("%R%a") < 0)
    $planifie++;
  if($diff1->format("%R%a") > 0)
    $realise++;
  if($diff->format("%R%a") >= 0 && $diff1->format("%R%a") <= 0 )
    $encours++;
      
}

$data = array();
$_SESSION["datos"]=array();

$data[0] = $planifie;//actions planifiees
$data[1] = $realise;// .. realisees
$data[2] = $encours;// .. en cours
$data[3] = $retr[0];//.. retraites
$_SESSION["datos"]=$data;
$_SESSION["datos"] = json_encode($_SESSION["datos"]);

//Consommation Budget 
$mois=$connect->query("select * from event ");
$arr=array();
while($months=$mois->fetch()){
  if($months["id_comp"]==$compa["id"] && intval(substr($months['date_debut'], 3, 2)) <= intval($curr_month))
      $arr[]=array(substr($months['date_debut'], 3, 2) => $months["cout"]);
}
$tableau=array_keys($arr);
$array_js=array(); 
$n=0;

while($n < intval($curr_month)){ 
  $k=0; $ck=0; 
while($k < count($tableau)){
  if( $n+1 == intval($tableau[$k]) ){ 
    $array_js[$n]=$arr[$tableau[$k]];
    $ck=1; $n++; 
    break; 
  }
$k++;
}
if($ck==0 && $k == count($tableau)){
  $array_js[$n]=40;
  $n++;
}
}
$array_js = json_encode($array_js);
?>