<?php
require '../db.php';
require '../dashboard_header.php';

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


            <div class="col-lg-10 m-auto">
                <div class="card">
                    <div class="card-header">
                        <h4> Artist List </h4>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered">

                            <tr>
                                <th>SL</th>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Facebook ID</th>
                                <th>Action</th>
                            </tr>

                            <?php
                            foreach ($select_artist_result as $key => $artist) { ?>

                                <tr>
                                    <td><?= $key + 1 ?></td>
                                    <td><?= $artist['id'] ?></td>
                                    <td><?= $artist['name'] ?></td>
                                    <td><?= $artist['phone'] ?></td>
                                    <td><?= $artist['fb_id'] ?></td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="edit_artist.php?id=<?= $artist['id'] ?>" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                            <a href="delete_artist.php?id=<?= $artist['id'] ?>" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>

                        </table>
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