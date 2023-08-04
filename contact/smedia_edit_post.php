<?php
    require '../db.php';

    $fb_page = $_POST['fb_page'];
    $youtube = $_POST['youtube'];

    $update = "UPDATE smedia SET fb_page='$fb_page', youtube='$youtube' ";
    mysqli_query($db_connect, $update);
    header('location:smedia_edit.php');

?>