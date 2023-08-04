<?php
    require '../db.php';
    $id = $_GET['id'];

    $delete = "DELETE FROM album WHERE id = $id";
    mysqli_query($db_connect, $delete);
    header('location:album_list.php');
?>