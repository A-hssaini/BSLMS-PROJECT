<?php
  include("connect_db.php");
  $sql2 = 'UPDATE compagne set date_fin="'.$_POST['b'].'" where id='.$_POST['id'];
  $stmt2 = $connect->prepare($sql2);
  $stmt2->execute();
 ?>
