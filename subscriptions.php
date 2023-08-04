<?php
require 'db.php';
require 'dashboard_header.php';

$select_user = "SELECT * FROM users";
$select_user_result = mysqli_query($db_connect, $select_user);
$after_assoc = mysqli_fetch_assoc($select_user_result);

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
                <h4>Subscriptions</h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered">

                <tr>
                    <th>SL</th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Status</th>
                </tr>

                <?php foreach($select_user_result as $key=> $users ) {?>
                    
                    <tr>
                        <td><?=$key+1?></td>
                        <td><?=$users['id']?></td>
                        <td><?=$users['name']?></td>
                        <td><?=$users['email']?></td>
                        <td>
                            <a class="btn btn-<?=($users['roll']==0?'dark':'danger')?>" href="subscript_staus.php?id=<?=$users['id']?>"><?=($users['roll']==0?'Non Subscriptions':'Subscriptions')?></a>
                        </td>
                    </tr>
                    <?php }?>
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
require 'dashboard_footer.php';
?>