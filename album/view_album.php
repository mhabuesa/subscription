<?php
require '../db.php';
require '../dashboard_header.php';
$alb_no = $_GET['alb_no'];


$select_album = "SELECT * FROM album WHERE album_number=$alb_no";
$select_album_result = mysqli_query($db_connect, $select_album);
$after_assoc_album = mysqli_fetch_assoc($select_album_result);

$album_number = $after_assoc_album['album_number'];

$select_qs = "SELECT * FROM qs WHERE album_number='$album_number'";
$select_qs_result = mysqli_query($db_connect, $select_qs);
$after_assoc_qs = mysqli_fetch_assoc($select_qs_result);

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
                        <h4> <?= $after_assoc_album['album_number'] ?> - No. Album</h4>
                        <h4><?= $after_assoc_album['album_title'] ?></h4>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered text-center">

                            <tr>
                                <th>SL</th>
                                <th>QS Title</th>
                                <th>Artist Name</th>
                                <th>Qaseedah Shareef</th>
                                <th>Action</th>
                            </tr>

                            <?php
                            foreach ($select_qs_result as $key => $qs) { ?>
                                <tr>
                                    <td><?= $key + 1 ?></td>
                                    <td>
                                        <h6><?= $qs['qs_title'] ?></h6>
                                    </td>
                                    <td><?= $qs['artist'] ?></td>

                                    <td class="text-center">
                                        <audio src="../qs/<?= $qs['qs'] ?>" controls> </audio>
                                    </td>
                                    <td class="text-center">
                                    <div class="d-flex">
                                    <a href="qs_info_edit.php?id=<?=$qs['id']?>" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                    <a href="delete_qs.php?id=<?=$qs['id']?>" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                    </div>
                                    </td>
                                </tr>

                            <?php } ?>


                        </table>
                    </div>
                </div>
            </div>






        </div>



        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card">
                    <div class="card-header">
                        <h4> Add Qaseedah Shareef Album - <?= $after_assoc_album['album_number'] ?> </h4>
                    </div>

                    <div class="card-body">

                        <form action="add_qs_post.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Album Number</label>
                                <input style="width: 250px;" type="number" class="form-control" name="album_number" value="<?= $alb_no ?>">
                               
                               

                            </div>

                            <div class="form-group">
                                <label>QS Title</label>
                                <input style="width: 250px;" type="text" class="form-control" name="qs_title">

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
                                <label>Add Qaseedah Shareef</label>
                                <input type="file" class="form-control" name="qs">
                            </div>

                            <button type="submit" class="btn btn-primary">Add QS</button>
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