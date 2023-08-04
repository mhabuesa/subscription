<?php
session_start();
require '../db.php';
$number = $_POST['album_number'];
$artist = $_POST['artist_name'];
$qs = $_FILES['qs'];
$qs_name = $_FILES['qs']['name'];
$qs_tmp = $_FILES['qs']['tmp_name'];
$qs_title = $_POST['qs_title'];




$explode = explode('.', $qs_name);
$extension = end($explode);
$file_name = $qs_title .'.'. $extension;

$new_location = '../qs/'.$file_name;
move_uploaded_file($qs_tmp , $new_location);


    $insert = "INSERT INTO qs(album_number,  artist, qs_title, qs ) VALUES('$number','$artist', '$qs_title', '$file_name' )";
    mysqli_query($db_connect, $insert);

    $_SESSION['qs_uploaded'] = 'QS Uploaded Successfully';
    header('location:view_album.php?alb_no=' . $number);

  








?>