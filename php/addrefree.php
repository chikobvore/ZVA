<?php

    require '../dbh/dbh.php';
    require '../dbh/Bcrypt.php';
    $_SESSION['message'] = "You have successfully registered as a Refree";
    header('location: ../pages/Registration.php');
