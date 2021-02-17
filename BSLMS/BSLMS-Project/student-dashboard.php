<?php
  session_start();
  include ("connect_db.php");
  include("load_formation_user.php");
  //SELECTIONNER LA NOTE DE L'UTILISATEUR
$query=$connect->query("select note from users where matricule='".$_SESSION['id_user']."'");
$res=$query->fetch();
//COMPTER LES MUST-LEARN DE L'USER
$qr=$connect->query("select count(*) from user_must_learn where matricule='".$_SESSION['id_user']."'");
$slc=$qr->fetch();
//COMPTER LES MUST-LEARN VALIDES
$qry=$connect->query("select count(*) from user_must_learn where matricule='".$_SESSION['id_user']."' and status=1 ");
$slct=$qry->fetch();
//COMPTER LA PRESENCE
$req=$connect->query("select count(*) from user_presence where matricule='".$_SESSION['id_user']."'");
$pres=$req->fetch();
$req1=$connect->query("select count(*) from user_presence where matricule='".$_SESSION['id_user']."' and status=1");
$presence=$req1->fetch();
//TESTS D'ACQUISITION
function is_verified($date){
    $today=date_create(date("Y-m-d"));
    $date1=date_create($date);
    $diff=date_diff($date1,$today);
    if($diff->format("%a") > 0)
        return 1;
    return 0;

}

$moy=$connect->query("select * from user_on_event where matricule='".$_SESSION['id_user']." 'and desiste=0");
$j=0;$som=0;
while($avg=$moy->fetch()){
    $ev=$connect->query("select * from event where id_e=".$avg['id_e']);
    $rw=$ev->fetch();
    $date = substr($rw['date_fin'], 6, 4)."-".substr($rw['date_fin'], 3, 2)."-".substr($rw['date_fin'], 0, 2);
    if(is_verified($date)){
        $som+=$avg['note_test_acquis'];
        $j++;
    }

}
$moyenne=$som/$j; $pourc=($moyenne/20)*100;

