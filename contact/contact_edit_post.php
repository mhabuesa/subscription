<?php
session_start();
    require '../db.php';
    $id = $_POST['id'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $update = "UPDATE contact_info SET address='$address', email='$email', phone='$phone'";
    mysqli_query($db_connect, $update);
    $_SESSION['Contact_update'] = 'Contact Udated Syccessfully';
    header('location:contact_edit.php');
    



?>