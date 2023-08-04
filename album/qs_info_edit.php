<?php
session_start();
require '../db.php';
require '../dashboard_header.php';
$id = $_GET['id'];


$select_qs = "SELECT * FROM qs WHERE id=$id";
$select_qs_result = mysqli_query($db_connect, $select_qs);
$after_assoc_qs = mysqli_fetch_assoc($select_qs_result);

$album_number = $after_assoc_qs['album_number'];

$select_album = "SELECT * FROM album WHERE album_number=$album_number";
$select_album_result = mysqli_query($db_connect, $select_album);
$after_assoc_album = mysqli_fetch_assoc($select_album_result);


$select_qs = "SELECT * FROM qs WHERE album_number='$album_number'";
$select_qs_result = mysqli_query($db_connect, $select_qs);

$select_artist = "SELECT * FROM artist";
$select_artist_result = mysqli_query($db_connect, $select_artist);


?>

<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10">
                <div class="card">
                    <div class="card-header">
                        <h4> <?= $after_assoc_qs['qs_title'] ?></h4><h4>  &nbsp; |</h4>
                        <h4>  <?= $after_assoc_album['album_title'] ?> - 
                         <?= $after_assoc_qs['album_number'] ?></h4>
                    </div>

                    <div class="card-body">








                        
                    <form action="qs_info_edit_post.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Album Number</label>

                                <input style="width: 250px;" type="number" class="form-control" placeholder="Enter Album Number" name="album_number" value="<?=$after_assoc_qs['album_number']?>">

                                <input style="width: 250px;" type="hidden" class="form-control" placeholder="Enter Album Number" name="id" value="<?=$after_assoc_qs['id']?>">

                            </div>
                            <div  style="width: 250px;" class="form-group">
                                <label>QS Title</label>
                                <input type="text" class="form-control" placeholder="Enter QS Title" name="qs_title" value="<?=$after_assoc_qs['qs_title']?>">

                            </div>
                            <div style="width: 250px;" class="form-group">
                                <label>Artist Name</label>

                                <select class="form-control" name="artist" id="">
                                    <?php
                                    foreach ($select_artist_result as $artist) { ?>
                                        <option value="<?= $artist['name'] ?>">
                                            <?= $artist['name'] ?>
                                        </option>
                                    <?php } ?>
                                </select>


                            </div>

                            <div  style="width: 250px;" class="form-group">
                                <label>Qaseedah Shareef</label>
                                <input type="file" class="form-control" name="qs">
                            </div>

                            <button type="submit" class="btn btn-primary">Add Album</button>
                        </form>






                    </div>
                </div>
            </div>
        </div>



        
    </div>
</div>
<!--**********************************
            Content body end
        ***********************************-->



<?php
require '../dashboard_footer.php';
?>
