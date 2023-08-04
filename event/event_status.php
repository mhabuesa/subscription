<?php
    require '../db.php';
    $id = $_GET['id'];


    $select_event = "SELECT * FROM event WHERE id=$id ";
    $select_event_result = mysqli_query($db_connect, $select_event);
    $after_assoc_event = mysqli_fetch_assoc($select_event_result);


    if($after_assoc_event['status'] == 0){
        $update = "UPDATE event SET status=1 WHERE id=$id";
        mysqli_query($db_connect, $update);
        header('location:event.php?id=' . $id);
    }

else{
 
    $update = "UPDATE event SET status=0 WHERE id=$id";
    mysqli_query($db_connect, $update);
    header('location:event.php?id=' . $id);
}
?>