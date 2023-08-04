<?php
session_start();
require '../db.php';
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $select_users = "SELECT COUNT(*) as total FROM users WHERE email='$email'";
    $select_users_result = mysqli_query($db_connect, $select_users);
    $after_assoc = mysqli_fetch_assoc($select_users_result);

    if($after_assoc['total'] ==1){
        $_SESSION['old_email'] = $email;

        $user_pass = "SELECT * FROM users WHERE email='$email'";
        $user_pass_result = mysqli_query($db_connect, $user_pass);
        $after_assoc_pass = mysqli_fetch_assoc($user_pass_result);

       
        
        if($pass == $after_assoc_pass['pass']){
            $_SESSION['loged_in'] = 'Login Successfully';
            $_SESSION['roll'] = $after_assoc_pass['roll'];
            $_SESSION['id'] = $after_assoc_pass['id'];

            header('location:../index.php');
        }
        else{
            $_SESSION['pass_incorrect'] = 'Your Password in Wrong';
            header('location:index.php');
        }

    }
    else{
        $_SESSION['email_incorrect'] = 'You Entered a Wrong Email'; 
        header('location:index.php'); 
    }
?>


