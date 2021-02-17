<?php
/*session_start();
include("connect_db.php");
//include("frame.php");*/

include ("connect_db.php");

    $req_events = $connect->query("select * from event");
    $data = array();
    while($row = $req_events->fetch()){
      $req = $connect->query("select * from formation where id=".$row["id"]);
      while($row1 = $req->fetch())
      {
        
        $date1 = substr($row['date_debut'], 6, 4)."-".substr($row['date_debut'], 3, 2)."-".substr($row['date_debut'], 0, 2);
        $date2 = substr($row['date_fin'], 6, 4)."-".substr($row['date_fin'], 3, 2)."-".substr($row['date_fin'], 0, 2);
        $var=$row1["Description"];
        //echo($row1['Description']);
        $data[] = array(
            'id'        => $row["id_e"],
            'title'     => $var,
            'start'     => $date1,
            'end'       => $date2
        );
      }
    }


    echo json_encode($data);
    /*$date = substr($_SESSION['date_debut'], 6, 4)."-".substr($_SESSION['date_debut'], 0, 2)."-".substr($_SESSION['date_debut'], 3, 2);
     $today = date("Y-m-d");
      $date_verifie = date_create($date);
       $today_verifie = date_create($today);*/

?>