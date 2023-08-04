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
      <div class="col-lg-8">
        <div class="card">
          <div class="card-header">
            <h4>Edit Album Info</h4>
          </div>
          <div class="card-body">
            <form action="album_edit_post.php" method="post">
              <div class="mb-3">
                <label class="label-control">Album Number</label>
                <input style="width: 100px;" class="form-control" type="number" name="name">
              </div>

              <div class="mb-3">
                <label class="label-control">Album Name</label>
                <input style="width: 250px;" class="form-control" type="text" name="name">
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