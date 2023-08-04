<?php
require '../db.php';
require '../dashboard_header.php';

$select_message = "SELECT * FROM message";
$select_message_result = mysqli_query($db_connect, $select_message);

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
            <h4>Message Box</h4>
        </div>

        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>SL</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Message</th>
                    <th>Status</th>
                    <th>Del</th>
                </tr>

                <?php
                    foreach($select_message_result as $sl=> $message){ ?> 
                    
                <tr>
                    <td><?=$sl+1?></td>
                    <td><?=$message['name']?></td>
                    <td><?=$message['email']?></td>
                    <td><?=$message['phone']?></td>
                    <td><?=$message['message']?></td>
                    <td>
                        <a href="message_read.php?id=<?= $message['id'] ?>" class="btn btn-<?=($message['status']==0?'dark':'info')?>"><?=($message['status']==0?'Unread':'Read')?>  </a>
                    </td>
                    <td>
                    <a href="delete_message.php?id=<?=$message['id'] ?>" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
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