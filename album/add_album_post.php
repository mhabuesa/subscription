<?php
session_start();
require '../db.php';

$number = $_POST['album_number'];
$title = $_POST['album_title'];
$artist = $_POST['artist_name'];
$photo = $_FILES['album_photo'];

$explode = explode('.', $photo['name']);
$extension = end($explode);

$file_name = $number . '.' . $extension;
$new_location = '../img/album/' . $file_name;
move_uploaded_file($photo['tmp_name'], $new_location);


$insert = "INSERT INTO album(album_number, album_title, artist_name,  photo) VALUES('$number', '$title', '$artist', '$file_name' )";
mysqli_query($db_connect, $insert);

$_SESSION['album_uploaded'] = 'Album Info Uploaded Successfully';
header('location:add_album.php');
?>