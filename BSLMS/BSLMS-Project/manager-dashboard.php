<?php
session_start();
//include("load_formation_user.php");
//include("statis_modals.php");
  
 function is_verified($date){
    $today=date_create(date("Y-m-d"));
    $date1=date_create($date);
    $diff=date_diff($date1,$today);
    if($diff->format("%a") > 0)
        return 1;
    return 0;

}
include ("connect_db.php");

$query=$connect->query("select matricule,prenom from users where matricule_manager='R3716'");
$datos=array();
$dip=0 ; $cert=0;
  while($users=$query->fetch()){
    $pre=$connect->query("select count(*) from user_presence where matricule='".$users['matricule']."'");
    $presences=$pre->fetch();
    $req1=$connect->query("select count(*) from user_presence where matricule='".$users['matricule']."' and status=1");
    $presence=$req1->fetch();
    $pres=($presence[0] /$presences[0] )*100;
    $req=$connect->query("select * from user_on_event where matricule='".$users['matricule']."' and desiste=0");
      
    $som=0;$act=0; $i=0;$froid=0;
    while($res=$req->fetch()){ 

      $ev=$connect->query("select * from event where id_e=".$res['id_e']);
      $rw=$ev->fetch();
      $date1 = substr($rw['date_debut'], 6, 4)."-".substr($rw['date_debut'], 3, 2)."-".substr($rw['date_debut'], 0, 2);
      $date2 = substr($rw['date_fin'], 6, 4)."-".substr($rw['date_fin'], 3, 2)."-".substr($rw['date_fin'], 0, 2);
      $date_d=date_create($date1);
      $date_f=date_create($date2);   
      $diff=date_diff($date_d,$date_f);
      $forma=$connect->query("select type from formation where id=".$rw['id']);
      $forms=$forma->fetch();
      if(is_verified($date2)){
        if($forms["type"]=='certifiante')
            $cert++;
        elseif($forms["type"]=='diplomante')
            $dip++;
          $froid+=$res['note_eval_froid'];
          $som+=($res['note_test_acquis']/20)*100;
          $act+=$diff->format("%a");
          $i++;
      }
    
    }
    $froid/=$i ; $som/=$i ; $act /= $i;
  $datos[]=array(
      'matricule'=>$users['matricule'],'name' => $users['prenom'], 'actions'=>$i, 'durée'=>$act,'acquis'=>$som, 'froid'=> $froid , 'presence'=>$pres
  );
  }
 ?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Manager | Dashboard</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- orris -->
    <link href="css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">
</head>

