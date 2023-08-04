<?php
    require '../db.php';
    $id = $_GET['id'];

    $delete = "DELETE FROM message WHERE id=$id";
    mysqli_query($db_connect, $delete);
    header('location:message.php');
?>