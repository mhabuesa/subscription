<?php
session_start();
require '../db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

date_default_timezone_set("Asia/Dhaka");
$created_at = date("Y-m-d h:i:s");

$flag = false;

if(!$name){
    $flag = true;
    $_SESSION['name_err'] = 'Enter Your Name';
    header('location:../index.php');
}

else{
    $_SESSION['old_name'] = $name;
}


if(!$email){
    $flag = true;
    $_SESSION['email_err'] = 'Enter Your Email';
    header('location:../index.php');
}

else{
    $_SESSION['old_email'] = $email;
}



if(!$phone){
    $flag = true;
    $_SESSION['phone_err'] = 'Enter Your Phone';
    header('location:../index.php#message');
}

else{
    $_SESSION['old_phone'] = $email;
}


if(!$message){
    $flag = true;
    $_SESSION['message_err'] = 'Enter Your Message';
    header('location:../index.php#message');
}

else{
    $_SESSION['old_message'] = $message;
}

if($flag){
    header('location:../index.php#message');
}
else{
    $_SESSION['old_name'] = '';
    $_SESSION['old_email'] = '';
    $_SESSION['old_phone'] = '';
    $_SESSION['old_message'] = '';


    $insert = "INSERT INTO message(name, email, phone, message, created_at) VALUES('$name', '$email', '$phone', '$message', '$created_at')";
    mysqli_query($db_connect, $insert);
    $_SESSION['message_sent'] = 'Successfully Sent Your Message';
    header('location:../index.php#message');
}




?>