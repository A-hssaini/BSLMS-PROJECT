 <?php

session_start();
include ("connect_db.php");

$matr=$_SESSION['id_user'];

if($_POST['num']==1){

    $qr='select * from user_demande where id_event='.$_POST['id'].' and id_user="'.$matr.'" and source = "agenda"';
    $res=$connect->query($qr);
    $var=$res->fetch();
if(!isset($var['id_user'])){
    
 $query = "
 INSERT INTO user_demande 
 (id_user, id_event, status,source) 
 VALUES (:id_user, :id_event, :status,:source)
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':id_user'  =>   'IA1745',
   ':id_event' => $_POST['id'],
   ':status' => 0,
   ':source' => 'agenda'
  )
 );
}
}
if($_POST['num']==2) {
    $qr='select * from user_demande where id_event='.$_POST['id'].' and id_user="'.$matr.'" and source = "catalogue"';
    $res=$connect->query($qr);
    $var=$res->fetch();
    if(!isset($var['id_user'])){
    $query = "
    INSERT INTO user_demande 
    (id_user, id_event, status,source) 
 VALUES (:id_user, :id_event, :status,:source)";
    $statement = $connect->prepare($query);
    $statement->execute(
     array(
      ':id_user'  =>   'IA1745',
      ':id_event' => $_POST['id'],
      ':status' => 0,
      ':source' =>'catalogue'
     )
    );

   }
 }
 $mng=$connect->query('select email from users where matricule in (select matricule_manager from users where matricule="IA1745")');
 $email=$mng->fetch();
 $dest=array();
 if(!empty($statement)){
    $dest=array(
        'confirmation' => 'Votre demande est bien saisie et envoyée en guise de traitement',
        'type' => 1
    );
     $std=mail("ahssaini98@gmail.com","Confirmation","veuillez consulter votre espace traitement de demande");
 } else
 $dest=array(
    'confirmation' => 'Vous avez déja demandé cette formation',
    'type' => 2
);
 echo json_encode($dest);

?>