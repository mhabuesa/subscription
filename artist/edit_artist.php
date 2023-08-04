<?php
require '../dashboard_header.php';
require '../db.php';

$id = $_GET['id'];

$select_artist = "SELECT * FROM artist WHERE id='$id'";
$select_artist_result = mysqli_query($db_connect, $select_artist);
$after_assoc_artist = mysqli_fetch_assoc($select_artist_result);

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
                <h4> Artist Info Edit</h4>
            </div>
            <div class="card-body">
            <form action="edit_artist_post.php" method="post">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input name="id" type="hidden"  value="<?=$after_assoc_artist['id']?>" >
                                <input 
                                style="width: 250px;" 
                                type="text" 
                                class="form-control" 
                                placeholder="Enter Name" 
                                name="name"
                                value="<?=$after_assoc_artist['name']?>"
                                >

                            </div>
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input style="width: 350px;" type="text" class="form-control" placeholder="Enter Phone Number" name="phone"
                                value="<?=$after_assoc_artist['phone']?>"
                                >

                            </div>
                            <div class="form-group">
                                <label>Facebook ID</label>
                                <input style="width: 450px;" type="text" class="form-control" placeholder="Enter Facebook URL" name="fb_id"
                                value="<?=$after_assoc_artist['fb_id']?>"
                                >
                            </div>

                            <button type="submit" class="btn btn-primary">Edit Album</button>
                            <a href="view_artist.php" type="submit" class="btn btn-primary">Back</a>
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