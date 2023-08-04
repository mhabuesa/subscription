<?php
    require '../db.php';

    $id=$_GET['id'];

    $select = "SELECT * FROM album WHERE id=$id";
    $select_result = mysqli_query($db_connect, $select);
    $after_assoc = mysqli_fetch_assoc($select_result);

    if($after_assoc['status']==0){
        $update = "UPDATE album SET status=1 WHERE id=$id";
        mysqli_query($db_connect, $update);
        header('location:featured_album.php');
    }
    else{
        $update = "UPDATE album SET status=0 WHERE id=$id";
        mysqli_query($db_connect, $update);
        header('location:featured_album.php');
    }


    
?>