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

</head>
<body>
<div class="register">
    <div class="row">
        <div class="col-md-3 register-left">
            <img src="../assets/img/logo.png" alt=""/>
            <h3>Welcome</h3>
            <p>Zimbabwe Volleyball Association !</p>
            <input type="button" onclick = "window.location.href = 'login.php'" value="Login"/><br/>
        </div>
        <div class="col-md-9 register-right">
            <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Member</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Back</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h3 class="register-heading">Apply as Member</h3>
                    <div class="register-form">
                <form method="POST" action="../php/addmember.php" enctype="multipart/form-data">
                <p style="color: green; font: 36px;"><b><?php if (!empty($_SESSION['message'])) {
                        echo $_SESSION['message'];
                      }else{ echo "Please fill in all the details as required";} ?></center></p></b>
                    <div id="basic">
                            <b>Member's Details</b>
                        <div class="row">        
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class = "form-control" name= "member_no" placeholder="Member No:" required= "">
                                </div>
                                <div class="form-group">
                                    <input type="text" class = "form-control" name = "name" placeholder="First Name:" required= "">
                                </div>
                                <div class="form-group">
                                    <input type="text" class = "form-control" name = "national_id" placeholder="National ID:" required= "">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class = "control-label">Profile Photo</label>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <input type="file" class = "form-control"  name = "pp" placeholder="Face Photo:">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <input type="text" class = "form-control" name = "surname" placeholder="Surname:" required= "">
                                </div>
                                <div class="form-group">
                                    <input type="text" class = "form-control" name = "passport_no" placeholder="Passport No:" required= "">
                                </div>
                            
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" name = "email" placeholder="Your Email *" value="" required= "">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name = "contact" placeholder="Contact *" value="" required= "">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class = "control-label">Date of Birth</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="date" class="form-control" name = "DOB" placeholder="Your Email *" value="" required= "">
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select name="gender" id="" class="form-control">
                                            <option>Male</option>
                                            <option>Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                        <label class = "control-label">Physical Address</label>
                                    <textarea name="p_address" id="" class = "form-control" style = "height: 100px;" required= "">
                                    </textarea>
                                </div>
                            </div>
                        </div>
                        <div id="btnHome">
                            <center>
                                <button type = "submit" class="btn btn-primary">Save Member</button>
                            </center>
                        </div>
                        <!-- <input type="submit" class="btnRegister"  value="Register"/> -->
                    </div>
                   
            </form>
            </div>

           <div class="tab-pane fade show active" id="referee-tab" role="tabpanel" aria-labelledby="referee-tab">

            </div></div>
        </div>
    </div>
</div>
<?php
    unset($_SESSION['message']);
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