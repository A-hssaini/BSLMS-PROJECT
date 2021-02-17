<?php
  include ("connect_db.php");
  $result2 = $connect->query('select * from compagne where id='.$_POST['id']);
  $nom = "";
  $date_d = "";
  $date_f = "";
  while($row2 = $result2->fetch())
  {
    $nom = $row2['Nom'];
    //Construire la date adaptable avec php
    $date_d = $row2['date_debut'];
    $date_f = $row2['date_fin'];
  }

  //send emails
  $result = $connect->query('select email from users');
  while($row = $result->fetch())
  {
    mail($row['email'],"Lancement de compagne","Bonjour tout le monde\n La compagne ".$nom." va commencer le ".
    $date_d." et va terminer le ".$date_f." \n Merci de choisir du catalogues les formations voulu ");
  }


  //update mail status
  $sql2 = "UPDATE compagne_mail set status=1 where id=?";
  $stmt2 = $connect->prepare($sql2);
  $stmt2->execute([$_POST['id']]);
 ?>
