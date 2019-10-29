<?php
    require '../dbh/dbh.php';

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

    if(isset($_POST['member_no']) && isset($_POST['name']) && isset($_POST['national_id']))
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

                $sql = "INSERT INTO members(Member_No,Profile,Name,Surname,Gender,National_ID,Passport_No,Email,Contact,Physical_Address)
                VALUES
                ('$member_no','$filepath','$name','$surname','$gender','$national_id','$passport','$email','$contact','$p_address')";

                if ($Conn->query($sql) === TRUE)
                {
                    $_SESSION['message'] = "You have succesfully registered as a player";
                    header('location: ../pages/members.php');
                }else{
                            echo "Error: " . $sql. "<br>" . $Conn->error;
                        }
            }else{
                        echo "failed";
                    }
        }
    }

