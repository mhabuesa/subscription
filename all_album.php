<?php
    require 'db.php';
    
    
    require 'header.php';
    require 'roll_check.php';



 





    $select_contact = "SELECT * FROM contact_info";
    $contact_result = mysqli_query($db_connect, $select_contact);
    $after_assoc_contact = mysqli_fetch_assoc($contact_result);


    $select_smedia = "SELECT * FROM smedia";
    $select_smedia_result = mysqli_query($db_connect, $select_smedia);
    $after_assoc_smedia = mysqli_fetch_assoc($select_smedia_result);



$select_album_staus =  "SELECT * FROM album";
$album_status_result = mysqli_query($db_connect, $select_album_staus);
?>






                <!-- featured abbum -->
<div class="featured pad" id="all_album">
    <div class="container">
        <!-- default heading -->
        <div class="default-heading">
            <!-- heading -->
            <h2>All Album</h2>
        </div>
        <!-- featured album elements -->
        <div class="featured-element">
            <div class="row">
                

            <?php
                foreach($album_status_result as $album_status ){ ?> 
                
                <div class="col-md-4 col-sm-6">
                    <!-- featured item -->
                    <div class="featured-item ">
                        <!-- image container -->
                        <div class="figure">
                            <!-- image -->
                            <img style="width: 600px; hight height: 600px;" height="" class="img-responsive" src="/qs/img/album/<?=$album_status['photo']?>" alt="Featured Photo" />
                            <!-- paragraph -->
                           
                        </div>
                        <!-- featured information -->
                        <div class="featured-item-info">
                            <!-- featured title -->
                            <h4> <a href="/qs/single_album.php?id=<?=$album_status['id']?>"><?=$album_status['album_title'] ?></a> </h4>
                            <!-- horizontal line -->
                            <hr />
                            <!-- some responce from social medial or web likes -->
                            
                            <p> <span ><?=($album_status['like_count']==null?'0':$album_status['like_count']) ?> <a href="/qs/featured_react/feature_like.php?id=<?=$album_status['id']?>"> <i class="fa fa-thumbs-up" aria-hidden="true"></i></a></span> &nbsp;&nbsp; <span><?=($album_status['love_count']==null?'0':$album_status['love_count']) ?> <a href="/qs/featured_react/feature_love.php?id=<?=$album_status['id']?>"><i class="fa fa-heart" aria-hidden="true"></i></a></span></p>
                        </div>
                    </div>
                </div>       
                <?php }?>

                
                
                
                
            </div>
        </div>
    </div>
</div>
<!-- features end -->















                


                <!-- footer -->
                <footer>
                    <div class="container">
                        <!-- social media links -->
                        <div class="social">
        <a class="h-facebook" target="_blank" title="Facebook Page" href="<?=$after_assoc_smedia['fb_page']?>"><i class="fa-brands fa-square-facebook"></i></a>
        <a class="h-google" target="_blank" title="Youtube Channel" href="<?=$after_assoc_smedia['youtube']?>"><i class="fa-brands fa-youtube"></i></a>
        </div>
                        <!-- copy right -->
                        <p class="copy-right">&copy; copyright 2018, All rights are reserved.</p>
                    </div>
                </footer>
                <!-- footer end -->

                <!-- Scroll to top -->
                <span class="totop"><a href="#"><i class="fa fa-chevron-up"></i></a></span>

            </div>

            <!-- Javascript files -->
            <!-- jQuery -->
            <script src="/qs/js/jquery.js"></script>
            <!-- Bootstrap JS -->
            <script src="/qs/js/bootstrap.min.js"></script>
            <!-- WayPoints JS -->
            <script src="/qs/js/waypoints.min.js"></script>
            <!-- Include js plugin -->
            <script src="/qs/js/owl.carousel.min.js"></script>
            <!-- One Page Nav -->
            <script src="/qs/js/jquery.nav.js"></script>
            <!-- Respond JS for IE8 -->
            <script src="/qs/js/respond.min.js"></script>
            <!-- HTML5 Support for IE -->
            <script src="/qs/js/html5shiv.js"></script>
            <!-- Custom JS -->
            <script src="/qs/js/custom.js"></script>

            <script src="https://cdn.jsdelivr.net/gh/sh20raj/AudiPlay/audiplay.min.js"></script>

</body>

</html>
