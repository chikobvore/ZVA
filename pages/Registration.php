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
            <input type="submit" name="" value="Login"/><br/>
        </div>
        <div class="col-md-9 register-right">
            <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Player</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Coach</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" id="referee-tab" data-toggle="tab" href="#referee-tab" role="tab" aria-controls="Referee" aria-selected="false">Referee</a>
                    </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h3 class="register-heading">Apply as a Player</h3>
                    <div class="register-form">
                <form method="POST" action="../php/addplayer.php">
                <p style="color: green; font: 36px;"><b><?php if (!empty($_SESSION['message'])) {
                        echo $_SESSION['message'];
                      }else{ echo "Please fill in all the details as required";} ?></center></p></b>
                    <div id="basic">
                            <p>Player's Details</p>
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
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="email" class="form-control" name = "email" placeholder="Your Email *" value="" required= "">
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
                            <p>More details</p>
                        <div class="row">        
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class = "control-label">Date of Birth</label>
                                    <input type="date" name = "DOB" class = "form-control" required= "">
                                </div>
                                <div class="form-group">
                                    <label for="contact" class = "control-label">Contact</label>
                                    <input type="text" name = "contact" class = "form-control" required= "">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="gender" class ="control-label">Gender</label>
                                    <select name="gender" id="" class="form-control">
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="Telephone" class="control-label">Telephone</label>
                                    <input type="text" class = "form-control" required= "">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="place of birth" class="control-label">Place of Birth</label>
                                <div class="form-group">
                                    <textarea name="POB" id="" class = "form-control" style = "height: 100px;" required= "">

                                    </textarea>
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
                            <p>Professional Information</p>
                        <div class="row">        
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class = "control-label">Current Club</label>
                                    <input type="text" name = "Current_Club" class = "form-control" required= "">
                                </div>
                                <div class="form-group">
                                    <label for="contact" class = "control-label">Contract Date</label>
                                    <input type="date" name = "contract_date" class = "form-control" required= "">
                                </div>
                                <div class="form-group">
                                    <label class = "control-label">Previous Club</label>
                                    <input type="text" name = "previous_club" class = "form-control" required= "">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="gender" class ="control-label">Province</label>
                                    <select name="Province" id="" class="form-control">
                                        <option>Harare</option>
                                        <option>Mashonaland East</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="Telephone" class="control-label">Experiary Date</label>
                                    <input type="date" name = "Experiary" class = "form-control" required= "">
                                </div>
                                <div class="form-group">
                                        <label for="gender" class ="control-label">Province</label>
                                        <select name="pprovince" id="" class="form-control">
                                            <option>Harare</option>
                                            <option>Bulawayo</option>
                                        </select>
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
                            <p>Education Details</p>
                        <div class="row">        
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class = "control-label">Ordinary Level School</label>
                                    <input type="text" name = "o_level" class = "form-control">
                                </div>
                                <div class="form-group">
                                    <label for="contact" class = "control-label">Advanced Level School</label>
                                    <input type="text" name = "a_level" class = "form-control">
                                </div>
                                <div class="form-group">
                                    <label class = "control-label">Tertiary Education</label>
                                    <input type="text" name = "Tertiary"  class = "form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class ="control-label">Year</label>
                                    <select name="o_level_year" id="" class="form-control">
                                        <option>2019</option>
                                        <option>2018</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                        <label class ="control-label">Year</label>
                                        <select name="a_level_year" id="" class="form-control">
                                            <option>2019</option>
                                            <option>2018</option>
                                        </select>
                                </div>
                                <div class="form-group">
                                        <label class ="control-label">Year</label>
                                        <select name="Tertiary_year" class="form-control" required= "">
                                            <option>2019</option>
                                            <option>2018</option>
                                        </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                    <div class="form-group">
                                        <label class = "control-label">Province</label>
                                        <input type="text" name = "o_level_province" class = "form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="contact" class = "control-label">Province</label>
                                        <input type="text" name="a_level_province" class = "form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class = "control-label">Province</label>
                                        <input type="text" name="tertiary_province" class = "form-control" >
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
               
                      

                    <div style = "display: none;" id = "sportsdetails">
                            <p>Sport Details</p>
                        <div class="row">        
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class = "control-label">FIVB NO:</label>
                                    <input type="number" min="0" name="fivb_no" class = "form-control" required= "">
                                </div> 
                                <div class="form-group">
                                    <label for="contact" class = "control-label">National Team  Caps</label>
                                    <input type="number" min="0" name = "National_team_caps" class = "form-control" required= "">
                                </div>
                                <div class="form-group">
                                    <label class = "control-label">Zone 6 games played</label>
                                    <input type="number" name = "games" class = "form-control" required= "">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="gender" class ="control-label">Highest Level Played</label>
                                    <select name="H_LEVEL" id="" class="form-control">
                                        <option>Zonal</option>
                                        <option>District</option>
                                        <option>Province</option>
                                        <option>National</option>
                                        <option>International</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="Telephone" class="control-label">Provincial Team Caps</label>
                                    <input type="number" name = "p_caps" min="0" class = "form-control" required= "">
                                </div>
                                <div class="form-group">
                                        <label for="gender" class ="control-label">Position</label>
                                        <select name="position" id="" class="form-control">
                                            <option>Setter</option>
                                            <option>Outside Hitter</option>
                                        </select>
                                    </div>
                            </div>
                        </div>
                        <div id="sports">
                            <center>
                                <button type = "button" onclick="educationdetails()" class="btn btn-warning">Prev</button>
                                <button type = "button" onclick ="healthdetails()" class="btn btn-primary">Next</button>
                            </center>
                        </div>
                        
                        <!-- <input type="submit" class="btnRegister"  value="Register"/> -->
                    </div>
                    
                    <div style = "display: none;" id="healthdetails">
                            <p>Health Details</p>
                        <div class="row">        
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
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="gender" class ="control-label"> Weight</label>
                                    <input type="text" name = "weight" class="form-control" required= "">
                                </div>
            
                            </div>
                        </div>
                        <div class="form-group">
                                <label for="gender" class ="control-label">Allergies</label>
                                <input type="text" name = "" class="form-control">
                        </div>
                        <div class="form-group">
                                <label for="gender" class ="control-label">Allergies</label>
                                <input type="text" class="form-control">
                        </div>

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
                <h3 class="register-heading">Register as Coach</h3>
                    <div class="register-form">
                <form method="POST" action="../php/addplayer.php">
                <p style="color: green; font: 36px;"><b><?php if (!empty($_SESSION['message'])) {
                        echo $_SESSION['message'];
                      }else{ echo "Please fill in all the details as required";} ?></center></p></b>
                    <div id="basic1">
                            <p>Coach's Details</p>
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
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="email" class="form-control" name = "email" placeholder="Your Email *" value="" required= "">
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
                                <button type = "button" onclick="moredetails1()" class="btn btn-primary">Next</button>
                            </center>
                        </div>
                        <!-- <input type="submit" class="btnRegister"  value="Register"/> -->
                    </div>
                    <div style = "display: none;" id= "more-details1">
                            <p>Sporting Details </p>
                        <div class="row">        
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class = "control-label">Current Club</label>
                                    <input type="text" name = "c_club" class = "form-control" required= "">
                                </div>
                                <div class="form-group">
                                    <label for="contact" class = "control-label">Coaching Position</label>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class = "control-label">Head Coach</label>
                                            <input type="radio" name = "c_position" >
                                        </div>
                                        <div class="col-md-5">
                                            <label class = "control-label">Assistant Coach</label>
                                            <input type="radio" name = "c_position" >
                                        </div>
                                        <div class="col-md-3">
                                            <label class = "control-label">Trainer</label>
                                            <input type="radio" name = "c_position" >
                                        </div>
                                       
                                    </div>  
                                </div>
                                <div class="form-group">
                                    <label class = "control-label">Previous Club</label>
                                    <input type="text" name = "c_club" class = "form-control" required= "">
                                </div>
                                <div class="form-group">
                                    <label for="contact" class = "control-label">Coaching Position</label>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class = "control-label">Head Coach</label>
                                            <input type="radio" name = "c_position" >
                                        </div>
                                        <div class="col-md-5">
                                            <label class = "control-label">Assistant Coach</label>
                                            <input type="radio" name = "c_position" >
                                        </div>
                                        <div class="col-md-3">
                                            <label class = "control-label">Trainer</label>
                                            <input type="radio" name = "c_position" >
                                        </div>
                                       
                                    </div>  
                                </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                                    <label for="contact" class = "control-label">Province</label>
                                    <input type="text" name = "contact" class = "form-control" required= "">
                                </div>
                                <div class="form-group">
                                <label for="contact" class = "control-label"></label>
                                    <div class="row">
                                    
                                        <div class="col-md-4">
                                            <label class = "control-label">Statistian</label>
                                            <input type="radio" name = "c_position" >
                                        </div>
                                        <div class="col-md-8">
                                            
                                            <input type="text" name = "c_position" class = "form-control" placeholder = "specify if other">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="contact" class = "control-label">Province</label>
                                    <input type="text" name = "contact" class = "form-control" required= "">
                                </div>
                                <div class="form-group">
                                <label for="contact" class = "control-label"></label>
                                    <div class="row">
                                    
                                        <div class="col-md-4">
                                            <label class = "control-label">Statistian</label>
                                            <input type="radio" name = "c_position" >
                                        </div>
                                        <div class="col-md-8">
                                            
                                            <input type="text" name = "c_position" class = "form-control" placeholder = "specify if other">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            
                        <div id="more">
                            <center>
                                <button type = "button" onclick="basicdetails1()" class="btn btn-warning">Prev</button>
                                <button type = "button" onclick = "institutionsCoached()" class="btn btn-primary">Next</button>
                            </center>
                        </div>
                   
                        <!-- <input type="submit" class="btnRegister"  value="Register"/> -->

                    </div>
                    <div style = "display: none;" id="institutionsCoached">
                            <p>Educational Institutions Coached</p>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class = "control-label">Name</label>
                                    <input type="text" name = "o_level" class = "form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class = "control-label">Type of School</label>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class = "control-label">Primary</label>
                                                <input type="radio" name = "o_level" >
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class = "control-label">High </label>
                                                <input type="radio" name = "o_level">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class = "control-label">Tertiary</label>
                                                <input type="radio" name = "o_level">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class = "control-label">Province</label>
                                    <input type="text" name = "o_level" class = "form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class = "control-label">Year</label>
                                    <input type="text" name = "o_level" class = "form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class = "control-label">Name</label>
                                    <input type="text" name = "o_level" class = "form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class = "control-label"></label>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class = "control-label">Primary</label>
                                                <input type="radio" name = "o_level" >
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class = "control-label">High </label>
                                                <input type="radio" name = "o_level">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class = "control-label">Tertiary</label>
                                                <input type="radio" name = "o_level">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class = "control-label">Province</label>
                                    <input type="text" name = "o_level" class = "form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class = "control-label">Year</label>
                                    <input type="text" name = "o_level" class = "form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class = "control-label">Name</label>
                                    <input type="text" name = "o_level" class = "form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class = "control-label"></label>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class = "control-label">Primary</label>
                                                <input type="radio" name = "o_level" >
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class = "control-label">High </label>
                                                <input type="radio" name = "o_level">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class = "control-label">Tertiary</label>
                                                <input type="radio" name = "o_level">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class = "control-label">Province</label>
                                    <input type="text" name = "o_level" class = "form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class = "control-label">Year</label>
                                    <input type="text" name = "o_level" class = "form-control">
                                </div>
                            </div>
                        </div>
                        
                        <div id="pro">
                            <center>
                                <button type = "button" onclick="moredetails1()" class="btn btn-warning">Prev</button>
                                <button type = "button" onclick ="pta()" class="btn btn-primary">Next</button>
                            </center>
                        </div>
                        
                        <!-- <input type="submit" class="btnRegister"  value="Register"/> -->
                    </div>

                    <div style = "display: none;" id = "pta">
                            <p>Top 3 Provincial Team Assignments</p>
                            <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class = "control-label">Name</label>
                                    <input type="text" name = "o_level" class = "form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class = "control-label">Type of School</label>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class = "control-label">Youth Games</label>
                                                <input type="radio" name = "o_level" >
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class = "control-label">Inter Pros</label>
                                                <input type="radio" name = "o_level">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class = "control-label">Zim Schools</label>
                                                <input type="radio" name = "o_level">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class = "control-label">Province</label>
                                    <input type="text" name = "o_level" class = "form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class = "control-label">Year</label>
                                    <input type="text" name = "o_level" class = "form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class = "control-label">Name</label>
                                    <input type="text" name = "o_level" class = "form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class = "control-label"></label>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class = "control-label">Youth Games</label>
                                                <input type="radio" name = "o_level" >
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class = "control-label">Inter Pros </label>
                                                <input type="radio" name = "o_level">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class = "control-label">Zim schools</label>
                                                <input type="radio" name = "o_level">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class = "control-label">Province</label>
                                    <input type="text" name = "o_level" class = "form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class = "control-label">Year</label>
                                    <input type="text" name = "o_level" class = "form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class = "control-label">Name</label>
                                    <input type="text" name = "o_level" class = "form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class = "control-label"></label>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class = "control-label">Youth Games</label>
                                                <input type="radio" name = "o_level" >
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class = "control-label">Inter Pros</label>
                                                <input type="radio" name = "o_level">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class = "control-label">Zim Schools</label>
                                                <input type="radio" name = "o_level">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class = "control-label">Province</label>
                                    <input type="text" name = "o_level" class = "form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class = "control-label">Year</label>
                                    <input type="text" name = "o_level" class = "form-control">
                                </div>
                            </div>
                        </div>
                        <div id="edu">
                            <center>
                                <button type = "button" onclick="institutionsCoached()" class="btn btn-warning">Prev</button>
                                <button type = "button" onclick ="nta()" class="btn btn-primary">Next</button>
                            </center>
                        </div>
                  
                        <!-- <input type="submit" class="btnRegister"  value="Register"/> -->
                    </div>
               
                      

                    <div style = "display: none;" id = "nta">
                            <p>National Team assignments</p>

                            <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class = "control-label">Name</label>
                                    <input type="text" name = "o_level" class = "form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class = "control-label">Type of School</label>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class = "control-label">SM</label>
                                                <input type="radio" name = "o_level" >
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class = "control-label">SW</label>
                                                <input type="radio" name = "o_level">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class = "control-label">JM</label>
                                                <input type="radio" name = "o_level">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class = "control-label">JW</label>
                                                <input type="radio" name = "o_level">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class = "control-label">Province</label>
                                    <input type="text" name = "o_level" class = "form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class = "control-label">Year</label>
                                    <input type="text" name = "o_level" class = "form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class = "control-label">Name</label>
                                    <input type="text" name = "o_level" class = "form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class = "control-label"></label>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class = "control-label">SM</label>
                                                <input type="radio" name = "o_level" >
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class = "control-label">SW </label>
                                                <input type="radio" name = "o_level">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class = "control-label">JM</label>
                                                <input type="radio" name = "o_level">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class = "control-label">JW</label>
                                                <input type="radio" name = "o_level">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class = "control-label">Province</label>
                                    <input type="text" name = "o_level" class = "form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class = "control-label">Year</label>
                                    <input type="text" name = "o_level" class = "form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class = "control-label">Name</label>
                                    <input type="text" name = "o_level" class = "form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class = "control-label"></label>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class = "control-label">SM</label>
                                                <input type="radio" name = "o_level" >
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class = "control-label">SW</label>
                                                <input type="radio" name = "o_level">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class = "control-label">JM</label>
                                                <input type="radio" name = "o_level">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class = "control-label">JW</label>
                                                <input type="radio" name = "o_level">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class = "control-label">Province</label>
                                    <input type="text" name = "o_level" class = "form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class = "control-label">Year</label>
                                    <input type="text" name = "o_level" class = "form-control">
                                </div>
                            </div>
                        </div>
                       
                        
                        <div id="sports">
                            <center>
                                <button type = "button" onclick="pta()" class="btn btn-warning">Prev</button>
                                <button type = "button" onclick ="healthdetails()" class="btn btn-primary">Next</button>
                            </center>
                        </div>
                        
                        <!-- <input type="submit" class="btnRegister"  value="Register"/> -->
                    </div>
                    
                    <div style = "display: none;" id="healthdetails">
                            <p>Coaching Qualifications</p>

                            <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class = "control-label">Name</label>
                                    <input type="text" name = "o_level" class = "form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class = "control-label">Type</label>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class = "control-label">N</label>
                                                <input type="radio" name = "o_level" >
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class = "control-label">C</label>
                                                <input type="radio" name = "o_level">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class = "control-label">I</label>
                                                <input type="radio" name = "o_level">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class = "control-label">Level</label>
                                    <input type="text" name = "o_level" class = "form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class = "control-label">Date</label>
                                    <input type="date" name = "o_level" class = "form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class = "control-label">Name</label>
                                    <input type="text" name = "o_level" class = "form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class = "control-label"></label>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class = "control-label">SM</label>
                                                <input type="radio" name = "o_level" >
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class = "control-label">SW </label>
                                                <input type="radio" name = "o_level">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class = "control-label">JM</label>
                                                <input type="radio" name = "o_level">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class = "control-label">JW</label>
                                                <input type="radio" name = "o_level">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class = "control-label">Province</label>
                                    <input type="text" name = "o_level" class = "form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class = "control-label">Year</label>
                                    <input type="text" name = "o_level" class = "form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class = "control-label">Name</label>
                                    <input type="text" name = "o_level" class = "form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class = "control-label"></label>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class = "control-label">SM</label>
                                                <input type="radio" name = "o_level" >
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class = "control-label">SW</label>
                                                <input type="radio" name = "o_level">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class = "control-label">JM</label>
                                                <input type="radio" name = "o_level">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class = "control-label">JW</label>
                                                <input type="radio" name = "o_level">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class = "control-label">Province</label>
                                    <input type="text" name = "o_level" class = "form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class = "control-label">Year</label>
                                    <input type="text" name = "o_level" class = "form-control">
                                </div>
                            </div>
                        </div>

         
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