<?php
    include('connect_db.php');
    if($_POST['opt'] == 1)
    {
      $query='UPDATE user_demande set status=2 where id_user=? and id_e=?';
      $statement = $connect->prepare($query);
      $statement->execute([$_POST['id'], $_POST['id2']]);
    }
    else {
      $query='UPDATE user_demande set status=-2 where id_user=? and id_e=?';
      $statement = $connect->prepare($query);
      $statement->execute([$_POST['id'], $_POST['id2']]);
    }
 ?>
