<?php
    require '../db.php';
    $id = $_GET['id'];
    $alb_no = $_GET['alb_no'];

   $delete  = " DELETE FROM  qs WHERE id=$id";
   mysqli_query($db_connect,$delete);
   header('Location: ' . $_SERVER['HTTP_REFERER']);

   
?>