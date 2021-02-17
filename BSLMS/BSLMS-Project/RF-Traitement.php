<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>RF | Traitement</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

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
                    <span class="m-r-sm text-muted welcome-message">Bienvenur Mr Leet à BS-Learning vue RF ..</span>
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
                    <a href="logout.php">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>

            </ul>

        </nav>
        </div>
        <div class="wrapper wrapper-content">
          <div class="ibox ">
              <div class="ibox-content">

                  <div class="table-responsive">
                      <table class="table table-striped">
                          <thead>
                          <tr>
                              <th></th>
                              <th>Nom </th>
                              <th>Prenom</th>
                              <th>Formation </th>
                              <th>Approuver</th>
                              <th>Rejeter</th>
                          </tr>
                          </thead>
                          <tbody>
                            <?php
                              include ("connect_db.php");
                              $result = $connect->query('select *from user_demande where status=1');
                              $i = 1;
                              while($row = $result->fetch())
                              {
                                $result2 = $connect->query('select *from users where matricule="'.$row['id_user'].'"');
                                $row2 = $result2->fetch();
                                $result3 = $connect->query('select *from formation where id="'.$row['id_e'].'"');
                                $row3 = $result3->fetch();
                                echo('<tr>');
                                echo("<td>".$i."</td>");
                                echo("<td>".$row2['nom']."</td>");
                                echo("<td>".$row2['prenom']."</td>");
                                echo("<td>".$row3['name']."</td>");
                                echo('<td><button class="btn btn-outline btn-primary dim" type="button" opt="accepter" id="'.$row['id_user'].'"
                                 id2="'.$row['id_e'].'"><i class="fa fa-check"></i></button></td>');
                                echo('<td><button class="btn btn-outline btn-danger dim" type="button" opt="refuser" id="'.$row['id_user'].'"
                                  id2="'.$row['id_e'].'"><i class="fa fa-trash"></i></button></td>');
                                $i++;
                                echo('</tr>');
                              }
                             ?>

                          </tbody>
                      </table>
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

    <script>
        $(document).ready(function() {

          $("button").click(function(){
            if($(this).attr("type") == "button" && $(this).attr("opt") == "accepter")
            {
              var id = $(this).attr("id");
              var id2 = $(this).attr("id2");
              var opt = 1;
              $(this).parent().parent().remove();
              $.ajax({
                url:"traitement_demande.php",
                type:"POST",
                data:{id:id, id2:id2, opt:opt},
                success:function()
                {
                  alert("Demande a été approuvé");
                }
              });
            }
            else if($(this).attr("opt") == "refuser")
            {
              var id = $(this).attr("id");
              var id2 = $(this).attr("id2");
              var opt = 0;
              $(this).parent().parent().remove();
              $.ajax({
                url:"traitement_demande.php",
                type:"POST",
                data:{id:id, id2:id2, opt:opt},
                success:function()
                {
                  alert("Demande a été refusée");
                }
              });
            }
          });


            });
    </script>
</body>
</html>
