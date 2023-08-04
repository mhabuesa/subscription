<?php

require '../db.php';
require '../dashboard_header.php';
require '../login_check.php';


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


            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3> Album List</h3>

                    </div>

                    <div class="card-body">



                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">SL</th>
                                    <th scope="col">Album No</th>
                                    <th scope="col">Total QS </th>
                                    <th scope="col">Album Title</th>
                                    <th scope="col">Artist Name</th>
                                    <th scope="col">Photo</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php


                                foreach ($select_album_result as $key => $album) { ?>

                                    <?php
                                    $album_number = $album['album_number'];

                                    $count_qs = "SELECT COUNT(album_number) as total_qs FROM qs WHERE album_number='$album_number'";
                                    $select_qs_result = mysqli_query($db_connect, $count_qs);
                                    $after_assoc_count_qs = mysqli_fetch_assoc($select_qs_result);
                                    ?>

                                    <tr>
                                        <td><?= $key + 1 ?></td>
                                        <td><?= $album['album_number'] ?></td>
                                        <td> <?= $after_assoc_count_qs['total_qs'] ?></td>
                                        <td> <a href="view_album.php?alb_no=<?= $album['album_number'] ?>" title="View Album"><?= $album['album_title'] ?></a> </td>
                                        <td><?= $album['artist_name'] ?></td>

                                        <td> <img style="width:100px;" src="../img/album/<?= $album['photo'] ?>" alt=""></td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="album_edit.php?id=<?= $album['id'] ?>" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                <a href="delete_album.php?id=<?= $album['id'] ?>" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php } ?>

                            </tbody>
                        </table>



                    </div>

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

