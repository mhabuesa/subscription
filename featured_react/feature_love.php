<?php
    require '../db.php';
    $id = $_GET['id'];

    $select_album_love = "SELECT * FROM album WHERE id='$id' ";
    $select_result = mysqli_query($db_connect, $select_album_love);
    $after_assoc_love = mysqli_fetch_assoc($select_result);

    $after_plus = $after_assoc_love['love_count']+1;
    
     $update_love = "UPDATE album SET love_count = '$after_plus' WHERE id='$id'";
     mysqli_query($db_connect, $update_love);
     header('Location: ' . $_SERVER['HTTP_REFERER']);
?>