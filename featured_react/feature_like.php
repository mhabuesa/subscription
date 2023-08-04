<?php
    require '../db.php';
    $id = $_GET['id'];

    $select_album_like = "SELECT * FROM album WHERE id='$id' ";
    $select_result = mysqli_query($db_connect, $select_album_like);
    $after_assoc_like = mysqli_fetch_assoc($select_result);

    $after_plus = $after_assoc_like['like_count']+1;
    
     $update_like = "UPDATE album SET like_count = '$after_plus' WHERE id='$id'";
     mysqli_query($db_connect, $update_like);
     header('Location: ' . $_SERVER['HTTP_REFERER']);
?>