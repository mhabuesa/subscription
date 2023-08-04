<?php
require '../db.php';
$id = $_POST['id'];

$album_number = $_POST['album_number'];    
$qs_title = $_POST['qs_title'];    
$artist = $_POST['artist'];  
$qs = $_FILES['qs'];  


   if($qs){

    $explode = explode('.', $qs['name']);
    $extension = end($explode);
    $file_name = $qs_title .'.'. $extension;

    $new_location = '../qs/'.$file_name;
    move_uploaded_file($qs['tmp_name'] , $new_location);

    $update = "UPDATE qs SET album_number ='$album_number',  artist ='$artist', qs_title= '$qs_title', qs = '$file_name' WHERE id='$id'";
    mysqli_query($db_connect, $update);
    header('Location: ' . $_SERVER['HTTP_REFERER']);

   }

   else{
    $update = "UPDATE qs SET album_number ='$album_number',  artist ='$artist', qs_title= '$qs_title' WHERE id='$id'";
    mysqli_query($db_connect, $update);
    header('Location: ' . $_SERVER['HTTP_REFERER']);
   }

?>