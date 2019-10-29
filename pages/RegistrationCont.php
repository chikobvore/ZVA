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
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Adminstrators</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Refree</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="members.php">More</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Registration.php" >Back</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h3 class="register-heading">Apply as Adminstrator</h3>
                    <div class="register-form">
                <form method="POST" action="../php/add_admin.php" enctype="multipart/form-data">
                <p style="color: green; font: 36px;"><b><?php if (!empty($_SESSION['message'])) {
                        echo $_SESSION['message'];
                      }else{ echo "Please fill in all the details as required";} ?></center></p></b>
                    <div id="basic">
                            <b>Adminstrator's Details</b>
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
                                <button type = "button" onclick="moredetails()" class="btn btn-primary">Next</button>
                            </center>
                        </div>
                        <!-- <input type="submit" class="btnRegister"  value="Register"/> -->
                    </div>
                    <div style = "display: none;" id= "more-details">
                            <b>More details</b>
                        <div class="row">        
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class = "control-label">Current Position</label>
                                    <input type="date" name = "c_position" class = "form-control" required= "">
                                </div>
                                <div class="form-group">
                                    <label for="contact" class = "control-label">Sporting Organization</label>
                                    <input type="text" name = "organization" class = "form-control" required= "">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class ="control-label">Province</label>
                                    <select name="province" id="" class="form-control">
                                        <option>Harare</option>
                                        <option>Mashonaland East</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="Telephone" class="control-label">Telephone</label>
                                    <input type="text" name= "phone" class = "form-control" required= "">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label  class="control-label">Period</label>
                                <div class="form-group">
                                   <input type = "value" name = "period" class = "form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="place of birth" class="control-label">End of Tenure</label>
                                <div class="form-group">
                                   <input type = "date"  name = "tenure" class = "form-control">
                                </div>
                            </div>
                        </div>
                        <div id="more">
                            <center>
                                <button type = "button" onclick="basicdetails()" class="btn btn-warning">Prev</button>
                                <button type = "button" onclick = "personalinformation()" class="btn btn-primary">Next</button>
                            </center>
                        </div>
                   
                        <!-- <input type="submit" class="btnRegister"  value="Register"/> -->

                    </div>
                    <div style = "display: none;" id="p_info">
                            <b>Past Appointments</b>

                            <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class = "control-label">Appointment 1</label>
                                    <input type="text" name = "appointment0" class = "form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class = "control-label">Type</label>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class = "control-label">Club</label>
                                                <input type="radio" name = "type0" value = "Club">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class = "control-label">Provincial</label>
                                                <input type="radio" name = "type0" name = "Provincial">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class = "control-label">National</label>
                                                <input type="radio" name = "type0" value = "National">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class = "control-label">Province</label>
                                    <input type="text" name = "p0" class = "form-control">
                                </div>
                            </div>
                
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class = "control-label">Appointment</label>
                                    <input type="text" name = "appointment1" class = "form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class = "control-label"></label>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class = "control-label">Club</label>
                                                <input type="radio" name = "type1" value = "Club">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class = "control-label">Provincial </label>
                                                <input type="radio" name = "type1" name = "Provincial">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class = "control-label">National</label>
                                                <input type="radio" name = "type1" value = "National">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class = "control-label">Period</label>
                                    <input type="text" name = "p1" class = "form-control">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class = "control-label">Assignment</label>
                                    <input type="text" name = "appointment2" class = "form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class = "control-label"></label>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class = "control-label">Club</label>
                                                <input type="radio" name = "type2" value = "Club">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class = "control-label">Provincial</label>
                                                <input type="radio" name = "type2" name = "Provincial">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class = "control-label">National</label>
                                                <input type="radio" name = "type2" value = "National">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class = "control-label">Period</label>
                                    <input type="text" name = "p2" class = "form-control">
                                </div>
                            </div>
                        </div>
                        
                        <div id="pro">
                            <center>
                                <button type = "button" onclick="moredetails()" class="btn btn-warning">Prev</button>
                                <button type = "button" onclick ="educationdetails()" class="btn btn-primary">Next</button>
                            </center>
                        </div>
                        
                        <!-- <input type="submit" class="btnRegister"  value="Register"/> -->
                    </div>

                    <div style = "display: none;" id = "educationdetails">
                            <b>Awards</b>
                        <div class="row">        
                           <div class="col-md-12">
                               <div class="form-group">
                                   <input type = "text" class= "form-control" name = "award1">
                               </div>
                           </div>
                           <div class="col-md-12">
                               <div class="form-group">
                                   <input type = "text" class= "form-control" name = "award2">
                               </div>
                           </div>
                           <div class="col-md-12">
                               <div class="form-group">
                                   <input type = "text" class= "form-control" name = "award3">
                               </div>
                           </div>
                        </div>
                        <div id="edu">
                            <center>
                                <button type = "button" onclick="personalinformation()" class="btn btn-warning">Prev</button>
                                <button type = "button" onclick ="sportsdetails()" class="btn btn-primary">Next</button>
                            </center>
                        </div>
                  
                        <!-- <input type="submit" class="btnRegister"  value="Register"/> -->
                    </div>
               
                      
                    <!-- <label class = "control-label">Top 5 Qualifications</label> -->

                    <div style = "display: none;" id = "sportsdetails">
                            <b>Sport Details</b>
                            
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                <label class = "control-label"><b>Certificate</b></label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label class = "control-label"><b>Description</b></label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type = "file" class = "form-control" name = "cert1">   
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type = "text" class = "form-control" name = "des1">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type = "file" class = "form-control" name = "cert2">   
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type = "text" class = "form-control" name = "des2">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type = "file" class = "form-control" name = "cert3">   
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type = "text" class = "form-control" name = "des3">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type = "file" class = "form-control" name = "cert4">   
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type = "text" class = "form-control" name = "des4">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type = "file" class = "form-control" name = "cert5">   
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type = "text" class = "form-control" name = "des5">
                                </div>
                            </div>
                        </div>
                        
                        <div id="sports">
                            <center>
                                <button type = "button" onclick="educationdetails()" class="btn btn-warning">Prev</button>
                                <button type = "button" onclick= "complete()" class="btn btn-primary lg">Complete</button>
                            </center>
                        </div>
                        
                        <!-- <input type="submit" class="btnRegister"  value="Register"/> -->
                    </div>
                    
                    <div style = "display: none;" id="healthdetails">
                            <!-- <b>Health Details</b> -->
                        <!-- <div class="row">        
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class = "control-label">Height</label>
                                    <input type="text" name = "height" class = "form-control" required= "">
                                </div>
                                <div class="form-group">
                                        <label for="gender" class ="control-label">Default Hand</label>
                                        <select name="d_hand" class="form-control">
                                            <option>Right</option>
                                            <option>Left</option>
                                        </select>
                                    </div>
                            </div> -->
                            <!-- <div class="col-md-6">
                                <div class="form-group">
                                    <label for="gender" class ="control-label"> Weight</label>
                                    <input type="text" name = "weight" class="form-control" required= "">
                                </div>
            
                            </div>
                        </div> -->
                        <!-- <div class="form-group">
                                <label for="gender" class ="control-label">Allergies</label>
                                <input type="text" name = "" class="form-control">
                        </div>
                        <div class="form-group">
                                <label for="gender" class ="control-label">Allergies</label>
                                <input type="text" class="form-control">
                        </div> -->

                        <div id="health">
                            <center>
                                <button type = "button" onclick="sportsdetails()" class="btn btn-warning">Prev</button>
                                <button type = "button" onclick= "complete()" class="btn btn-primary lg">Complete</button>
                            </center>
                        </div>
                        <div id="last">
                            <center>
                                <button type = "button" onclick="window.location.href = 'Registration.html'" class="btn btn-warning">Prev</button>
                                <button type = "submit"  class="btn btn-primary lg">Complete</button>
                            </center>
                        </div>
                        
                
                        <!-- <input type="submit" class="btnRegister"  value="Register"/> -->
                    </div>
                </div>
            </form>
            </div>



                <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <h3 class="register-heading">Register as Refree</h3>
                    <div class="register-form">
                <form method="POST" action="../php/addrefree.php" enctype="multipart/form-data">
                <p style="color: green; font: 36px;"><b><?php if (!empty($_SESSION['message'])) {
                        echo $_SESSION['message'];
                      }else{ echo "Please fill in all the details as required";} ?></center></p></b>
                    <div id="basic1">
                            <b>Refree's Details</b>
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
                                <div class="form-group">
                                    <input type="text" class = "form-control"  name = "src_no" placeholder="SRC Registration No:" disabled = "">
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
                        <div id="btnHome1">
                            <center>
                                <button type = "button" onclick="moredetails1()" class="btn btn-primary">Next</button>
                            </center>
                        </div>
                        <!-- <input type="submit" class="btnRegister"  value="Register"/> -->
                    </div>
                    <div style = "display: none;" id= "more-details1">
                    <b>Qualifications</b>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class = "control-label">Form of Volleyball</label>
                                    <input type="text" name = "institute0" class = "form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class = "control-label">Type</label>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class = "control-label">National</label>
                                                <input type="radio" name = "type0" value = "National">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class = "control-label">Continental </label>
                                                <input type="radio" name = "type0" name = "Continental">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class = "control-label">International</label>
                                                <input type="radio" name = "type0" value = "International">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class = "control-label">Level</label>
                                    <input type="text" name = "p0" class = "form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class = "control-label">Date</label>
                                    <input type="date" name = "y0" class = "form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class = "control-label">Form of Volleyball</label>
                                    <input type="text" name = "institute1" class = "form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class = "control-label"></label>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class = "control-label">National</label>
                                                <input type="radio" name = "type1" value = "National">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class = "control-label">Continental </label>
                                                <input type="radio" name = "type1" name = "Continental">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class = "control-label">International</label>
                                                <input type="radio" name = "type1" value = "International">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class = "control-label">Level</label>
                                    <input type="text" name = "p1" class = "form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class = "control-label">Date</label>
                                    <input type="date" name = "y1" class = "form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class = "control-label">Form of Volleyball</label>
                                    <input type="text" name = "institute2" class = "form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class = "control-label"></label>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class = "control-label">National</label>
                                                <input type="radio" name = "type2" value = "National">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class = "control-label">Continental </label>
                                                <input type="radio" name = "type2" name = "Continental">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class = "control-label">International</label>
                                                <input type="radio" name = "type2" value = "International">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class = "control-label">Level</label>
                                    <input type="text" name = "p2" class = "form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class = "control-label">Date</label>
                                    <input type="date" name = "y2" class = "form-control">
                                </div>
                            </div>
                        </div>
                        
                        <div id="pro1">
                            <center>
                                <button type = "button" onclick="moredetails1()" class="btn btn-warning">Prev</button>
                                <button type = "button" onclick ="institutionsCoached()" class="btn btn-primary">Next</button>
                            </center>
                        </div>
                        
                   
                        <!-- <input type="submit" class="btnRegister"  value="Register"/> -->

                    </div>
                    <div style = "display: none;" id="institutionsCoached">
                        <b>VIS OFFICIALS</b>

                            <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class = "control-label">Qualification</label>
                                    <input type="text" name = "qual0" class = "form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class = "control-label">Type</label>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class = "control-label">N</label>
                                                <input type="radio" name = "qual_type0" value = "N">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class = "control-label">C</label>
                                                <input type="radio"  name = "qual_type0" value = "C">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class = "control-label">I</label>
                                                <input type="radio" name = "qual_type0" value = "I">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class = "control-label">Level</label>
                                    <input type="text" name = "qual_level0" class = "form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class = "control-label">Date</label>
                                    <input type="date" name = "qual_year0" class = "form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class = "control-label">Qualification</label>
                                    <input type="text" name = "qual1" class = "form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class = "control-label"></label>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class = "control-label">N</label>
                                                <input type="radio" name = "qual_type1" value = "N">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class = "control-label">C</label>
                                                <input type="radio"  name = "qual_type1" value = "C">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class = "control-label">I</label>
                                                <input type="radio" name = "qual_type1" value = "I">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class = "control-label">Level</label>
                                    <input type="text" name = "qual_level1" class = "form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class = "control-label">Date Certified</label>
                                    <input type="Date" name = "qual_year1" class = "form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class = "control-label">Qualification</label>
                                    <input type="text" name = "qual2" class = "form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class = "control-label"></label>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class = "control-label">N</label>
                                                <input type="radio" name = "qual_type2" value = "N">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class = "control-label">C</label>
                                                <input type="radio"  name = "qual_type2" value = "C">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class = "control-label">I</label>
                                                <input type="radio" name = "qual_type2" value = "I">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class = "control-label">Level</label>
                                    <input type="text" name = "qual_level2" class = "form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class = "control-label">Date Certified</label>
                                    <input type="Date" name = "qual_year2" class = "form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class = "control-label">Last Date of Course Testing/Refresher</label>
                                    <input type="date" class = "form-control" name = "last_date">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class = "control-label">Grade</label>
                                    <input type="text" class = "form-control" name = "grade">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class = "control-label">Course Name</label>
                                    <input type="text" class = "form-control" name = "course">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class = "control-label">Instructor</label>
                                    <input type="text" class = "form-control" name = "instructor">
                                </div>
                            </div>
                        </div>     
                        <div id="coaching1">
                            <center>
                                <button type = "button" onclick="nta()" class="btn btn-warning">Prev</button>
                                <button type = "button" onclick= "uploads()" class="btn btn-primary lg">Next</button>
                            </center>
                        </div>
                        

                 
                        
                        <!-- <input type="submit" class="btnRegister"  value="Register"/> -->
                    </div>
                    <div id = "nta" style = "display: none"></div>

                    <div style = "display: none;" id = "pta">
                            <b>Top 3  Assignments</b>
                            <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class = "control-label">Competetion</label>
                                    <input type="text" name = "assignment0" class = "form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class = "control-label">Type</label>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class = "control-label">N</label>
                                                <input type="radio" name = "assignment_type0" value = "NATIONAL">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class = "control-label">C</label>
                                                <input type="radio" name = "assignment_type0" value = "Continental">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class = "control-label">I</label>
                                                <input type="radio" name = "assignment_type0" value = "International">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class = "control-label">Position Held</label>
                                    <input type="text" name = "assignment_province0" class = "form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class = "control-label">Date</label>
                                    <input type= "date" name = "assignment_year0" class = "form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class = "control-label">Competiton</label>
                                    <input type="text" name = "assignment1" class = "form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class = "control-label"></label>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class = "control-label">N</label>
                                                <input type="radio" name = "assignment_type1" value = "National">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class = "control-label">C</label>
                                                <input type="radio" name = "assignment_type1" value = "Continetal">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class = "control-label">I</label>
                                                <input type="radio" name = "assignment_type1" value = "International">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class = "control-label">Position Held</label>
                                    <input type="text" name = "assignment_province1" class = "form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class = "control-label">Date</label>
                                    <input type="date" name = "assignment_year1" class = "form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class = "control-label">Continental</label>
                                    <input type="text" name = "assignment2" class = "form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class = "control-label"></label>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class = "control-label">N</label>
                                                <input type="radio" name = "assignment_type2" value = "National">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class = "control-label">C</label>
                                                <input type="radio" name = "assignment_type2" value = "Continental">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class = "control-label">I</label>
                                                <input type="radio" name = "assignment_type2" value = "International">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class = "control-label">Position Held</label>
                                    <input type="text" name = "assignment_province2" class = "form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class = "control-label">Date</label>
                                    <input type="date" name = "assignment_province2" class = "form-control">
                                </div>
                            </div>
                        </div>
                        <div id="edu1">
                            <center>
                                <button type = "button" onclick="institutionsCoached()" class="btn btn-warning">Prev</button>
                                <button type = "button" onclick ="coaching()" class="btn btn-primary">Next</button>
                            </center>
                        </div>
                  
                        <!-- <input type="submit" class="btnRegister"  value="Register"/> -->
                    </div>
                    
                    <div style = "display: none;" id="Coaching">
