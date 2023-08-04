<?php
    require '../db.php';

    $id = $_POST['id'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $fb_id = $_POST['fb_id'];

    $select_artist = "SELECT * FROM artist WHERE id='$id'";
$select_artist_result = mysqli_query($db_connect, $select_artist);
$after_assoc_artist = mysqli_fetch_assoc($select_artist_result);

$update = "UPDATE artist SET name='$name', phone='$phone', fb_id='$fb_id' WHERE id=$id";
mysqli_query($db_connect, $update);
header('location:edit_artist.php?id='.$id);



?>