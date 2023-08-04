<?php
require '../db.php';
require '../dashboard_header.php';

$select_album = "SELECT * FROM album";
$select_album_result = mysqli_query($db_connect, $select_album);
$after_assoc = mysqli_fetch_assoc($select_album_result);
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
                <h4>Featured Album List</h4>
            </div>

            <div class="card-body text-center">
                <table class="table table-bordered">
                
                <tr >
                    <th>SL</th>
                    <th>Album No</th>
                    <th>Artist</th>
                    <th>Album Title</th>
                    <th>Status</th>
                </tr>


                <?php
                    foreach($select_album_result as $key => $album){ ?> 
                    
                    <tr>
                    <td><?=$key +1?></td>
                    <td><?=$album['album_number']?></td>
                    <td><?=$album['artist_name']?></td>
                    <td><?=$album['album_title']?></td>
                    <td>
                        <a href="featured_status_post.php?id=<?=$album['id']?>"
                        class="btn btn-<?=($album['status']==0?'light':'primary')?>" >

                           <?=($album['status']==0?'Un Featured':'Featured')?>
                        </a>
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