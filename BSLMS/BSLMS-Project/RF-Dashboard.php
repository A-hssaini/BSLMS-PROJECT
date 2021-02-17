<?php
 // session_start();

  include("RF-data.php");
 ?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>RF | Dashboard</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- morris -->
    <link href="css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">
    <script src="js/plugins/morris/raphael-2.1.0.min.js"></script>

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
                            <span class="block m-t-xs font-bold">RACHIDI ACHRAF</span>
                        </a>
                    </div>
                    <div class="logo-element">
                        IN+
                    </div>
                </li>
                <li class="active">
                    <a href="RF-Dashboard.php"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Dashboard</span></a>
                </li>
                <li>
                    <a href="RF-Agenda.html"><i class="fa fa-th-large"></i> <span class="nav-label">Agenda</span></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-diamond"></i> <span class="nav-label">Ingénierie formation</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="RF-Compagne.php">Compagne de formation</a></li>
                        <li><a href="RF-Traitement.php">Traitement de demande</a></li>
                        <li><a href="RF-Consolidation.php">Consolidation</a></li>
                        <li><a href="RF-AppelOffre.php">Appel d'offre</a></li>
                        <li><a href="RF-Proposition.php">Proposition Fournisseurs</a></li>
                        <li><a href="RF-Planification.php">Planification prévisionelle</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-diamond"></i> <span class="nav-label">Ressources de formation</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="#">E-learning</a></li>
                        <li><a href="#">Tests</a></li>
                        <li><a href="RF-Parcours.html">Parcours</a></li>
                        <li><a href="RF-Catalogues.html">Catalogues</a></li>
                        <li><a href="RF-Fournisseurs.html">Fournisseurs</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-diamond"></i> <span class="nav-label">Post-Formation</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="#">Présence</a></li>
                        <li><a href="#">Evaluation à chaud</a></li>
                        <li><a href="#">Evaluation à froid</a></li>
                    </ul>
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
               <span class="m-r-sm text-muted welcome-message">Bienvenue Mr Leet à BS-Learning vue RF ..</span>
           </li>
           <li>
               <a data-toggle="dropdown" class="dropdown-toggle" href="#">
               <span class="text-muted text-xs block">Responsable de formation<b class="caret"></b></span>
               <ul class="dropdown-menu animated fadeInRight m-t-xs">

                   <li><a class="dropdown-item" href="student-dashboard.php">Apprenant</a></li>
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
              <div class="col-lg-8">
                  <div class="ibox ">
                      <div class="ibox-content">
                              <div>
                                  <span class="float-right text-right">
                                  <small>Décrementation du budget pendant l'année</small>
                                  </span>
                                  <h1 class="m-b-xs">MAD 50000</h1>
                                  <h3 class="font-bold no-margins">
                                      Budget
                                  </h3>
                              </div>

                          <div>
                              <canvas id="lineChart" height="70"></canvas>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4">
                <table class="table">
                    <th>Statistiques</th>
                    <tbody>
                    <tr>
                        <td>
                            <span class="btn btn-danger m-r-sm"><?php echo $slc[0]; ?></span>
                            Must-Learn
                        </td>
                    </tr>
                    <tr>
                      <td>
                          <span class="btn btn-primary m-r-sm"><?php echo $evalf[0]; ?></span>
                          Evaluation à froid
                      </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="btn btn-info m-r-sm"><?php echo $evalc[0]; ?></span>
                            Evaluation à chaud
                        </td>
                    </tr>
                    <tr>
                      <td>
                          <span class="btn btn-success m-r-sm"><?php echo $test[0]; ?></span>
                          Test d'acquisition
                      </td>
                    </tr>
                    </tbody>
                </table>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                  <div class="ibox ">
                      <div class="ibox-title">
                          <h5>Statistiques des entités</h5>
                      </div>
                      <div class="ibox-content">
                        <table class="table table-striped" style="text-align:center">
                            <thead>
                            <tr>

                                <th>Nom de l'entité</th>
                                <th>Nombre d'Action</th>
                                <th>Durée moyenne formation </th>
                                <th>Test d'acquisition </th>
                                <th>Evaluation à froid</th>
                                <th>Présence</th>
                                <th>Plus détails</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php 
                        $tot=0;$tot1=0;$tot2=0;$tot3=0;$tot4=0;
                        $j=0;
                    foreach($donnees as $data){
                       echo " <tr>
                       <td>".$data['desc']." </td>
                       <td>".$data['actions']." </td>
                       <td>".$data['durée']." jours</td>
                       <td>".$data['acquis']." %</td>
                       <td>".$data['froid']." %</td>
                       <td>".$data['presence']."%</td>
                       <td><button class='btn btn-info btn-circle' type='button' data-toggle='modal' data-target='#myModal2' data-id=".$data['id']." opt='myBtn'>
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
                <div class="col-lg-6">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Actions</h5>

                        </div>
                        <div class="ibox-content">
                            <div>
                                <canvas id="doughnutChart" height="140"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
              <div class="row" >
                <div class="col-lg-10">
                  <div class="ibox ">
                    <div class="modal inmodal fade" id="myModal2" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content animated flipInY">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                    <h3>Statistiques de l'entité Administration</h3>
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
              <div class="row">
                <div class="col-lg-12">
                  <div class="ibox ">
                    <div class="modal inmodal fade" id="myModal3" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content animated flipInY">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                    <h3>Achraf</h3>
                                </div>
                                <div class="modal-body1">
                               
                                </div>
                                <div class="modal-footer" id="footer_modal2">
                                    <button type="button" class="btn btn-white" id="modalButton2" data-dismiss="modal">Close</button>

                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-8">
                  <div class="ibox">
                    <div class="ibox-title">
                        <h5>Nombre de jours H de formation </h5>
                    </div>
                    <div class="ibox-content">
                        <div id="morris-bar-chart"></div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="ibox">
                    <div class="ibox-title">
                        <h5>Taux des personnes formées </h5>
                    </div>
                    <div class="ibox-content">
                        <div id="pie"></div>
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

    <script src="js/plugins/morris/morris.js"></script>

    <!-- ChartJS-->
    <script src="js/plugins/chartJs/Chart.min.js"></script>
    <script src="js/plugins/d3/d3.min.js"></script>
    <script src="js/plugins/c3/c3.min.js"></script>

    <script>
$(document).ready(function() {

          /*$('#myModal3').on('shown.bs.modal', function () {
            $( "#morris-donut-chart2" ).empty();
            Morris.Donut({
                element: 'morris-donut-chart2',
                data:,
                resize: true,
                colors: ['#4472C4', '#ED7D31','#A5A5A5','#FFC000'],
            });
          });
*/
var tag = '<h2 class="font-bold"><?php echo $tot1;?> jours</h2>';
$('#widg').append(tag);
$('button').click(function()
{ 
if($(this).attr("opt")=="myBtn"){

 var nm = $(this).data('id');
//Ajax request
$.ajax({
 type:'POST',
 url:'RF-data_2.php',
 data:{nm:nm},
 success:function(page)
 {
 // Add response in Modal body
 $('.modal-body').modal("dispose");
 $('.modal-body').html(page);
 }
});
}
});
          var lineData = {
              labels: ["January", "February", "March", "April", "May", "June", "July","August","September","October","November","December"],
              datasets: [
                  {
                      label: "Consommation de Budget",
                      backgroundColor: "rgba(26,179,148,0.5)",
                      borderColor: "rgba(26,179,148,0.7)",
                      pointBackgroundColor: "rgba(26,179,148,1)",
                      pointBorderColor: "#fff",
                      data: [10, 43, 50, 60, 12, 10, 34, 52, 48, 30, 36, 22]
                  },
                  {
                      label: "Consommation de Budget 2019",
                      backgroundColor: "rgba(0,128,0,0.5)",
                      borderColor: "rgb(0,127,0,0.5)	",
                      pointBackgroundColor: "black",
                      pointBorderColor: "#fff",
                      data: [10, 23, 45, 22, 12, 15, 30, 35, 32, 40, 43, 22]
                  }
              ]
          };

          var lineOptions = {
              responsive: true
          };


          var ctx = document.getElementById("lineChart").getContext("2d");
          new Chart(ctx, {type: 'line', data: lineData, options:lineOptions});
          var doughnutData = {
        labels: ["Planifiées","Réalisées","En cours","Retraites" ],
        datasets: [{
            data: <?php echo $_SESSION["datos"];?>,
            backgroundColor: ['#4472C4', '#ED7D31','#A5A5A5','#FFC000']
        }]
    } ;


    var doughnutOptions = {
        responsive: true
    };

    var ctx4 = document.getElementById("doughnutChart").getContext("2d");
    new Chart(ctx4, {type: 'doughnut', data: doughnutData, options:doughnutOptions});

    Morris.Bar({
              element: 'morris-bar-chart',
              data: [{ y: 'janvier', a: 60, b: 50 },
                  { y: 'février', a: 75, b: 65 },
                  { y: 'Mars', a: 50, b: 40 },
                  { y: 'Avril', a: 75, b: 65 },
                  { y: 'Mai', a: 50, b: 40 },
                  { y: 'Juin', a: 75, b: 65 },
                  { y: 'Juillet', a: 100, b: 90 },
                  { y: 'Aouat', a: 75, b: 65 },
                  { y: 'Septembre', a: 70, b: 65 },
                  { y: 'Octobre', a: 75, b: 75 },
                  { y: 'Novembre', a: 25, b: 35 },
                  { y: 'Decembre', a: 15, b: 25 }],
              xkey: 'y',
              ykeys: ['a', 'b'],
              labels: ['2020', '2019'],
              hideHover: 'auto',
              resize: true,
              barColors: ['#1ab394', '#cacaca'],
          });
          
          c3.generate({
              bindto: '#pie',
              data:{
                  columns: [
                      ['formé', <?php echo $formes; ?>],
                      ['Non formé', <?php echo $nonformes ;?>]
                  ],
                  colors:{
                      data1: '#1ab394',
                      data2: '#BABABA'
                  },
                  type : 'pie'
              }
          });
        });
    </script>
</body>
</html>
