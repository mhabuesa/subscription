<?php
require '../db.php';
require '../dashboard_header.php';

$select_smedia = "SELECT * FROM smedia";
$select_smedia_result = mysqli_query($db_connect, $select_smedia);
$after_assoc_smedia = mysqli_fetch_assoc($select_smedia_result);
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
          <h4>Contact Details</h4>
        </div>

        <div class="card-body">
          <form action="smedia_edit_post.php" method="post">
            <div class="mb-3">
                <label class="label-control"> Facebook Page</label>
               
                <input style="width: 400px;" type="text" name="fb_page" class="form-control" value="<?=$after_assoc_smedia['fb_page']?>">

            </div>
            <div class="mb-3">
                <label class="label-control"> Youtube</label>
                <input  style="width: 400px;" type="text" name="youtube" class="form-control" value="<?=$after_assoc_smedia['youtube']?>">
            </div>
           

            <button class="btn btn-primary"> Submit </button>
            <a href="contact_info.php" class="btn btn-info"><i class="fa-solid fa-angles-left fa-beat-fade"></i> Back </a>
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
        if(isset($_SESSION['Contact_update'])){ ?>
           
           
<script>

Swal.fire({
  position: 'center',
  icon: 'success',
  title: '<?=$_SESSION['Contact_update']?>',
  showConfirmButton: false,
  timer: 1500
})
</script>
            
      <?php  } unset($_SESSION['Contact_update']);?>
?>


