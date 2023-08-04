<?php
    require '../db.php';
    $day = $_POST['day'];
    $month = $_POST['month'];
    $time = $_POST['time'];
    $loc = $_POST['loc'];
    $title = $_POST['title'];
    $desp = $_POST['desp'];
    $url = $_POST['url'];
    $photo = $_FILES['photo'];


    $explode = explode('.', $photo['name']);
    $extension = end($explode);

    $file_name = $_POST['title'] .'.'. $extension;

    $new_location = '../img/event/'.$file_name;
    move_uploaded_file($photo['tmp_name'], $new_location);




    $insert = "INSERT INTO event(day, month, time, location, title, desp,url, photo) VALUES('$day', '$month', '$time', '$loc', '$title', '$desp', '$url', '$file_name')";
    mysqli_query($db_connect, $insert);
    header('location:event.php');


?>