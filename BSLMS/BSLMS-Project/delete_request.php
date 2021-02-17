<?php

include ("connect_db.php");

    $id = $_POST['id'];
    $query2='Delete from compagne_mail where id="'.$id.'"';
    $statement2 = $connect->prepare($query2);
    $statement2->execute();
    $query='Delete from compagne where id="'.$id.'"';
    $statement = $connect->prepare($query);
    $statement->execute();

 ?>
