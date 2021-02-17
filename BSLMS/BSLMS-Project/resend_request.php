<?php
  include ("connect_db.php");

  $result2 =$connect->query('select * from compagne where id='.$_POST['id']);
  $nom = "";
  while($row2 = $result2->fetch()){
  $nom = $row2['Nom'];
  //Construire la date adaptable avec php
  $date = substr($row2['date_fin'], 6, 4)."-".substr($row2['date_fin'], 0, 2)."-".substr($row2['date_fin'], 3, 2);
  $today = date("Y-m-d");
  }

  $date_verifie = date_create($date);
  $today_verifie = date_create($today);
  $diff = date_diff($today_verifie, $date_verifie);
  $jrs_restant = $diff->format("%a jours");


  //envoie d'email
  $result =$connect->query('select email from users');
  while($row = $result->fetch())
  {
    mail($row['email'],"Relancement de compagne","Bonjour tout le monde\n La compagne ".$nom." se termine dans  ".$jrs_restant);
  }
 ?>
