<?php
session_start();
require '../db.php';

$name = $_POST['name'];
$phone = $_POST['phone'];
$fb_id = $_POST['fb_id'];

$insert = "INSERT INTO artist(name, phone, fb_id) VALUES('$name', '$phone', '$fb_id')";
mysqli_query($db_connect, $insert);
$_SESSION['artist_inserted'] = 'Artist info Inserted Successfully';
header('location:add_artist.php');
?>