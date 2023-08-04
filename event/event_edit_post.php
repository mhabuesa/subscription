<?php
    require '../db.php';
    $id = $_POST['id'];

    $day = $_POST['day'];
    $month = $_POST['month'];
    $time = $_POST['time'];
    $loc = $_POST['loc'];
    $title = $_POST['title'];
    $desp = $_POST['desp'];
    $url = $_POST['url'];
    $photo = $_FILES['photo'];


    $select_event = "SELECT * FROM event WHERE id=$id";
    $select_event_result = mysqli_query($db_connect, $select_event);
    $after_assoc_event = mysqli_fetch_assoc($select_event_result);




    $explode = explode('.', $photo['name']);
    $extension = end($explode);




    $file_name = $_POST['title'] .'.'. $extension;

    $new_location = '../img/event/'.$file_name;
    move_uploaded_file($photo['tmp_name'], $new_location);


    if($after_assoc_event['photo'] == null){
        $update = "UPDATE event SET day='$day', month='$month', time='$time', location='$loc', title='$title', desp='$desp', photo='$file_name', url='$url' WHERE id=$id ";
        mysqli_query($db_connect, $update);
        header('location:event_edit.php?id='.$id);
    }

    else{
        $delete = '/qs/img/event/'.$after_assoc_event['photo'];
        unlink($delete);

        

        $update = "UPDATE event SET day='$day', month='$month', time='$time', location='$loc', title='$title', desp='$desp', photo='$file_name', url='$url' WHERE id=$id ";
        mysqli_query($db_connect, $update);
        header('location:event_edit.php?id='.$id);


    }


?>