<?php
require'../db.php';
require '../dashboard_header.php';
$select_event = "SELECT * FROM event";
$select_event_result = mysqli_query($db_connect, $select_event);
?>

<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
  <!-- row -->
  <div class="container-fluid">
    <div class="row">

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Event Lins</h4>
            </div>

            <div class="card-body">
                <table class="table table-bordered text-center">
                    <tr>
                        <th>SL</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Location</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Photo</th>
                        <th>URL</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>

                    <?php
                        foreach($select_event_result as $key=> $event){ ?> 

                    <tr>
                        <td><?=$key+1?></td>
                        <td><?=$event['day'] . ' '. $event['month']?></td>
                        <td><?=$event['time']?></td>
                        <td><?=$event['location']?></td>
                        <td><?=$event['title']?></td>
                        <td><?=$event['desp']?></td>
                        <td>
                            <img width="100px" src="../img/event/<?=$event['photo']?>" alt="">
                        </td>
                        <td><?=$event['url']?></td>
                        <td>
                            <a href="event_status.php?id=<?=$event['id']?>" class="text-white btn btn-<?=($event['status']==0?'dark':'info')?>"><?=($event['status']==1?'Show':'Hide')?> </a>
                        </td>
                        <td>
                        <div class="d-flex">
                                                <a href="event_edit.php?id=<?= $event['id'] ?>" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                <a href="delete_event.php?id=<?= $event['id'] ?>" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                        </td>
                    </tr>

                    <?php } ?>
                </table>
            </div>
        </div>
    </div>




    <div class="col-lg-8 m-auto">
        <div class="card">
            <div class="card-header">
                <h4>Event Lins</h4>
            </div>

            <div class="card-body">
               <form action="event_post.php" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label class="label-control">Date</label>
                    <input placeholder="Day" class="form-control mb-2" style="width: 80px; height:40px;" type="number" name="day"> 
                    <select style="width: 200px;" class="form-control" name="month">
                        <option value="Muharram">Muharram</option>
                        <option value="Safar">Safar</option>
                        <option value="Rwabiul Aowal">Rwabiul Aowal</option>
                        <option value="Rwabius Sani">Rwabius Sani</option>
                        <option value="Jumadal Ula">Jumadal Ula</option>
                        <option value="Jumadal Ukhra">Jumadal Ukhra</option>
                        <option value="Rajab">Rajab</option>
                        <option value="Shaban">Shaban</option>
                        <option value="Rwamadan">Rwamadan</option>
                        <option value="Shaowal">Shaowal</option>
                        <option value="Jilkad">Jilkad</option>
                        <option value="Jilhaj">Jilhaj</option>
                    </select>

                </div>

                <div class="mb-3">

                <label class="label-control">Time</label>
                    <input placeholder="Location" class="form-control mb-2" style="width: 135px; height:40px;" type="time" name="time"> 

                </div>


                
                <div class="mb-3">

                <label class="label-control">Location</label>
                    <input placeholder="Location" class="form-control mb-2" style="width: 250px; height:40px;" type="text" name="loc"> 

                </div>
                <div class="mb-3">
                <label class="label-control">Title</label>
                    <input placeholder="Title" class="form-control mb-2" style="width: 250px; height:40px;" type="text" name="title"> 

                </div>
                <div class="mb-3">
                <label class="label-control">Description</label>
                   <textarea placeholder="Description" class="form-control" name="desp" id="" cols="30" rows="10"></textarea> 

                </div>


                <div class="mb-3">
                <label class="label-control">ULR</label>
                  <input placeholder="Enter Your Event Link" style="width: 550px;" class="form-control" type="text" name="url">

                </div>


                <div class="mb-3">
                <label class="label-control">Photo</label>
                  <input style="width: 350px;" class="form-control" type="file" name="photo">

                </div>

                <button class="btn btn-primary">Submit</button>
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