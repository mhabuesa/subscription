<?php

require '../db.php';
require '../dashboard_header.php';

$select_contact = "SELECT * FROM contact_info";
$contact_result = mysqli_query($db_connect, $select_contact);
$after_assoc_contact = mysqli_fetch_assoc($contact_result);
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
          <form action="contact_edit_post.php" method="post">
            <div class="mb-3">
                <label class="label-control"> Address</label>
               
                <input type="text" name="address" class="form-control" value="<?=$after_assoc_contact['address']?>">

            </div>
            <div class="mb-3">
                <label class="label-control"> Email</label>
                <input  style="width: 400px;" type="text" name="email" class="form-control" value="<?=$after_assoc_contact['email']?>">
            </div>
            <div class="mb-3">
                <label class="label-control"> Phone</label>
                <input style="width: 200px;" type="text" name="phone" class="form-control" value="<?=$after_assoc_contact['phone']?>">
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


