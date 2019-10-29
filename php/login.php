<?php
require '../dbh/dbh.php';
require '../dbh/Bcrypt.php';
 // hash the password => returns hashed password
   // Bcrypt::hashPassword($password);
    
    // check $password against the $hashedPassword => returns true/false
  //  Bcrypt::checkPassword($password, $hashedPassword);

if (isset($_POST['email']) && isset($_POST['password']))
{
	$Username = $_POST['email'];
	$Pass = $_POST['password'];
	try
	{
		$sql = "SELECT Password,Name,Surname,Position FROM admins WHERE Email = '$Username' ";
		$result = mysqli_query($Conn,$sql);
   		$confirm = mysqli_num_rows($result);
   		if ($confirm > 0)
         {
   			 while ($row = mysqli_fetch_assoc($result))
   			 {
   			 	$Password = $row['Password'];
   			 	$Name = $row['Name'];
   			 	$Surname = $row['Surname'];
          $Position = $row['Position'];
   			 }
              $verification =Bcrypt::checkPassword($Pass, $Password);
              if($verification)
              {
                  session_start();
                  $_SESSION['Name'] = $Name;
                  $_SESSION['Surname'] = $Surname;
                  $_SESSION['id'] = $Employee_id;
                  $_SESSION['position'] = $Position;
                  header('location: ../pages/dashboard.php');
              
              }else{
                session_start();
                $_SESSION['login'] =  "Invalid Password";
                header('location: ../pages/login.php');
              }
               
        }else{
        session_start();
        $_SESSION['login'] =  "Sorry We could not find that username";
        header('location: ../pages/login.php');
       }

	}catch (Exception $e)
	{
		 echo 'Message: ' .$e->getMessage();
	}
}else{
	echo "failed";
}