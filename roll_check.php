<?php
require 'db.php';
    $id = $_SESSION['id'];
    $select_user = "SELECT * FROM users WHERE id=$id";
    $select_user_result = mysqli_query($db_connect, $select_user);
    $after_assoc_user = mysqli_fetch_assoc($select_user_result);
?>

   <?php if($after_assoc_user['roll'] == 0){?> 
       <script>
        window.location.href='/qs/profile.php'
       </script>
     <?php }