<?php
require '../db.php';
require '../dashboard_header.php';

$select = "SELECT * FROM album";
$select_result = mysqli_query($db_connect, $select);

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
        <h4>Top Rated Album Select List</h4>
      </div>

      <div class="card-body">
        <table class="table table-bordered">
          <tr>
            <th>SL</th>
            <th>Album Number</th>
            <th>Album Title</th>
            <th>Rated</th>
          </tr>  



          <?php
              foreach($select_result as $key=> $rated){ ?>
              <tr>
                <td><?=$key+1?></td>
                <td><?=$rated['album_number']?></td>
                <td><?=$rated['album_title']?></td>
                <td>
                  <a href="top_rated_post.php?id=<?=$rated['id']?>" class="btn btn-<?=($rated['rated']==0?'dark':'info')?>"> <?=($rated['rated']==0?'Normal':'Rated')?></a>
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