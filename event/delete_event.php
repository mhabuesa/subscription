<?php
    require '../db.php';
    $id = $_GET['id'];

    $delete = "DELETE FROM event WHERE id=$id";
    mysqli_query($db_connect, $delete);
    header('location:event.php');
?>