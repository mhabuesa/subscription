<?php
    require '../db.php';
    $id = $_GET['id'];

   $select_album = "SELECT * FROM album WHERE id=$id";
   $select_album_result = mysqli_query($db_connect, $select_album);
   $after_assoc_album = mysqli_fetch_assoc($select_album_result);

   if($after_assoc_album['rated'] == 0){
    $update = "UPDATE album SET rated=1 WHERE id=$id";
    mysqli_query($db_connect, $update);
    header('Location: ' . $_SERVER['HTTP_REFERER']);
   }

   else{
    $update = "UPDATE album SET rated = 0 WHERE id=$id";
    mysqli_query($db_connect, $update);
    header('Location: ' . $_SERVER['HTTP_REFERER']);
   }
?>