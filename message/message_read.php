<?php
    require '../db.php';
    $id = $_GET['id'];

    $select_message = "SELECT * FROM message WHERE id=$id";
    $select_message_result = mysqli_query($db_connect, $select_message);
    $after_assoc_message = mysqli_fetch_assoc($select_message_result);

    if($after_assoc_message['status'] == 0){
        $update = "UPDATE message SET status=1 WHERE id=$id";
        mysqli_query($db_connect, $update);
        
    }


?>






<?php
require '../dashboard_header.php';

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
                <h4>Message Details</h4>
            </div>

            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>SL</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Message</th>
                    </tr>

                    <?php
                        foreach($select_message_result as $key=> $message){ ?>
                        
                        <tr>
                            <td><?=$key+1?></td>
                            <td><?=$message['name']?></td>
                            <td><?=$message['email']?></td>
                            <td><?=$message['phone']?></td>
                            <td><?=$message['message']?></td>
                        </tr>
                        
                        
                        <?php } ?>
                    
                </table>
                <a class="btn btn-info" href="message.php">Back to Message Box</a>
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