//eval-froid
$froid=$connect->query("select count(*) from user_on_event where matricule='".$_SESSION['id_user']."'  and eval_froid=1");
$evalf=$froid->fetch();
//eval-chaud
$chaud=$connect->query("select count(*) from user_on_event where matricule='".$_SESSION['id_user']."'  and eval_chaud=1");
$evalc=$chaud->fetch();
//test-acqui
$acq=$connect->query("select count(*) from user_on_event where matricule='".$_SESSION['id_user']."'  and desiste=0");
$test=$acq->fetch();
//formations passées
$form=$connect->query("select * from user_on_event where matricule='".$_SESSION['id_user']."'  and desiste=0");
$formation=array();
while($event=$form->fetch()){
    $frm=$connect->query("select * from event where id_e=".$event['id_e']);
    $row=$frm->fetch();
    $date1 = substr($row['date_debut'], 6, 4)."-".substr($row['date_debut'], 3, 2)."-".substr($row['date_debut'], 0, 2);
    $date2 = substr($row['date_fin'], 6, 4)."-".substr($row['date_fin'], 3, 2)."-".substr($row['date_fin'], 0, 2);
    $date_d=date_create($date1);
    $date_f=date_create($date2);
    $today=date_create(date("Y-m-d"));
    $diff=date_diff($date_f,$today);
    $diff1=date_diff($date_d,$date_f);
     if(is_verified($date2)){
        $nom=$connect->query("select name from formation where id=".$row["id"]);
        $action=$nom->fetch();
        $formation[]=array(
            'name' =>$action["name"],
            'durée' => $diff1->format("%a jours"),
            'test_acquis' => ($event["note_test_acquis"]/20)*100 ,
            'e_froid' => $event["eval_froid"],
            'e_chaud' => $event["eval_chaud"]
        );
    }
}
 ?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student | Dashboard</title>

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
                    </div>
                    <div class="logo-element">
                        IN+
                    </div>
                </li>
                <li class="active">
                    <a href="student-dashboard.php"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span> <span></span></a>

                </li>

                <li>
                    <a href="student-calendar.html"><i class="fa fa-calendar"></i> <span class="nav-label">Mon agenda</span>  <span class="float-right label label-primary">SPECIAL</span></a>

                </li>
                <li>
                    <a href="student-training-request.php"><i class="fa fa-bookmark"></i> <span class="nav-label">Demande de formation</span></a>
                </li>

                <li>
                    <a href="student-playlist.html"><i class="fa fa-tv"></i> <span class="nav-label">My Playlists</span></a>

                </li>
                <li>
                    <a href="student-salle.html"><i class="fa fa-book"></i><span class="nav-label">Mes Salles</span></a>

                </li>

                <li>
                    <a href="student-mooc.html"><i class="fa fa-graduation-cap"></i> <span class="nav-label">MOOC</span></a>
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
                    <span class="m-r-sm text-muted welcome-message">Bienvenu Mr Leet à BS-Learning vue Apprenant ..</span>
                </li>
                <li>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <span class="text-muted text-xs block">Apprenant<b class="caret"></b></span>
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
                    <div class="col-lg-3">
                      <div class="widget style1">
                              <div class="row">
                                  <div class="col-4 text-center">
                                      <i class="fa fa-trophy fa-5x"></i>
                                  </div>
                                  <div class="col-8 text-right">
                                      <span> Point </span>
                                      <h2 class="font-bold"><?php echo $res["note"]; ?></h2>
                                  </div>
                              </div>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="widget style1 navy-bg">
                          <div class="row">
                              <div class="col-4">
                                  <i class="fa fa-rebel fa-5x"></i>
                              </div>
                              <div class="col-8 text-right">
                                  <span> Mes must Learn </span>
                                  <h2 class="font-bold"><?php echo(($slct[0]/$slc[0])*100); ?>%</h2>
                              </div>
                          </div>
                      </div>
                      <div class="widget style1 red-bg">
                          <div class="row">
                              <div class="col-4">
                                  <i class="fa fa-calendar fa-5x"></i>
                              </div>
                              <div class="col-8 text-right">
                                  <span> Présence </span>
                                  <h2 class="font-bold"><?php echo(($presence[0]/$pres[0])*100); ?>%</h2>
                              </div>
                          </div>
                      </div>
                    </div>
                    <div class="col-lg-2">
                      <div class="widget lazur-bg p-lg text-center">
                          <div class="m-b-md">
                              <i class="fa fa-book fa-4x"></i>
                              <h1 class="m-xs"><b><?php echo $pourc;  ?>%</b></h1>
                              <h3 class="font-bold no-margins">
                                  Mes tests d'acquisition
                              </h3>
                          </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <table class="table">
                          <th>Statistiques</th>
                          <tbody>
                          <tr>
                              <td>
                                  <span class="btn btn-danger m-r-sm"><?php  echo $slc[0]; ?></span>
                                  Must-Learn
                              </td>
                          </tr>
                          <tr>
                            <td>
                                <span class="btn btn-primary m-r-sm"><?php  echo $evalf[0]; ?></span>
                                Evaluation à froid
                            </td>
                          </tr>
                          <tr>
                              <td>
                                  <span class="btn btn-info m-r-sm"><?php  echo $evalc[0]; ?></span>
                                  Evaluation à chaud
                              </td>
                          </tr>
                          <tr>
                            <td>
                                <span class="btn btn-success m-r-sm"><?php  echo $test[0]; ?></span>
                                Test d'acquisition
                            </td>
                          </tr>
                          </tbody>
                      </table>
                    </div>
        </div>
        <div class="row">
                    <div class="col-lg-8">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <h5>Formations passées</h5>
                            </div>
                            <div class="ibox-content">
                              <table class="table table-striped" style="text-align:center">
                                  <thead>
                                  <tr>

                                      <th></th>
                                      <th>Nom de l'action </th>
                                      <th>Durée </th>
                                      <th>Test d'acquisition</th>
                                      <th>Evaluation à chaud</th>
                                      <th>Evaluation à froid</th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                <?php
                                $i=1;
                                foreach($formation as $trng){
                                    echo" <tr>
                                    <td class='i-checks'><input type='checkbox' value=''> <i></i></td>
                                    <td>".$trng['name']."</td>
                                    <td>".$trng['durée']."</td>
                                    <td>".$trng['test_acquis']."%</td>";
                                    if($trng['e_chaud'])
                                        echo "
                                    <td><i class='fa fa-check text-navy'></i></td>";
                                    else
                                        echo "<td><i class='fa fa-times text-danger'></i></td>";
                                    if($trng['e_froid'])
                                        echo "<td><i class='fa fa-check text-navy'></i></td>";
                                    else 
                                        echo "<td><i class='fa fa-times text-danger'></i></td>";
                                    
                                    echo "</tr>";
                                    $i++;
                                }
                                 ?>
                                  </tbody>
                              </table>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4">
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
    <script src="js/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="js/plugins/chartJs/Chart.min.js"></script>

    <script>
        $(document).ready(function() {

            var doughnutData = {
        labels: ["Planifiées","Réalisées","En cours","Retraites" ],
        datasets: [{
            data: <?php echo $data;?>,
            backgroundColor: ['#4472C4', '#ED7D31','#A5A5A5','#FFC000']
        }]
    } ;


    var doughnutOptions = {
        responsive: true
    };


    var ctx4 = document.getElementById("doughnutChart").getContext("2d");
    new Chart(ctx4, {type: 'doughnut', data: doughnutData, options:doughnutOptions});

        });
    </script>
</body>
</html>
