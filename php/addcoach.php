<?php
    require '../dbh/dbh.php';

    if(isset($_POST['member_no']) && isset($_POST['name']) && isset($_POST['national_id']))
    {
        $member_no = $_POST['member_no'];
        $name = $_POST['name'];
        $national_id = $_POST['national_id'];
        $surname = $_POST['surname'];
        $passport = $_POST['passport_no'];
        $email = $_POST['email'];
        $p_address = $_POST['p_address'];
        $DOB = $_POST['DOB'];
        $contact = $_POST['contact'];
        $gender = $_POST['gender'];
        $POB = $_POST['POB'];

        
        $o_level = $_POST['o_level'];
        $a_level  = $_POST['a_level'];
        $Tertiary = $_POST['Tertiary'];
        $o_level_year = $_POST['o_level_year'];
        $a_level_year = $_POST['a_level_year'];
        $Tertiary_year = $_POST['Tertiary_year'];
        $o_level_province = $_POST['o_level_province'];
        $a_level_province = $_POST['a_level_province'];
        $tertiary_province = $_POST['tertiary_province'];
        $fivb_no = $_POST['fivb_no'];
        $National_team_caps = $_POST['National_team_caps'];
        $games = $_POST['games'];
        $H_LEVEL = $_POST['H_LEVEL'];
        $p_caps = $_POST['p_caps'];
        $position = $_POST['position'];
        $height = $_POST['height'];
        $d_hand = $_POST['d_hand'];
        $weight = $_POST['weight'];

        $sql = "INSERT INTO Coaches(Member_No,Name,Surname,Gender,National_ID,Passport_No,Email,Contact,Physical_Address,DOB)
                            VALUES
                            ('$member_no','$name','$surname','$gender','$national_id','$passport','$email','$contact','$p_address','$DOB')";
        
        if ($Conn->query($sql) === TRUE)
        {
            $Current_Club = $_POST['Current_Club'];
            $Current_Province = $_POST['C_Province'];
            $club_position = $_POST['c_position'];
            $previous_club = $_POST['p_club'];
            $pprovince = $_POST['pprovince'];
            $pposition = $_POST['pposition'];
            $institute = $_POST['institute'];
 
                $sql1 = "INSERT INTO coache_sporting
                        (Member_No,Current_Club,Province,Coaching_position,Previous_Club,Previous_Club_Province,Previous_coaching_position)
                        values
                        ('$member_no','$Current_Club','$Current_Province','$club_position','$previous_club','$pprovince','$pposition')";
                
                if ($Conn->query($sql1) === TRUE)
                {
                    
                    for ($i=0; $i <3 ; $i++)
                    { 
                    
                        $institute = $_POST['institute'.$i];
                        $type = $_POST['type'.$i];
                        $prov = $_POST['p'.$i];
                        $yea = $_POST['y'.$i];
                        if( isset($institute) && isset($type) && isset($prov) && isset($yea))
                        {
                            $sql2 = "INSERT INTO institutes_coached
                            (Member_No,School,School_type,Province,Year) VALUES('$member_no','$institute','$type','$prov','$yea')"; 
                            if ($Conn->query($sql2) === FALSE)
                                {
                                    echo "Error: " . $sql2 . "<br>" . $Conn->error; 
                                }
                        }else{
                            echo "not set";
                        }
                    }
                    for ($i=0; $i < 3; $i++)
                    { 
                        $assignment = $_POST['assignment'.$i];
                        $assignment_type = $_POST['assignment_type'.$i];
                        $assignment_province = $_POST['assignment_province'.$i];
                        $assignment_year = $_POST['assignment_year'.$i];

                        if(isset($assignment) && isset($assignment_type) && isset($assignment_province) && isset($assignment_year))
                        {
                            $sql3 = "INSERT INTO provincial_team_assignment(Member_No,Assignment,Type_of_School,Province,Year)
                                    VALUES('$member_no','$assignment','$assignment_type','$assignment_province','$assignment_year')";
                                    if ($Conn->query($sql3) === FALSE)
                                    {
                                        echo "Error: " . $sql3 . "<br>" . $Conn->error;
                                    }

                        }else{
                            echo "something wrong!!";
                            echo $assignment_year;
                        }
                    }
                    for ($i=0; $i < 3; $i++)
                    { 
                        $assignment = $_POST['nta'.$i];
                        $assignment_type = $_POST['nta_type'.$i];
                        $assignment_province = $_POST['nta_province'.$i];
                        $assignment_year = $_POST['nta_year'.$i];

                        if(isset($assignment) && isset($assignment_type) && isset($assignment_province) && isset($assignment_year))
                        {
                            $sql4 = "INSERT INTO national_team_assignment(Member_No,Assignment,Type,Province,Year)
                                    VALUES('$member_no','$assignment','$assignment_type','$assignment_province','$assignment_year')";
                                    if ($Conn->query($sql4) === FALSE)
                                    {
                                        echo "Error: " . $sql4 . "<br>" . $Conn->error;
                                    }

                        }else{
                            echo "something wrong!!";
                            echo $assignment_year;
                        }
                    }
                    for ($i=0; $i < 3; $i++)
                    { 
                        $qualification = $_POST['qual'.$i];
                        $qual_type = $_POST['qual_type'.$i];
                        $qual_level = $_POST['qual_level'.$i];
                        $qual_year = $_POST['qual_year'.$i];

                        if(isset($qualification) && isset($qual_type) && isset($qual_level) && isset($qual_year))
                        {
                            $sql5 = "INSERT INTO coaching_qualification(Member_No,Qualification,Type,Level,Date_certified)
                                    VALUES('$member_no','$qualification','$qual_type','$qual_level','$qual_year')";
                                    if ($Conn->query($sql5) === FALSE)
                                    {
                                        echo "Error: " . $sql5 . "<br>" . $Conn->error;
                                    }

                        }else{
                            echo "something wrong!!";
                            echo $qual_type;
                        }
                    }

                    $last = $_POST['last_date'];
                    $grade = $_POST['grade'];
                    $Course_Name = $_POST['course'];
                    $instructor = $_POST['instructor'];
                    $sql6 = "INSERT INTO last_certified(Member_No,Date_certified,Grade,Course_Name,Instructor)
                            VALUES('$member_no','$last','$Course_Name','$grade','$instructor')";

                    if ($Conn->query($sql6) === FALSE)
                    {
                        echo "Error: " . $sql6 . "<br>" . $Conn->error;
                    }

                    for ($i=1; $i < 6; $i++)
                    {
                        $description = $_POST['des'.$i];

                        if(isset($description))
                        {
                            $target_dir = "../files/";
                            $target_file = $target_dir . basename($_FILES['cert'.$i]["name"]);
                            $uploadOk = 1;
                            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

                            if (file_exists($target_file))
                            {
                                echo "Sorry, file already exists.";
                                $uploadOk = 0;
                            }

                            if ($_FILES['cert'.$i]["size"] > 5000000)
                            {
                                echo "Sorry, your file is too large.";
                                $uploadOk = 0;
                            }
                            if ($uploadOk == 0)
                            {
                                echo "Failed to upload";
                            }else{

                                if (move_uploaded_file($_FILES['cert'.$i]["tmp_name"], $target_file))
                                {
                                    $_SESSION['message'] = "The file ". basename( $_FILES['cert'.$i]["name"]). " has been uploaded.";
                                    $filename = basename($_FILES['cert'.$i]['name']);
                                    $filepath = $target_dir.$filename;

                                    $sql7 = "INSERT INTO coaches_certificates (Member_No,Desciption,File_path)
                                            VALUES('$member_no','$description','$filepath')";
                                    if ($Conn->query($sql7) === TRUE)
                                    {
                                        $_SESSION['message'] = "You have succesfully registered as a coach";
                                        header('location: ../pages/Registration.php');
                                    }else{
                                        echo "Error: " . $sql7 . "<br>" . $Conn->error;
                                    }
                                }
                            }

                        }
                    }
                    
                //         $sql2 = "INSERT INTO players_education_background
                //         (Member_No,O_Level,O_Level_Province,O_Level_Year,A_Level,A_Level_Province,A_Level_Year,Tertiary,Tertiary_Province,Tertiary_Year)
                //         VALUES ('$member_no','$o_level','$o_level_province','$o_level_year','$a_level','$a_level_province','$a_level_year','$Tertiary','$tertiary_province','$Tertiary_year')";

                //         if ($Conn->query($sql2) === TRUE)
                //         {
                //             $sql3 = "INSERT INTO sports_details
                //             (Member_No,FIVB_No,Highest_Level_Played,National_Team_Caps,Provincial_Team_Cap,Zone_6_Games)
                //             VALUES ('$member_no','$fivb_no','$H_LEVEL',$National_team_caps,$p_caps,$games)";
                //             if ($Conn->query($sql3) === TRUE)
                //             {
                //                      $sql4 = "INSERT INTO health_details
                //                      (Member_No,height,Weight,Default_Hand)
                //                     VALUES ('$member_no','$height','$weight','$d_hand')";
                //                     if ($Conn->query($sql4) === TRUE)
                //                     {
                //                         session_start();
                //                         $_SESSION['message'] = "You have successfully Registered";
                //                         header("location: ../pages/Registration.php");
                //                     }else{
                //                         echo "Error: " . $sql4 . "<br>" . $Conn->error;
                //                     }
                //             }else{
                //                 echo "Error: " . $sql3 . "<br>" . $Conn->error;
                //             }
                        // }else{
                        //     echo "Error: " . $sql2 . "<br>" . $Conn->error; 
                        // }
                }
                else{
                    echo "Error: " . $sql1. "<br>" . $Conn->error;
                }
        }else{
            echo "Error: " . $sql . "<br>" . $Conn->error;
        }



    }