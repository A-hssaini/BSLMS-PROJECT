
                <?php
session_start();
include ("connect_db.php");
$matricule=$_POST['id'];
 function is_verified($date){
    $today=date_create(date("Y-m-d"));
    $date1=date_create($date);
    $diff=date_diff($date1,$today);
    if($diff->format("%a") > 0)
        return 1;
    return 0;

}
  //SELECTIONNER LA NOTE DE L'UTILISATEUR
$query=$connect->query("select note,nom, prenom from users where matricule='".$matricule."'");
$res=$query->fetch();
$_SESSION["nom"]=$res['nom']; 
$_SESSION["prenom"]=$res["prenom"];
 //COMPTER LES MUST-LEARN DE L'USER
$qr=$connect->query("select count(*) from user_must_learn where matricule='".$matricule."'");
$slc=$qr->fetch();
 //COMPTER LES MUST-LEARN VALIDES
$qry=$connect->query("select count(*) from user_must_learn where matricule='".$matricule."' and status=1 ");
$slct=$qry->fetch();
 //COMPTER LA PRESENCE
$req=$connect->query("select count(*) from user_presence where matricule='".$matricule."'");
$pres=$req->fetch();
$req1=$connect->query("select count(*) from user_presence where matricule='".$matricule."' and status=1");
$presence=$req1->fetch();
 //TESTS D'ACQUISITION

$moy=$connect->query("select * from user_on_event where matricule='".$matricule."' and desiste=0");
$j=0;$som=0;
while($avg=$moy->fetch()){
    $ev=$connect->query("select * from event where id_e=".$avg['id_e']);
    $rw=$ev->fetch();
    $date = substr($rw['date_fin'], 6, 4)."-".substr($rw['date_fin'], 3, 2)."-".substr($rw['date_fin'], 0, 2);
    if(is_verified($date)){
        $som+=$avg['note_test_acquis'];
        $j++;
    }

}
if($j){
    $moyenne=$som/$j; $pourc=($moyenne/20)*100;
}
else{
    $moyenne=0 ; $pourc=0;
}

 //eval-froid
$froid=$connect->query("select count(*) from user_on_event where matricule='".$matricule."' and eval_froid=1");
$evalf=$froid->fetch();
 //eval-chaud
$chaud=$connect->query("select count(*) from user_on_event where matricule='".$matricule."' and eval_chaud=1");
$evalc=$chaud->fetch();
 //test-acqui
$acq=$connect->query("select count(*) from user_on_event where matricule='".$matricule."' and desiste=0");
$test=$acq->fetch();
//formations passées
$form=$connect->query("select * from user_on_event where matricule='".$matricule."' and desiste=0");
$formation=array();
if($slc[0])
    $msl=(($slct[0]/$slc[0])*100);
else $msl=0;

if($pres[0])
 $prs=(($presence[0]/$pres[0])*100);
