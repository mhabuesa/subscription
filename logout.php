<?php
    session_start();
    session_destroy();

    header('location:/qs/login.php')
?>