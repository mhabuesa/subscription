<?php

require '../db.php';
require '../dashboard_header.php';


$select_album = "SELECT * FROM album";
$select_album_result = mysqli_query($db_connect, $select_album);




?>

<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row">
            <!-- Album Details -->

            <div class="col-lg-8 m-auto">
                <div class="card">
                    <div class="card-header">
                        <h3> Artist Add</h3>
                    </div>

                    <div class="card-body">

                        <form action="add_artist_post.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input style="width: 250px;" type="text" class="form-control" placeholder="Enter Name" name="name">

                            </div>
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input type="text" class="form-control" placeholder="Enter Phone Number" name="phone">

                            </div>
                            <div class="form-group">
                                <label>Facebook ID</label>
                                <input type="text" class="form-control" placeholder="Enter Facebook URL" name="fb_id">
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
if (isset($_SESSION['artist_inserted'])) { ?>

    <script>
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: '<?= $_SESSION['artist_inserted'] ?>',
            showConfirmButton: false,
            timer: 1500
        })
    </script>

<?php }
unset($_SESSION['artist_inserted']) ?>