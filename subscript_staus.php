<?php
    require 'db.php';
    $id = $_GET['id'];

    $select_user = "SELECT * FROM users WHERE id=$id";
    $select_result = mysqli_query($db_connect, $select_user);
    $after_assoc_user = mysqli_fetch_assoc($select_result);


    if( $after_assoc_user['roll']==0){

    $update = "UPDATE users SET roll=1 WHERE id=$id";
    mysqli_query($db_connect, $update);
    header('location:subscriptions.php');

    }

    else{
        $update = "UPDATE users SET roll=0 WHERE id=$id";
    mysqli_query($db_connect, $update);
    header('location:subscriptions.php');
    }
?>