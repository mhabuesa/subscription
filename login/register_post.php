<?php
session_start();
    require'../db.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $con_pass = $_POST['con_pass'];
    $gender = $_POST['gender'];


    $flag = false;

    if($pass !=$con_pass){
        $flag = true;
        $_SESSION['match_err'] = "Confirm Password don't Match";
    }


    if($flag){
        header('location:register.php');
    }

    else{
        $insert = "INSERT INTO users(name, email, pass, gender) VALUES('$name', '$email', '$pass', '$gender')";
        mysqli_query($db_connect, $insert);
        $_SESSION['registered'] = 'Registration Successfully';
        header('location:register.php');
    }

   

?>