else $prs=0;
while($event=$form->fetch()){
    $frm=$connect->query("select * from event where id_e=".$event['id_e']);
    $row=$frm->fetch();
    $date1 = substr($row['date_debut'], 6, 4)."-".substr($row['date_debut'], 3, 2)."-".substr($row['date_debut'], 0, 2);
    $date2 = substr($row['date_fin'], 6, 4)."-".substr($row['date_fin'], 3, 2)."-".substr($row['date_fin'], 0, 2);
    $date_d=date_create($date1);
    $date_f=date_create($date2);
    $today=date_create(date("Y-m-d"));
    $diff=date_diff($date_f,$today);
    $diff1=date_diff($date_d,$date_f);
     if(is_verified($date2)){
        $nom=$connect->query("select name from formation where id=".$row["id"]);
        $action=$nom->fetch();
        $formation[]=array(
            'name' =>$action["name"],
            'durée' => $diff1->format("%a jours"),
            'test_acquis' => ($event["note_test_acquis"]/20)*100 ,
            'e_froid' => $event["eval_froid"],
            'e_chaud' => $event["eval_chaud"]
        );
    }
}
$table ='';
foreach($formation as $trng){
    $table.=' <tr>
    <td class="i-checks"><input type="checkbox" value=""> <i></i></td>
    <td>'.$trng['name'].'</td>
    <td>'.$trng['durée'].'</td>
    <td>'.$trng['test_acquis'].'%</td>';
    if($trng['e_chaud'])
        $table .='
    <td><i class="fa fa-check text-navy"></i></td>';
    else
        $table.='<td><i class="fa fa-times text-danger"></i></td>';
    if($trng['e_froid'])
         $table.='<td><i class="fa fa-check text-navy"></i></td>';
    else 
        $table.='<td><i class="fa fa-times text-danger"></i></td>';
    
    $table.='</tr>';
   
}
$table.='';
 
        $page ='    <div class="row">
                                    <div class="col-lg-3">
                                                  <div class="widget style1">
                                                          <div class="row">
                                                              <div class="col-4 text-center">
                                                                  <i class="fa fa-trophy fa-5x"></i>
                                                              </div>
                                                              <div class="col-8 text-right">
                                                                  <span> Point </span>
                                                                  <h2 class="font-bold">'.$res["note"].'</h2>
                                                              </div>
                                                          </div>
                                                  </div>
                                                </div>
                                                <div class="col-lg-3">
                                                  <div class="widget style1 navy-bg">
                                                      <div class="row">
                                                          <div class="col-4">
                                                              <i class="fa fa-rebel fa-5x"></i>
                                                          </div>
                                                          <div class="col-8 text-right">
                                                              <span><b> Mes must Learn</b> </span>
                                                              <h2 class="font-bold">'.$msl.'%</h2>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="widget style1 red-bg">
                                                      <div class="row">
                                                          <div class="col-4">
                                                              <i class="fa fa-calendar fa-5x"></i>
                                                          </div>
                                                          <div class="col-8 text-right">
                                                              <span><b> Présence</b> </span>
                                                              <h2 class="font-bold">'.$prs.'%</h2>
                                                          </div>
                                                      </div>
                                                  </div>
                                                </div>
                                                <div class="col-lg-3">
                                                  <div class="widget lazur-bg p-lg text-center">
                                                      <div class="m-b-md">
                                                          <i class="fa fa-book fa-4x"></i>
                                                          <h1 class="m-xs"><b>'.$pourc.'%</b></h1>
                                                          <h3 class="font-bold no-margins">
                                                             <b> Mes tests d\'acquisition</b>
                                                          </h3>
                                                      </div>
                                                  </div>
                                                </div>
                                                <div class="col-lg-3">
                                                  <table class="table">
                                                      <th>Statistiques</th>
                                                      <tbody>
                                                      <tr>
                                                          <td>
                                                              <span class="btn btn-danger m-r-sm">'. $slc[0].'</span>
                                                              Must-Learn
                                                          </td>
                                                      </tr>
                                                      <tr>
                                                        <td>
                                                            <span class="btn btn-primary m-r-sm">'. $evalf[0].'</span>
                                                            Evaluation à froid
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                          <td>
                                                              <span class="btn btn-info m-r-sm">'. $evalc[0].'</span>
                                                              Evaluation à chaud
                                                          </td>
                                                      </tr>
                                                      <tr>
                                                        <td>
                                                            <span class="btn btn-success m-r-sm">'. $test[0].'</span>
                                                            Test d\'acquisition
                                                        </td>
                                                      </tr>
                                                      </tbody>
                                                  </table>
                                                </div>
                                    </div>
                                    <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="ibox ">
                                                        <div class="ibox-title">
                                                            <h5>Formation passées</h5>
                                                        </div>
                                                        <div class="ibox-content">
                                                          <table class="table table-striped" style="text-align:center">
                                                              <thead>
                                                              <tr>

                                                                  <th></th>
                                                                  <th>Nom de l action </th>
                                                                  <th>Durée </th>
                                                                  <th>Test d\'aquisition</th>
                                                                  <th>Evaluation à chaud</th>
                                                                  <th>Evaluation à froid</th>
                                                              </tr>
                                                              </thead>
                                        <tbody>'.
                                                            $table.'
                                   
                                
                                        </tbody>
                                                 </table>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-lg-8">
                                                <div class="ibox ">
                                                    <div class="ibox-title">
                                                        <h5>Actions</h5>
                            
                                                    </div>
                                                    <div class="ibox-content">
                                                        <div  id="dgnt">
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
';
$datos=$connect->query("select id_e from user_on_event where matricule='".$matricule."'");
$retrait=$connect->query("select count(*) from user_on_event where matricule='".$matricule."' and desiste=1");
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
$_SESSION["data"]=array();

$data[0] = $planifie;
$data[1] = $realise;
$data[2] = $encours;
$data[3] = $retr[0];
$_SESSION["data"]=$data;
$_SESSION["data"] = json_encode($_SESSION["data"]);
echo $page;
                ?>