<?php
    $id = $_GET['id'];
    require '../db.php';

    $delete = "DELETE FROM artist WHERE id='$id'";
    mysqli_query($db_connect, $delete);
    header('location:view_artist.php');
?>