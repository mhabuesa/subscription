<?php
require '../db.php';
require '../dashboard_header.php';

$id = $_GET['id'];

$select_event = "SELECT * FROM event WHERE id=$id";
$select_event_result = mysqli_query($db_connect, $select_event);
$after_assoc_event = mysqli_fetch_assoc($select_event_result);

?>

<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
  <!-- row -->
  <div class="container-fluid">
    <div class="row">

    <div class="col-lg-8 m-auto">
        <div class="card">
            <div class="card-header">
                <h4>Event Lins</h4>
            </div>

            <div class="card-body">
               <form action="event_edit_post.php" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label class="label-control">Date</label>

                    <input class="form-control mb-2" type="hidden" name="id" value="<?=$id?>"> 

                    <input placeholder="Day" class="form-control mb-2" style="width: 80px; height:40px;" type="number" name="day" value="<?=$after_assoc_event['day']?>"> 
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
                    <input placeholder="Location" class="form-control mb-2" style="width: 135px; height:40px;" type="time" name="time" value="<?=$after_assoc_event['time']?>"> 

                </div>





                
                <div class="mb-3">

                <label class="label-control">Location</label>
                    <input placeholder="Location" class="form-control mb-2" style="width: 250px; height:40px;" type="text" name="loc" value="<?=$after_assoc_event['location']?>" > 

                </div>
                <div class="mb-3">
                <label class="label-control">Title</label>
                    <input placeholder="Title" class="form-control mb-2" style="width: 250px; height:40px;" type="text" name="title" value="<?=$after_assoc_event['title']?>"> 

                </div>
                <div class="mb-3">
                <label class="label-control">Description</label>
                   <textarea placeholder="Description" class="form-control" name="desp" id="" cols="30" rows="10"><?=$after_assoc_event['desp']?></textarea> 

                </div>


                <div class="mb-3">
                <label class="label-control">ULR</label>
                  <input placeholder="Enter Your Event Link" style="width: 550px;" class="form-control" type="text" name="url"  value="<?=$after_assoc_event['url']?>">

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