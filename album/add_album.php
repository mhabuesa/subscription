<?php

require '../db.php';
require '../dashboard_header.php';



$select_album = "SELECT * FROM album";
$select_album_result = mysqli_query($db_connect, $select_album);

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
            <!-- Album Details -->

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h3> Album Details</h3>


                    </div>

                    <div class="card-body">

                        <form action="add_album_post.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Album Number</label>

                                <input style="width: 250px;" type="number" class="form-control" placeholder="Enter Album Number" name="album_number">

                            </div>
                            <div class="form-group">
                                <label>Album Title</label>
                                <input type="text" class="form-control" placeholder="Enter Album Title" name="album_title">

                            </div>
                            <div style="width: 250px;" class="form-group">
                                <label>Artist Name</label>

                                <select class="form-control" name="artist_name" id="">
                                    <?php
                                    foreach ($select_artist_result as $artist) { ?>
                                        <option value="<?= $artist['name'] ?>">
                                            <?= $artist['name'] ?>
                                        </option>
                                    <?php } ?>
                                </select>


                            </div>

                            <div class="form-group">
                                <label>Album Photo</label>
                                <input type="file" class="form-control" name="album_photo">
                            </div>

                            <button type="submit" class="btn btn-primary">Add Album</button>
                        </form>



                    </div>

                </div>
            </div>
            <!-- Album Details End -->






        </div>
    </div>
</div>
<!--**********************************
            Content body end
        ***********************************-->



<?php
require '../dashboard_footer.php';
?>



<?php
if (isset($_SESSION['album_uploaded'])) { ?>

    <script>
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: '<?= $_SESSION['album_uploaded'] ?>',
            showConfirmButton: false,
            timer: 1500
        })
    </script>

<?php }
unset($_SESSION['album_uploaded']) ?>

<?php
if (isset($_SESSION['qs_uploaded'])) { ?>

    <script>
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: '<?= $_SESSION['qs_uploaded'] ?>',
            showConfirmButton: false,
            timer: 1500
        })
    </script>

<?php }
unset($_SESSION['qs_uploaded']) ?>