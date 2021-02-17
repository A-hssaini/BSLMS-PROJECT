<?php
    include ("connect_db.php");
    
    $datos=$connect->query("select id_e from user_on_event where matricule='".$_SESSION['id_user']."'");
    $retrait=$connect->query("select count(*) from user_on_event where matricule='".$_SESSION['id_user']."' and desiste=1");
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
  $data[0] = $planifie;
$data[1] = $realise;
$data[2] = $encours;
$data[3] = $retr[0];

  $data = json_encode($data);
 ?>
