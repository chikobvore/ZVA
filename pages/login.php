<?php
    session_start();
?>
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
    <link href="../assets/css/home-page.css" rel="stylesheet" />
    <link href="../assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <script type="text/javascript" src="../assets/js/form-handler.js"></script>
    <script type="text/javascript" src="../assets/js/login.js"></script>

</head>
<body>
<div class="register">
    <div class="row">
        <div class="col-md-3 register-left">
            <img src="../assets/img/logo.png" alt=""/>
            <h3>Welcome</h3>
            <p>Zimbabwe Volleyball Association !</p>
        </div>
        <div class="col-md-9 register-right">
            <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                <li class="nav-item">
                    <button class="nav-link active" onclick = "signin()">Sign in</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link" onclick = "signup()">Sign Up</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
            
                <div class="row">
                    <div class="col-md-2">

                    </div>
                    <div class="col-md-8">
                    <p style="color: green; font: 36px;"><b><?php if (!empty($_SESSION['login'])) {
                        echo $_SESSION['login'];
                      }else{ echo "Please fill in all the details as required";} ?></center></p></b>

                        <div id="signin" style = "margin-top:50px;">
                            <div class="register-form">

                                <form method = "POST" action = "../php/login.php">
                                <div class="form-group">
                                    <label class = "control-label">Username</label>
                                    <input type="email" class = "form-control" name = "email">
                                </div>
                                <div class="form-group">
                                    <label class = "control-label">Password</label>
                                    <input type="password" class = "form-control" name = "password">
                                </div>
                                <center>
                                    <button type = "submit" class="btn btn-primary">Login</button>
                                </center>
                                </form>
                            </div>
                            
                        </div>
                        <div id="signup"  class="register-form" style = "display: none;margin-top:50px">
                            <div class="register-form">
                                <form method = "POST" action = "../php/signup.php">
                                    <div class="form-group">
                                        <label class = "control-label">Email</label>
                                        <input type="text" class = "form-control" name = "email">
                                    </div>
                                    <div class="form-group">
                                        <label class = "control-label">Username</label>
                                        <input type="text" class = "form-control" name = "name">
                                    </div>
                                    <div class="form-group">
                                        <label class = "control-label">Password</label>
                                        <input type="password" class = "form-control" name = "p1">
                                    </div>
                                    <div class="form-group">
                                        <label class = "control-label">ConfrimPassword</label>
                                        <input type="password" class = "form-control" name = "p2">
                                    </div>
                                    <center>
                                        <button type = "submit" class="btn btn-primary">Sign Up</button>
                                    </center>
                                </form>
                            </div>  
                        </div>
                        
                    </div>
                    <div class="col-md-2">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    unset($_SESSION['login']);
?>
</body>
<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
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