<body>
    <div id="wrapper">
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                        <img alt="image" class="rounded-circle" src="img/profile_small.jpg"/>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="block m-t-xs font-bold">HSSAINI ABDESSAMAD</span>
                        </a>

                    <div class="logo-element">
                        IN+
                    </div>
                </li>
                <li class="active">
                    <a href="manager-dashboard.html"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span> <span></span></a>

                </li>

                <li>
                    <a href="manager-calendar.html"><i class="fa fa-calendar"></i> <span class="nav-label">Agenda équipe</span>  <span class="float-right label label-primary">SPECIAL</span></a>

                </li>
                <li>
                    <a href="manager-training-request.php"><i class="fa fa-bookmark"></i> <span class="nav-label">Demande de formation</span></a>
                </li>

                <li>
                    <a href="manager-traitement.html"><i class="fa fa-cog"></i> <span class="nav-label">Traitement demande</span></a>

                </li>
                <li>
                    <a href="manager-parcours.html"><i class="fa fa-bullseye"></i><span class="nav-label">Gestion parcours</span></a>

                </li>
            </ul>

        </div>
    </nav>

        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <form role="search" class="navbar-form-custom" action="search_results.html">
                <div class="form-group">
                    <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                </div>
            </form>
        </div>
            <ul class="nav navbar-top-links navbar-right">
                 <li>
                    <span class="m-r-sm text-muted welcome-message">Bienvenu Mr Leet à BS-Learning vue Manager ..</span>
                </li>
                <li>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <span class="text-muted text-xs block">Manager<b class="caret"></b></span>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">

                        <li><a class="dropdown-item" href="student-Dashboard.php">Apprenant</a></li>
                        <li><a class="dropdown-item" href="Admin-Dashboard.html">Administrateur</a></li>
                        <li><a class="dropdown-item" href="manager-dashboard.php">Manager</a></li>
                        <li><a class="dropdown-item" href="RF-Dashboard.php">Responsable de formation</a></li>
                        <li class="dropdown-divider"></li>
                    </ul>
                </a></li>

                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="mailbox.html" class="dropdown-item">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                    <span class="float-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li>
                            <a href="profile.html" class="dropdown-item">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="float-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li>
                            <a href="grid_options.html" class="dropdown-item">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="float-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="notifications.html" class="dropdown-item">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>


                <li>
                    <a href="logout.php">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
            </ul>

        </nav>
        </div>
            <div class="wrapper wrapper-content">
            <div class="row">
            <div class="col-lg-4">
                  <div class="widget style1 blue-bg">
                      <div class="row">
                          <div class="col-3">
                              <i class="fa fa-calendar fa-5x"></i>
                          </div>
                          <div id="widg" class="col-9 text-right">
                              <span> Durée moyenne des formations </span>
                              
                          </div>
                      </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="widget style1 lazur-bg">
                      <div class="row">
                          <div class="col-4">
                              <i class="fa fa-book fa-5x"></i>
                          </div>
                          <div class="col-8 text-right">
                              <span> Formations certifiantes </span>
                              <h2 class="font-bold"><?php echo $cert;?></h2>
                          </div>
                      </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="widget style1 navy-bg">
                      <div class="row">
                          <div class="col-4">
                              <i class="fa fa-graduation-cap fa-5x"></i>
                          </div>
                          <div class="col-8 text-right">
                              <span> Formations diplômantes </span>
                              <h2 class="font-bold"><?php echo $dip;?></h2>
                          </div>
                      </div>
                  </div>
                </div>
            </div>
              <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h3>Statistiques de l'équipe</h3>
                        </div>
                        <div class="ibox-content">
                          <table class="table table-striped" style="text-align:center">
                              <thead>
                              <tr>

                                  <th>Nom</th>
                                  <th>Nombre Action</th>
                                  <th>Durée moyenne formations </th>
                                  <th>Test d'acquisition </th>
                                  <th>Evaluation à froid</th>
                                  <th>Présence</th>
                                  <th>plus détails</th>
                              </tr>
                              </thead>
                              <tbody>
                        <?php 
                        $tot=0;$tot1=0;$tot2=0;$tot3=0;$tot4=0;
                        $j=0;
                    foreach($datos as $data){
                       echo " <tr>
                       <td>".$data['name']." </td>
                       <td>".$data['actions']." </td>
                       <td>".$data['durée']." jours</td>
                       <td>".$data['acquis']." %</td>
                       <td>".$data['froid']." %</td>
                       <td>".$data['presence']."%</td>
                       <td><button class='btn btn-info btn-circle' type='button' data-toggle='modal' data-target='#myModal2' data-id=".$data['matricule']." opt='myBtn'>
                         <i class='fa fa-link'></i>
                       </button></td>
                   </tr>";
                   $j++;
                   $tot+=$data['actions']; $tot1+=$data['durée']; $tot2+=$data['acquis']; $tot3+=$data['froid'];$tot4+=$data['presence'];   
                }
                $tot1=$tot1/$j; $tot2/=$j; $tot3/=$j; $tot4/=$j;
                        ?>
                             <tr>
                                  <th>Moyen</th>
                                  <td><?php echo $tot; ?></td>
                                  <td><?php echo $tot1; ?> jours</td>
                                  <td><?php echo $tot2; ?>%</td>
                                  <td><?php echo $tot3; ?>%</td>
                                  <td><?php echo $tot4; ?>%</td>
                              </tr>
                              </tbody>
                          </table>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-16">
                    <div class="ibox ">
                      <div class="modal inmodal fade" id="myModal2" tabindex="-1" role="dialog" aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                              <div class="modal-content animated flipInY">
                                  <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                      <h4 class="modaltitle"></h4>
                                  </div>
                                  <div class="modal-body">
                                   

                                  </div>
                                  <div class="modal-footer" id="footer_modal">
                                      <button type="button" class="btn btn-white" id="modalButton" data-dismiss="modal">Close</button>

                                  </div>
                              </div>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Flot -->
    <script src="js/plugins/flot/jquery.flot.js"></script>
    <script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="js/plugins/flot/jquery.flot.pie.js"></script>
    <script src="js/plugins/flot/jquery.flot.symbol.js"></script>
    <script src="js/plugins/flot/jquery.flot.time.js"></script>

    <!-- Peity -->
    <script src="js/plugins/peity/jquery.peity.min.js"></script>
    <script src="js/demo/peity-demo.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- Jvectormap -->
    <script src="js/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

    <!-- EayPIE -->
    <script src="js/plugins/easypiechart/jquery.easypiechart.js"></script>

    <!-- Sparkline -->
    <script src="js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="js/demo/sparkline-demo.js"></script>
    <script src="js/plugins/chartJs/Chart.min.js"></script>

    <script src="js/plugins/morris/morris.js"></script>
    <script src="js/plugins/morris/raphael-2.1.0.min.js"></script>
    <script>
    $(document).ready(function() {
       
     var tag = '<h2 class="font-bold"><?php echo $tot1;?> jours</h2>';
$('#widg').append(tag);
$('button').click(function()
{ 
if($(this).attr("opt")=="myBtn"){

 var id = $(this).data('id');
 
//Ajax request
$.ajax({
 type:'POST',
 url:'statis_modals.php',
 data:{id:id},
 success:function(page)
 {   
     /**/
 // Add response in Modal body
 
 $('.modal-body').html(page);
 var can = '<canvas id="doughnutChart2" height="140"></canvas>';
    if ($('#doughnutChart2').length==0)
      $('#dgnt').append(can);
    else {
      $('#doughnutChart2').remove();
      $('#dgnt').append(can);
    }
 $('#myModal2').on('shown.bs.modal', function () {
     
    var doughnutData = {
        labels: ["Planifiées","Réalisées","En cours","Retraites" ],
        datasets: [{
            data: <?php echo $_SESSION["data"];?>,
            backgroundColor: ['#4472C4', '#ED7D31','#A5A5A5','#FFC000']
        }]
    } ;
    var doughnutOptions = {
        responsive: true
    };


    var ctx4 = document.getElementById("doughnutChart2").getContext("2d");
    new Chart(ctx4, {type: 'doughnut', data: doughnutData, options:doughnutOptions});
    });

 
 }
});
}
});
});
    </script>
</body>
</html>
