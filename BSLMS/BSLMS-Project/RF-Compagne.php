<?php
  session_start();
 ?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>RF | Ingenierie-Success</title>


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
                <li >
                    <a href="RF-Dashboard.php"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Dashboard</span></a>
                </li>
                <li>
                    <a href="RF-Agenda.html"><i class="fa fa-th-large"></i> <span class="nav-label">Agenda</span></a>
                </li>
                <li class="active">
                    <a href="#"><i class="fa fa-diamond"></i> <span class="nav-label">Ingénierie formation</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li ><a href="RF-Compagne.php" >Compagne de formation</a></li>
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
               <a href="logout.php">
                   <i class="fa fa-sign-out"></i> Log out
               </a>
           </li>
            </ul>

        </nav>
        </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <a href="RF-Ingenierie.php">
                              <button type="submit" class="btn btn-rounded btn-outline btn-primary">Ajouter</button>
                            </a>
                        </div>
                        <div class="ibox-content">

                            <div class="table-responsive">
                                <table class="table table-striped" style="text-align:center">
                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th>Nom de la compagne</th>
                                        <th>Population</th>
                                        <th>Echantillion</th>
                                        <th colspan="6">Gestion</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                      <?php
                                        include ("connect_db.php");
                                        $result = $connect->query('select *from compagne');
                                        $i = 1;
                                        while($row = $result->fetch())
                                        {
                                          echo('<tr>');
                                          echo("<td>".$i."</td>");
                                          echo("<td>".$row['Nom']."</td>");
                                          echo("<td>".$row['population']."</td>");
                                          echo("<td>".$row['echantillion']."</td>");
                                          echo('<td><button class="btn btn-circle btn-warning" type="button" opt="delete" id="'.$row['id'].'"><i class="fa fa-warning"></i></button></td>');
                                          echo('<td><button class="btn btn-circle btn-info" type="button" id="'.$row['id'].'"><i class="fa fa-paste"></i> </button></td>');
                                          echo('<td><button class="btn btn-circle btn-primary" type="button" id="'.$row['id'].'"><i class="fa fa-check"></i></button></td>');
                                          echo('<td><button class="btn btn-circle btn-info" type="button" opt="relancer" id="'.$row['id'].'"><i class="fa fa-paper-plane-o"></i></button></td>');
                                          echo('<td><button class="btn btn-circle btn-warning" type="button" opt="prolonger" data-toggle="modal" data-target="#myModal2" id="'.$row['id'].'"><i class="fa fa-paint-brush"></i></button></td>');
                                          echo('<td><button class="btn btn-circle btn-info" type="button" opt="email" id="'.$row['id'].'"><i class="fa fa-mail-forward"></i></button></td>');
                                          $i++;
                                          echo('</tr>');
                                        }
                                       ?>

                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                    <div class="ibox ">
                      <div class="modal inmodal" id="myModal2" tabindex="-1" role="dialog" aria-hidden="true">
                          <div class="modal-dialog">
                              <div class="modal-content animated flipInY">
                                  <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                      <h4 class="modal-title">Prolongation</h4>
                                  </div>
                                  <div class="modal-body">
                                    <div class="form-group" id="data_1">
                                        <label>Nouvelle Date *</label>
                                        <div class="input-group date">
                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                            <input type="text" class="form-control" id="date_nv" name="date_nv" value="today">
                                        </div>
                                    </div>
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

          $("button").click(function(){
            if($(this).attr("type") == "button" && $(this).attr("opt") == "delete")
            {
              var id = $(this).attr("id");
              $(this).parent().parent().remove();
              $.ajax({
                url:"delete_request.php",
                type:"POST",
                data:{id:id},
                success:function()
                {
                  alert("Compagne supprimé avec success");
                }
              });
            }
            else if($(this).attr("opt") == "relancer")
            {
              var id = $(this).attr("id");
              $.ajax({
                url:"resend_request.php",
                type:"POST",
                data:{id:id},
                success:function()
                {
                  alert("Compagne a été relancée");
                }
              });
            }
            else if ($(this).attr("opt") == "email")
            {
              var id = $(this).attr("id");
              $.ajax({
                url:"send_mail.php",
                type:"POST",
                data:{id:id},
                success:function()
                {
                  alert("Email a été lancée");
                }
              });
            }
            else if ($(this).attr("opt") == "prolonger")
            {
              var id = $(this).attr("id");
              var a = '<button type="button" class="btn btn-primary" id2="'+id+'" id="prolong_button" opt="prolong">Save changes</button>';
              if($("#prolong_button").length == 0)
                $("#footer_modal").append(a);
              else
              {
                $("#prolong_button").remove();
                $("#footer_modal").append(a);
              }
              $("#prolong_button").click(function(){
                var b = $("#date_nv").val();
                var id = $(this).attr("id2");
                $.ajax({
                  url:"prolonge_date.php",
                  type:"POST",
                  data:{id:id, b:b},
                  success:function()
                  {
                    alert("Date de fin  a été prolongée jusqu'à "+b);
                  }
                });
              });
            }
          });

          var mem = $('#data_1 .input-group.date').datepicker({
              todayBtn: "linked",
              keyboardNavigation: false,
              forceParse: false,
              calendarWeeks: true,
              autoclose: true
          });
       });
    </script>

</body>

</html>
