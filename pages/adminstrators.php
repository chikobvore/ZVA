<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Zimbabwe Volleyball Association</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/css/main.css" rel="stylesheet" />
    <script type="text/javascript" src="../assets/js/form-handler.js"></script>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-color ="black">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="#" class="simple-text">
                        Zimbabwe Volleyball Association
                    </a>
                </div>
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard.php">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class = "active">
                        <a class="nav-link" href="players.php">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>Players</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="coaches.php">
                            <i class="nc-icon nc-notes"></i>
                            <p>Coaches</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="refree">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>Refees</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link active" href="adminstrators.php">
                            <i class="nc-icon nc-atom"></i>
                            <p>Adminstrators</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="view_members.php">
                            <i class="nc-icon nc-pin-3"></i>
                            <p>Members</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./notifications.html">
                            <i class="nc-icon nc-bell-55"></i>
                            <p>Notifications</p>
                        </a>
                    </li>
                    <li class="nav-item active active-pro">
                        <a class="nav-link active" href="upgrade.html">
                            <i class="nc-icon nc-alien-33"></i>
                            <p>Log Out</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#pablo"> Adminstrator </a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="nav navbar-nav mr-auto">
                            <!-- <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="dropdown">
                                    <i class="nc-icon nc-palette"></i>
                                    <span class="d-lg-none">Adminstrator </span>
                                </a>
                            </li> -->
                            <!-- <li class="dropdown nav-item">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <i class="nc-icon nc-planet"></i>
                                    <span class="notification">5</span>
                                    <span class="d-lg-none">Notification</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Notification 1</a>
                                    <a class="dropdown-item" href="#">Notification 2</a>
                                    <a class="dropdown-item" href="#">Notification 3</a>
                                    <a class="dropdown-item" href="#">Notification 4</a>
                                    <a class="dropdown-item" href="#">Another notification</a>
                                </ul>
                            </li> -->
                            
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <span class="no-icon">Nyasha Chikobvore</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nc-icon nc-zoom-split"></i>
                                    <span class="d-lg-block">&nbsp;Search</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <span class="no-icon">Log out</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
    
           <div id = "players"> 
            <div class="row">
                <div class="col-md-12">
                    <div class="tile">
                        <div class="tile-header">
                            <img src = "../assets/img/logo2.png" style = "display: inline;">
                            <h1 style = "display: inline;margin-left:60px;">   Zimbabwe Volleyball Association</h1>
                        </div>
                        <hr>
                        <div class="tile-body">
                        <table class="table table-hover table-bordered" id="sampleTable">
                            <thead>
                                <tr>
                                    <th>Member No</th>
                                    <th>Name</th>
                                    <th>Surname</th>
                                    <th>Gender</th>
                                    <th>National ID</th>
                                    <th>Passport No</th>
                                    <th>Email</th>
                                    <th>Contact</th>
                                    <th>Physical Address</th>
                                    <th>Photo</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                require '../dbh/dbh.php';
                                $sql = "SELECT * FROM adminstrators";
                                $result = mysqli_query($Conn,$sql);
                                $confirm = mysqli_num_rows($result);
                                if ($confirm >0 )
                                {
                                    while ($row = mysqli_fetch_assoc($result))
                                    {
                                        $pic = $row['Profile'];
                                          echo "<tr>".
                                                    "<td>".$row['Member_No']."</td>".
                                                    "<td>".$row['Name']."</td>".
                                                    "<td>".$row['Surname']."</td>".
                                                    "<td>".$row['Gender']."</td>".
                                                    "<td>".$row['National_ID']."</td>".
                                                    "<td>".$row['Passport_No']."</td>".
                                                    "<td>".$row['Email']."</td>".
                                                    "<td>".$row['Contact']."</td>".
                                                    "<td>".$row['Physical_Address']."</td>".
                                                    "<td>"."<a href = '$pic'>"."<img src = '$pic' height= '50px' width = '50px'>"."</a>"."</td>".
                                              "</tr>";
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
            </div>

            <div id = "prof" style = "display: none;"> 
            <div class="row">
                <div class="col-md-12">
                    <div class="tile">
                        <div class="tile-header">
                            <img src = "../assets/img/logo2.png" style = "display: inline;">
                            <h1 style = "display: inline;margin-left:60px;">   Zimbabwe Volleyball Association</h1>
                        </div>
                        <hr>
                        <div class="tile-body">
                        <table class="table table-hover table-bordered" id="sampleTable1">
                            <thead>
                                <tr>
                                    <th>Member No</th>
                                    <th>Name</th>
                                    <th>Surname</th>
                                    <th>Current Position</th>
                                    <th>Province</th>
                                    <th>Organization</th>
                                    <th>Telephone</th>
                                    <th>Period in Position</th>
                                    <th>End of Tenure</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                require '../dbh/dbh.php';
                                $sql = "SELECT * FROM adminstrators,admin_work_details WHERE adminstrators.Member_No = admin_work_details.Member_No";
                                $result = mysqli_query($Conn,$sql);
                                $confirm = mysqli_num_rows($result);
                                if ($confirm >0 )
                                {
                                    while ($row = mysqli_fetch_assoc($result))
                                    {
                                          echo "<tr>".
                                                    "<td>".$row['Member_No']."</td>".
                                                    "<td>".$row['Name']."</td>".
                                                    "<td>".$row['Surname']."</td>".
                                                    "<td>".$row['Current_Position']."</td>".
                                                    "<td>".$row['Province']."</td>".
                                                    "<td>".$row['Organization']."</td>".
                                                    "<td>".$row['Telephone']."</td>".
                                                    "<td>".$row['Position_period']."</td>".
                                                    "<td>".$row['Tenure']."</td>".
                                              "</tr>";
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
            </div>

            <div id = "health_info" style = "display: none;"> 
            <div class="row">
                <div class="col-md-12">
                    <div class="tile">
                        <div class="tile-header">
                            <img src = "../assets/img/logo2.png" style = "display: inline;">
                            <h1 style = "display: inline;margin-left:60px;">   Zimbabwe Volleyball Association</h1>
                        </div>
                        <hr>
                        <div class="tile-body">
                        <table class="table table-hover table-bordered" id="sampleTable2">
                            <thead>
                                <tr>
                                    <th>Member No</th>
                                    <th>Name</th>
                                    <th>Surname</th>
                                    <th>Appointment</th>
                                    <th>Type</th>
                                    <th>Province</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                require '../dbh/dbh.php';
                                $sql = "SELECT * FROM adminstrators,appointments WHERE adminstrators.Member_No = appointments.Member_No";
                                $result = mysqli_query($Conn,$sql);
                                $confirm = mysqli_num_rows($result);
                                if ($confirm >0 )
                                {
                                    while ($row = mysqli_fetch_assoc($result))
                                    {
                                          echo "<tr>".
                                                    "<td>".$row['Member_No']."</td>".
                                                    "<td>".$row['Name']."</td>".
                                                    "<td>".$row['Surname']."</td>".
                                                    "<td>".$row['Appointment']."</td>".
                                                    "<td>".$row['Type']."</td>".
                                                    "<td>".$row['Province']."</td>".
                                              "</tr>";
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
            </div>

            
            <div id = "sporting" style = "display: none;"> 
            <div class="row">
                <div class="col-md-12">
                    <div class="tile">
                        <div class="tile-header">
                            <img src = "../assets/img/logo2.png" style = "display: inline;">
                            <h1 style = "display: inline;margin-left:60px;">   Zimbabwe Volleyball Association</h1>
                        </div>
                        <hr>
                        <div class="tile-body">
                        <table class="table table-hover table-bordered" id="sampleTable3">
                            <thead>
                                <tr>
                                    <th>Member No</th>
                                    <th>Name</th>
                                    <th>Surname</th>
                                    <th>Gender</th>
                                    <th>Award</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                require '../dbh/dbh.php';
                                $sql = "SELECT * FROM adminstrators,awards WHERE adminstrators.Member_No = awards.Member_No";
                                $result = mysqli_query($Conn,$sql);
                                $confirm = mysqli_num_rows($result);
                                if ($confirm >0 )
                                {
                                    while ($row = mysqli_fetch_assoc($result))
                                    {
                                          echo "<tr>".
                                                    "<td>".$row['Member_No']."</td>".
                                                    "<td>".$row['Name']."</td>".
                                                    "<td>".$row['Surname']."</td>".
                                                    "<td>".$row['Gender']."</td>".
                                                    "<td>".$row['Award']."</td>".
                                              "</tr>";
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
            </div>

            <div id = "education" style = "display: none;"> 
            <div class="row">
                <div class="col-md-12">
                    <div class="tile">
                        <div class="tile-header">
                            <img src = "../assets/img/logo2.png" style = "display: inline;">
                            <h1 style = "display: inline;margin-left:60px;">   Zimbabwe Volleyball Association</h1>
                        </div>
                        <hr>
                        <div class="tile-body">
                        <table class="table table-hover table-bordered" id="sampleTable4">
                            <thead>
                                <tr>
                                    <th>Member No</th>
                                    <th>Name</th>
                                    <th>Surname</th>
                                    <th>Gender</th>
                                    <th>Certificate</th>
                                    <th>Copy</th>
                            </thead>
                            <tbody>
                                <?php
                                require '../dbh/dbh.php';
                                $sql = "SELECT * FROM adminstrators,admin_certificates WHERE adminstrators.Member_No = admin_certificates.Member_No";
                                $result = mysqli_query($Conn,$sql);
                                $confirm = mysqli_num_rows($result);
                                if ($confirm >0 )
                                {
                                    while ($row = mysqli_fetch_assoc($result))
                                    {
                                        $path = $row['File_path'];
                                          echo "<tr>".
                                                    "<td>".$row['Member_No']."</td>".
                                                    "<td>".$row['Name']."</td>".
                                                    "<td>".$row['Surname']."</td>".
                                                    "<td>".$row['Gender']."</td>".
                                                    "<td>".$row['Desciption']."</td>".
                                                    "<td>"."<a href = '$path'>Download</a>"."</td>".
                                              "</tr>";
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
            </div>

            
            <div id = "ntaa" style = "display: none;"> 
            <div class="row">
                <div class="col-md-12">
                    <div class="tile">
                        <div class="tile-header">
                            <img src = "../assets/img/logo2.png" style = "display: inline;">
                            <h1 style = "display: inline;margin-left:60px;">   Zimbabwe Volleyball Association</h1>
                        </div>
                        <hr>
                        <div class="tile-body">
                        <table class="table table-hover table-bordered" id="sampleTable5">
                            <thead>
                                <tr>
                                    <th>Member No</th>
                                    <th>Name</th>
                                    <th>Surname</th>
                                    <th>Gender</th>
                                    <th>Institute</th>
                                    <th>Nature of Institute</th>
                                    <th>Province</th>
                                    <th>Year</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                require '../dbh/dbh.php';
                                $sql = "SELECT * FROM coaches,institutes_coached WHERE coaches.Member_No = institutes_coached.Member_No";
                                $result = mysqli_query($Conn,$sql);
                                $confirm = mysqli_num_rows($result);
                                if ($confirm >0 )
                                {
                                    while ($row = mysqli_fetch_assoc($result))
                                    {
                                          echo "<tr>".
                                                    "<td>".$row['Member_No']."</td>".
                                                    "<td>".$row['Name']."</td>".
                                                    "<td>".$row['Surname']."</td>".
                                                    "<td>".$row['Gender']."</td>".
                                                    "<td>".$row['School']."</td>".
                                                    "<td>".$row['School_type']."</td>".
                                                    "<td>".$row['Province']."</td>".
                                                    "<td>".$row['Year']."</td>".
                                              "</tr>";
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
            </div>

            <footer class="footer">
                <div class="container-fluid">
                    <nav>
                        <ul class="footer-menu">
                            <li>
                                <button type = "button" onclick = "info()" class= "btn btn-default">Info</button>
                            </li>
                            <li>
                                <button type = "button" onclick= "proffession()" class= "btn btn-default">Experience</button>
                            </li>
                            <li>
                                <button type = "button" onclick = "health_information()" class = "btn btn-default">Qualifications</button>
                            </li>
                            <li>
                                <button type = "button" onclick= "sporting()" class = "btn btn-default">Awards</button>
                            </li>
                            <!-- <li>
                                <button type = "button" onclick= "ntaaa()" class = "btn btn-default">Certifications</button>
                            </li> -->
                            <li>
                                <button type = "button" onclick = "education()" class = "btn btn-default">Certifications</button>
                            </li>
                        </ul>
                        <p class="copyright text-center">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                        </p>
                    </nav>
                </div>
            </footer>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<script type="text/javascript" src="../assets/js/plugins/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../assets/js/plugins/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">$('#sampleTable').DataTable();</script>
<script type="text/javascript">$('#sampleTable1').DataTable();</script>
<script type="text/javascript">$('#sampleTable2').DataTable();</script>
<script type="text/javascript">$('#sampleTable3').DataTable();</script>
<script type="text/javascript">$('#sampleTable4').DataTable();</script>
<script type="text/javascript">$('#sampleTable5').DataTable();</script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="../assets/js/plugins/bootstrap-switch.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="../assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<!-- <script src="../assets/js/plugins/bootstrap-notify.js"></script> -->
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="../assets/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/js/demo.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

        demo.showNotification();

    });
</script>

</html>