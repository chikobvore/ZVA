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
        $Current_Club = $_POST['Current_Club'];
        $contract_date = $_POST['contract_date'];
        $previous_club = $_POST['previous_club'];
        $Province = $_POST['Province'];
        $Experiary = $_POST['Experiary'];
        $pprovince = $_POST['pprovince'];
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

        $sql = "INSERT INTO Players(Member_No,Name,Surname,Gender,National_ID,Passport_No,Email,Contact,Physical_Address,DOB,Place_of_Birth)
                            VALUES
                            ('$member_no','$name','$surname','$gender','$national_id','$passport','$email','$contact','$p_address','$DOB','$POB')";
        
        if ($Conn->query($sql) === TRUE)
        {
                $sql1 = "INSERT INTO players_professional_information
                        (Member_No,Current_Club,Province,Contract_date,Experiary_date,Previous_Club,Previous_Club_Province)
                        values
                        ('$member_no','$Current_Club','$Province','$contract_date','$Experiary','$previous_club','$pprovince')";
                
                if ($Conn->query($sql1) === TRUE)
                {
                        $sql2 = "INSERT INTO players_education_background
                        (Member_No,O_Level,O_Level_Province,O_Level_Year,A_Level,A_Level_Province,A_Level_Year,Tertiary,Tertiary_Province,Tertiary_Year)
                        VALUES ('$member_no','$o_level','$o_level_province','$o_level_year','$a_level','$a_level_province','$a_level_year','$Tertiary','$tertiary_province','$Tertiary_year')";

                        if ($Conn->query($sql2) === TRUE)
                        {
                            $sql3 = "INSERT INTO sports_details
                            (Member_No,FIVB_No,Highest_Level_Played,National_Team_Caps,Provincial_Team_Cap,Zone_6_Games)
                            VALUES ('$member_no','$fivb_no','$H_LEVEL',$National_team_caps,$p_caps,$games)";
                            if ($Conn->query($sql3) === TRUE)
                            {
                                     $sql4 = "INSERT INTO health_details
                                     (Member_No,height,Weight,Default_Hand)
                                    VALUES ('$member_no','$height','$weight','$d_hand')";
                                    if ($Conn->query($sql4) === TRUE)
                                    {
                                        $target_dir = "../files/";
                                        $target_file = $target_dir . basename($_FILES['pp']["name"]);
                                        $uploadOk = 1;
                                        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            
                                        if (file_exists($target_file))
                                        {
                                            echo "Sorry, file already exists.";
                                            $uploadOk = 0;
                                        }
            
                                        if ($_FILES['pp']["size"] > 5000000)
                                        {
                                            echo "Sorry, your file is too large.";
                                            $uploadOk = 0;
                                        }
                                        if ($uploadOk == 0)
                                        {
                                            echo "Failed to upload";
                                        }else{

                                            if (move_uploaded_file($_FILES['pp']["tmp_name"], $target_file))
                                            {
                                                $_SESSION['message'] = "The file ". basename( $_FILES['pp']["name"]). " has been uploaded.";
                                                $filename = basename($_FILES['pp']['name']);
                                                $filepath = $target_dir.$filename;
            
                                                $sql7 = "UPDATE players SET Profile_Picture = '$filepath' WHERE Member_No = '$member_no'";
                                                if ($Conn->query($sql7) === TRUE)
                                                {
                                                    $_SESSION['message'] = "You have succesfully registered as a player";
                                                    header('location: ../pages/Registration.php');
                                                }else{
                                                    echo "Error: " . $sql7 . "<br>" . $Conn->error;
                                                }
                                            }else{
                                                echo "failed";
                                            }
                                        }
                                    }else{
                                        echo "Error: " . $sql4 . "<br>" . $Conn->error;
                                    }
                            }else{
                                echo "Error: " . $sql3 . "<br>" . $Conn->error;
                            }
                        }else{
                            echo "Error: " . $sql2 . "<br>" . $Conn->error; 
                        }
                }
                else{
                    echo "Error: " . $sql1. "<br>" . $Conn->error;
                }
        }else{
            echo "Error: " . $sql . "<br>" . $Conn->error;
        }



    }