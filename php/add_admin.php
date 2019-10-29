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
        $contact = $_POST['contact'];
        $gender = $_POST['gender'];

        if(isset($_POST['member_no']) && isset($_POST['name']) && isset($_POST['national_id']))
        {
            $target_dir = "../files/";
            $target_file = $target_dir . basename($_FILES['pp']["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

            if (file_exists($target_file))
            {
                 $_SESSION['message'] = "Sorry, file already exists.";
                 $uploadOk = 0;
            }

            if ($_FILES['pp']["size"] > 5000000)
            {
                echo "Sorry, your file is too large.";
                $uploadOk = 0;
            }
            if ($uploadOk == 0)
            {
                header('location: ../pages/Registration.php');
            }else{

                if (move_uploaded_file($_FILES['pp']["tmp_name"], $target_file))
                {
                    $_SESSION['message'] = "The file ". basename( $_FILES['pp']["name"]). " has been uploaded.";
                    $filename = basename($_FILES['pp']['name']);
                    $filepath = $target_dir.$filename;

                    $sql = "INSERT INTO adminstrators(Member_No,Profile,Name,Surname,Gender,National_ID,Passport_No,Email,Contact,Physical_Address)
                    VALUES
                    ('$member_no','$filepath','$name','$surname','$gender','$national_id','$passport','$email','$contact','$p_address')";

                    if ($Conn->query($sql) === TRUE)
                    {
                        $position = $_POST['c_position'];
                        $organization = $_POST['organization'];
                        $province = $_POST['province'];
                        $phone = $_POST['phone'];
                        $period = $_POST['period'];
                        $tenure = $_POST['tenure'];
                        
                        $sql1 = "INSERT INTO admin_work_details (Member_No,Current_Position,Province,Organization,Telephone,Position_period,Tenure)
                                  VALUES('$member_no','$position','$province','$organization','$phone','$period','$tenure')";

                        if ($Conn->query($sql1) === TRUE)
                        {
                            for ($i=0; $i < 3; $i++)
                            { 
                                $assignment = $_POST['appointment'.$i];
                                $assignment_type = $_POST['type'.$i];
                                $assignment_province = $_POST['p'.$i];
        
                                if(isset($assignment) && isset($assignment_type) && isset($assignment_province) && isset($assignment_year))
                                {
                                    $sql4 = "INSERT INTO appointments(Member_No,Appointment,Type,Province,)
                                            VALUES('$member_no','$assignment','$assignment_type','$assignment_province')";
                                            if ($Conn->query($sql4) === FALSE)
                                            {
                                                echo "Error: " . $sql4 . "<br>" . $Conn->error;
                                            }
        
                                }else{
                                    echo "something wrong!!";
                                    echo $assignment_year;
                                }
                            }
                            $award1 = $_POST['award1'];
                            $award2 = $_POST['award2'];
                            $award3 = $_POST['award3'];

                            $sql5 = "INSERT INTO awards(Member_No,Award)VALUES('$member_no','$award1'),('$member_no','$award2'),('$member_no','$award3')";
                            if ($Conn->query($sql5) === TRUE)
                                {
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
                                                    header('location: ../pages/Registration.php');
                                                }else{

                                                    if (move_uploaded_file($_FILES['cert'.$i]["tmp_name"], $target_file))
                                                    {
                                                        $_SESSION['message'] = "The file ". basename( $_FILES['cert'.$i]["name"]). " has been uploaded.";
                                                        $filename = basename($_FILES['cert'.$i]['name']);
                                                        $filepath = $target_dir.$filename;

                                                        $sql7 = "INSERT INTO Admin_Certificates (Member_No,Desciption,File_path)
                                                                VALUES('$member_no','$description','$filepath')";
                                                        if ($Conn->query($sql7) === TRUE)
                                                        {
                                                            $_SESSION['message'] = "You have succesfully registered as a coach";
                                                            header('location: ../pages/Registration.php');
                                                        }else{
                                                            $_SESSION['message']  = "Error: " . $sql7 . "<br>" . $Conn->error;
                                                            header('location: ../pages/Registration.php');
                                                        }
                                                    }
                                                }

                                            }
                                        }

                                }else{
                                    $_SESSION['message'] = "Error: " . $sql4 . "<br>" . $Conn->error;
                                    header('location: ../pages/Registration.php');
                                }
                        }
                    }else{
                                $_SESSION['message']  = "Error: " . $sql. "<br>" . $Conn->error;
                                header('location: ../pages/Registration.php');
                            }
                }else{
                             $_SESSION['message']="Unhandled Exception Occured";
                             header('location: ../pages/Registration.php');
                        }
            }
        }
    }