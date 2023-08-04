<?php

require '../db.php';
require '../dashboard_header.php';

$select_contact = "SELECT * FROM contact_info";
$contact_result = mysqli_query($db_connect, $select_contact);
$after_assoc_contact = mysqli_fetch_assoc($contact_result);

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

    <div class="col-lg-12 m-auto">
      <div class="card">
        <div class="card-header">
          <h4>Contact Details</h4>
        </div>

        <div class="card-body">
          <table class="table table-bordered">
            <tr>
              <th> Address</th>
              <th> Email</th>
              <th> Phone</th>
              <th> Action</th>
            </tr>

            <tr>
              <td><?=$after_assoc_contact['address']?></td>
              <td><?=$after_assoc_contact['email']?></td>
              <td><?=$after_assoc_contact['phone']?></td>
              <td>
              <div class="d-flex ">
                  <a href="contact_edit.php" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
              </div>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
    
     
      
      

    </div>



    
    <div class="row">

    <div class="col-lg-12 m-auto">
      <div class="card">
        <div class="card-header">
          <h4>Social Media Details</h4>
        </div>

        <div class="card-body">
          <table class="table table-bordered">
            <tr>
              <th> FB Page</th>
              <th> Youtube</th>
              <th> Action</th>
              
            </tr>

            <tr>
              <td><?=$after_assoc_smedia['fb_page']?></td>
              <td><?=$after_assoc_smedia['youtube']?></td>
              
              <td>
              <div class="d-flex ">
                  <a href="smedia_edit.php" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
              </div>
              </td>
            </tr>
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