<!--                             
                        <div id="coaching1">
                            <center>
                                <button type = "button" onclick="nta()" class="btn btn-warning">Prev</button>
                                <button type = "button" onclick= "uploads()" class="btn btn-primary lg">Next</button>
                            </center>
                        </div> -->
                        <!-- <input type="submit" class="btnRegister"  value="Register"/> -->
                    </div>
                    <div style = "display: none;" id = "uploads">
                            <b>Qualifications</b>
                            <label class = "control-label">Top 5 Qualifications</label>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label class = "control-label"><b>Certificate</b></label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label class = "control-label"><b>Description</b></label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type = "file" class = "form-control" name = "cert1">   
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type = "text" class = "form-control" name = "des1">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type = "file" class = "form-control" name = "cert2">   
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type = "text" class = "form-control" name = "des2">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type = "file" class = "form-control" name = "cert3">   
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type = "text" class = "form-control" name = "des3">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type = "file" class = "form-control" name = "cert4">   
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type = "text" class = "form-control" name = "des4">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type = "file" class = "form-control" name = "cert5">   
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type = "text" class = "form-control" name = "des5">
                                    </div>
                                </div>
                            </div>
                       
                        
                        <div id="uploads1">
                            <center>
                                <button type = "button" onclick="pta()" class="btn btn-warning">Prev</button>
                                <button type = "submit" class="btn btn-primary">Complete</button>
                            </center>
                        </div>

                        <!-- <div id="last1" style = "display: none;">
                            <center>
                                <button type = "button" onclick="window.location.href = 'Registration.php'" class="btn btn-warning">Prev</button>
                                <button type = "submit"  class="btn btn-primary lg">Complete</button>
                            </center>
                        </div> -->
                        
                        <!-- <input type="submit" class="btnRegister"  value="Register"/> -->
                    </div>
                </div>
            </form>
                </div>
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