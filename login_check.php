<?php

    if(!isset($_SESSION['loged_in'])){
        header('location:/qs/login/index.php');
    }
?>