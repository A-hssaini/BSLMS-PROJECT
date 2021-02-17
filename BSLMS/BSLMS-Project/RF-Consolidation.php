<?php
  session_start();
 ?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>RF | Ingenierie-consolidation</title>


    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="css/plugins/steps/jquery.steps.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/plugins/datapicker/datepicker3.css" rel="stylesheet">
    <link href="css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">
    <link href="css/plugins/ionRangeSlider/ion.rangeSlider.css" rel="stylesheet">

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
                <li>
                    <a href="RF-Dashboard.php"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Dashboard</span></a>
                </li>
                <li>
                    <a href="RF-Agenda.html"><i class="fa fa-th-large"></i> <span class="nav-label">Agenda</span></a>
                </li>
                <li class="active">
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
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
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
                   <li><a class="dropdown-item" href="Admin-Dashboard.php">Administrateur</a></li>
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
               <a href="login.html">
                   <i class="fa fa-sign-out"></i> Log out
               </a>
           </li>
            </ul>

        </nav>
        </div>
        <div class="ibox ">
        <div class="wrapper wrapper-content animated fadeInRight" id="general">
          <select name="compagne" id="combo_compagne">
            <?php
              $comp1 = 0;
              include("connect_db.php");
              $result = $connect->query('select *from compagne where status=1');
              while($row = $result->fetch())
              {
                if($comp1 == 0)
                  $comp1 = $row['id'];
                echo('<option value="'.$row['id'].'">'.$row['Nom'].'</option>');
              }
              $_SESSION['comp'] = $comp1;
            ?>
          </select>
          <div id="group_to_change">
            <div class="row">
              <div class="col-lg-9">
                <div class="row">
                  <div class="col-lg-4">
                    <div class="widget style1 lazur-bg">
                      <div class="row">
                          <div class="col-4">
                              <i class="fa fa-calendar fa-5x"></i>
                          </div>
                          <div class="col-8 text-right">
                              <h3 class="font-bold">02/01/2020</h3>
                              <h3 class="font-bold">à 02/05/2020</h3>
                          </div>
                      </div>
                  </div>
                </div>
                <div class="col-lg-4">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <div class="ibox-tools">
                                <span class="label label-primary float-right">Manager</span>
                            </div>
                            <h5>Collaborateurs concernées</h5>
                        </div>
                        <div class="ibox-content">
                            <h1 class="no-margins">20</h1>
                            <div class="stat-percent font-bold text-navy">90% <i class="fa fa-level-up"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Collaborateurs actifs</h5>
                        </div>
                        <div class="ibox-content">
                            <h1 class="no-margins">10</h1>
                            <div class="stat-percent font-bold text-warning">50% <i class="fa fa-level-up"></i></div>
                        </div>
                    </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <div class="table-responsive">
                      <table class="table table-striped">
                          <thead>
                            <tr>
                              <th></th>
                              <th>Nombre des Collaborateurs </th>
                              <th>Action </th>
                              <th>Thèmes</th>
                              <th>Domaines</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td><input type="checkbox"  checked class="i-checks" name="input[]"></td>
                              <td>15</td>
                              <td>PHP</td>
                              <td>info</td>
                              <td>info</td>
                            </tr>
                            <tr>
                              <td><input type="checkbox"  checked class="i-checks" name="input[]"></td>
                              <td>10</td>
                              <td>ORACLE</td>
                              <td>info</td>
                              <td>info</td>
                            </tr>
                            <tr>
                              <td><input type="checkbox"  checked class="i-checks" name="input[]"></td>
                              <td>12</td>
                              <td>JAVA</td>
                              <td>info</td>
                              <td>info</td>
                            </tr>
                          </tbody>
                      </table>
                          <p style="text-align:center;">
                            <button data-toggle="button" class="btn btn-primary btn-outline" type="button">Extraire Selection</button>
                            <button data-toggle="button" class="btn btn-primary btn-outline" type="button">Extraire Bilan</button>
                            <button data-toggle="button" class="btn btn-primary btn-outline" type="button">Prospecte</button>
                          </p>
                    </div>
                </div>
              </div>
              </div>
                <div class="col-lg-3">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Demandes exprimées</h5>
                        </div>
                        <div class="ibox-content">
                          <div class="row">
                            <div class="col-lg-12">
                              <ul class="stat-list">
                                  <li>
                                      <h2 class="no-margins">10</h2>
                                      <small>Demandes validées</small>
                                      <div class="stat-percent">60% <i class="fa fa-level-up text-navy"></i></div>
                                      <div class="progress progress-mini">
                                          <div style="width: 60%;" class="progress-bar"></div>
                                      </div>
                                  </li>
                                  <li>
                                      <h2 class="no-margins ">5</h2>
                                      <small>Demandes rejetées</small>
                                      <div class="stat-percent">30% <i class="fa fa-level-down text-navy"></i></div>
                                      <div class="progress progress-mini">
                                          <div style="width: 30%;" class="progress-bar"></div>
                                      </div>
                                  </li>
                                  <li>
                                      <h2 class="no-margins ">2</h2>
                                      <small>Demandes en attente</small>
                                      <div class="stat-percent">10% <i class="fa fa-bolt text-navy"></i></div>
                                      <div class="progress progress-mini">
                                          <div style="width: 10%;" class="progress-bar"></div>
                                      </div>
                                  </li>
                                  </ul>
                                </div>
                          </div>
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

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- Steps -->
    <script src="js/plugins/steps/jquery.steps.min.js"></script>

    <!-- Jquery Validate -->
    <script src="js/plugins/validate/jquery.validate.min.js"></script>

    <!-- Data picker -->
    <script src="js/plugins/datapicker/bootstrap-datepicker.js"></script>

    <!-- Date range use moment.js same as full calendar plugin -->
    <script src="js/plugins/fullcalendar/moment.min.js"></script>

    <!-- Date range picker -->
    <script src="js/plugins/daterangepicker/daterangepicker.js"></script>

    <!-- IonRangeSlider -->
    <script src="js/plugins/ionRangeSlider/ion.rangeSlider.min.js"></script>

    <!-- Input Mask-->
     <script src="js/plugins/jasny/jasny-bootstrap.min.js"></script>

    <script>

        $(document).ready(function(){


          $('#combo_compagne').change(function(){
            $( "select option:selected" ).each(function() {
              var id = $(this).attr('value');
              $("#group_to_change").remove();
              $.ajax({
                url:"consolidation_update.php",
                type:"POST",
                data:{id:id},
                success:function(div)
                {
                  $('#general').append(div);
                }
              });
            });
          });



       });
    </script>

</body>

</html>
