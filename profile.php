<?php
    require 'db.php';
    require 'header.php';
    
    $id = $_SESSION['id'];
    $select_user = "SELECT * FROM users WHERE id=$id";
    $select_user_result = mysqli_query($db_connect, $select_user);
    $after_assoc_user = mysqli_fetch_assoc($select_user_result);




$select_album_staus =  "SELECT * FROM album WHERE status= 1";
$album_status_result = mysqli_query($db_connect, $select_album_staus);
?>






                <!-- featured abbum -->
<div class="featured pad" id="profile">
    <div class="container">
        <!-- default heading -->
        <div class="default-heading">
            <!-- heading -->
            <h2>Profile</h2>
        </div>
        <!-- featured album elements -->
        <div class="featured-element">
            <div class="row">

            <div class="col-lg-12 m-auto">
                        <div class="">
                                 <h3>Profile Info</h3>
                           </div>

                        

                        
                           <div style="margin-bottom: 20px;">
                            <span>Name</span>
                            <input style="width: 250px;" class="form-control" type="text" value="<?=$after_assoc_user['name']?>">
                           </div>

                           <div style="margin-bottom: 20px;">
                            <span>Email</span>
                            <input style="width: 250px;" class="form-control" type="email" value="<?=$after_assoc_user['email']?>">
                           </div>

                           <div class="default-heading">
                                <p> <strong>Your Account Status</strong></p>

                                <?php 
                                if($after_assoc_user['roll']==1){
                                    echo ' <button class="btn btn-danger"> <i class="fa-solid fa-check"></i>  Subscriptions</button>';
                                }
                                else {
                                    echo ' <button class="btn btn-danger"><i class="fa-solid fa-xmark"></i> Non Subscriptions</button>';
                                    echo ' <h5>অনুগ্রহ পূর্বক কর্তৃপক্ষের সাথে যোগাযোগ করে আপনার এ্যাকাউন্টটি এ্যাক্টিভ করে নিন। </h5>
                                    <h6>শুকরিয়া...</h6>
                                    <a class="btn btn-primary" href="/qs/index.php/#contact">যোগাযোগ করুন...</a>';
                                    
                                }
                              
                                ?>
                               
                            </div>



                            <a href="/qs/login/logout.php"  class="btn btn-primary">Logout</a>









                   

                    
            </div>
                

            

                
                
                
                
            </div>
        </div>
    </div>
</div>
<!-- features end -->

<?php
    require 'footer.php';
?>