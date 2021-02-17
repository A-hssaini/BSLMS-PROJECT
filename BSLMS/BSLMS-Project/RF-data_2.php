<?php 
session_start();
//include('RF-data.php');
include ("connect_db.php");

function is_verified($date){
    $today=date_create(date("Y-m-d"));
    $date1=date_create($date);
    $diff=date_diff($date1,$today);
    if($diff->format("%a") > 0)
        return 1;
    return 0;
  
  }
$entite='';
if(isset($_POST['nm'])){
  $entite=$_POST['nm'];
}
$requete=$connect->query("select matricule,prenom from users where id_entity='".$entite."'");
$lines=array();
while($users=$requete->fetch()){
  $pre=$connect->query("select count(*) from user_presence where matricule='".$users['matricule']."'");
  $presences=$pre->fetch();
  $req1=$connect->query("select count(*) from user_presence where matricule='".$users['matricule']."' and status=1");
  $presence=$req1->fetch();
  $prs=0;
  if($presences[0])
    $prs=($presence[0] /$presences[0] )*100;
  $req=$connect->query("select * from user_on_event where matricule='".$users['matricule']."' and desiste=0");
    
  $somme=0;$action=0; $k=0;$frd=0;
  while($res=$req->fetch()){ 

    $ev=$connect->query("select * from event where id_e=".$res['id_e']);
    $rw=$ev->fetch();
    $date1 = substr($rw['date_debut'], 6, 4)."-".substr($rw['date_debut'], 3, 2)."-".substr($rw['date_debut'], 0, 2);
    $date2 = substr($rw['date_fin'], 6, 4)."-".substr($rw['date_fin'], 3, 2)."-".substr($rw['date_fin'], 0, 2);
    $date_d=date_create($date1);
    $date_f=date_create($date2);   
    $diff=date_diff($date_d,$date_f);

    if(is_verified($date2)){
        $frd+=$res['note_eval_froid'];
        $somme+=($res['note_test_acquis']/20)*100;
        $action+=$diff->format("%a");
        $k++;
    }
  
  }
  if($k){
    $frd/=$k ; $somme/=$k ; $action /= $k;
  }
     
$lines[]=array(
    'matricule'=>$users['matricule'],'name' => $users['prenom'], 'actions'=>$k, 'durée'=>$action,'acquis'=>$somme, 'froid'=> $frd , 'presence'=>$prs
);
}

$table ="";
$tot=0;$tot1=0;$tot2=0;$tot3=0;$tot4=0;
$n=0;
foreach($lines as $line){
    $table.="<tr>
    <td>".$line['name']." </td>
    <td>".$line['actions']." </td>
    <td>".$line['durée']." jours</td>
    <td>".$line['acquis']." %</td>
    <td>".$line['froid']." %</td>
    <td>".$line['presence']."%</td>
    <td><button class='btn btn-info btn-circle' type='button' data-toggle='modal' data-target='#myModal3' data-id=".$line['matricule']." opt='click'>
    <i class='fa fa-link'></i>
    </button></td>
    </tr>";
    $n++;
    $tot+=$line['actions']; $tot1+=$line['durée']; $tot2+=$line['acquis']; $tot3+=$line['froid'];$tot4+=$line['presence'];   
 }
 if($n){
  $tot1=$tot1/$n; $tot2/=$n; $tot3/=$n; $tot4/=$n;

 }
$table.="";

$page ='';
$page .='<div class="col-lg-12">
<div class="ibox">
    <div class="ibox-content">
      <table class="table table-striped" style="text-align:center">
          <thead>
          <tr>
              <th>Nom</th>
              <th>Nombre Action</th>
              <th>Durée moyenne formation </th>
              <th>Test d\'acquisition </th>
              <th>Evaluation à froid</th>
              <th>Présence</th>
              <th>Plus détails</th>
          </tr>
          </thead>
          <tbody>
          '.$table.'
          <tr>
              <th>Moyen</th>
              <td>'.$tot.'</td>
              <td>'.$tot1.'jrs</td>
              <td>'.$tot2.'%</td>
              <td>'.$tot3.'%</td>
              <td>'.$tot4.'%</td>
          </tr>
          </tbody>
      </table>
    </div>
</div>
</div>';
?>
<script>
$(document).ready(function() {
$("button").click(function()
{ 
if($(this).attr("opt")=="click"){
var id = $(this).data("id");

$.ajax({
 type:"POST",
 url:"statis_modals.php",
 data:{id:id},
 success:function(page)
 {

    $(".modal-body1").html(page);
    var can = '<canvas id="doughnutChart2" height="140"></canvas>';
    if ($('#doughnutChart2').length==0)
      $('#dgnt').append(can);
    else {
      $('#doughnutChart2').remove();
      $('#dgnt').append(can);
    }
    $("#myModal3").on("shown.bs.modal", function () {
        var doughnutData = {
        labels: ["Planifiées","Réalisées","En cours","Retraites" ],
        datasets: [{
            data:<?php echo $_SESSION["data"]; ?>,
            backgroundColor: ["#4472C4", "#ED7D31","#A5A5A5","#FFC000"]
        }]
    };

    var doughnutOptions = {
        responsive : true
    };

    var ctx4 = document.getElementById("doughnutChart2").getContext("2d");
   var grf = new Chart(ctx4, {type: "doughnut", data: doughnutData, options:doughnutOptions});
      });
 }
});
}
});
});

</script>
<?php
echo $page;
?>