<?php
require 'db.php';
require 'header.php';

$select_album = "SELECT * FROM album WHERE id=(SELECT max(id) FROM album)";
$select_album_result = mysqli_query($db_connect, $select_album);
$latest_album = mysqli_fetch_assoc($select_album_result);

$last_album = $latest_album['album_number'];

$select_qs = "SELECT * FROM qs WHERE album_number=$last_album";
$select_qs_result = mysqli_query($db_connect, $select_qs);
$after_assoc_qs = mysqli_fetch_assoc($select_qs_result);



$select_album_staus =  "SELECT * FROM album WHERE status= 1";
$album_status_result = mysqli_query($db_connect, $select_album_staus);


$select_album_rated =  "SELECT * FROM album WHERE rated= 1";
$album_rated_result = mysqli_query($db_connect, $select_album_rated);


$select_event =  "SELECT * FROM event WHERE status= 1";
$album_event_result = mysqli_query($db_connect, $select_event);


$select_contact = "SELECT * FROM contact_info";
$contact_result = mysqli_query($db_connect, $select_contact);
$after_assoc_contact = mysqli_fetch_assoc($contact_result);



?>

<!-- Hero block area -->
<div id="latestalbum" class="hero pad">
    <div class="container">
        <!-- hero content -->
        <div class="hero-content ">
            <!-- heading -->
            <h2>Latest Album</h2>
            <hr>
            <!-- paragraph -->
            <p>We recite the best <strong class="theme-color">Naat</strong> and now We are the only organization that recites Naat without <strong class="theme-color">Musical Instruments</strong>.</p>
        </div>

        <?php
 
?>
        <!-- hero play list -->
        <div class="hero-playlist">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <!-- music album image -->
                    <div class="figure">
                        <!-- image -->
                        <img class="img-responsive" src="/qs/img/album/<?=$latest_album['photo']?>" alt="" />
                       
                    </div>
                    <!-- album details -->
                    <div class="album-details">
                        <!-- title -->
                        <h4><?= $latest_album['album_title']?></h4>
                        <!-- composed by -->
                        <h5>Artist  (<?= $latest_album['artist_name']?>)</h5>
                        <!-- paragraph
                        <p>Lorem Ipsum has been the industry's standard dummy text ever since 1500.</p> -->
                        <!-- button -->
                        <a href="/qs/single_album.php?id=<?=$latest_album['id']?>" class="btn btn-lg btn-theme"><i class="fa fa-play"></i>&nbsp; Visit Now</a>
                    </div>
                </div>


                        <?php

                            foreach($select_qs_result as $last_album){ ?> 

                <div class="col-lg-4">
                    <!-- play list -->
                    <div class="playlist-content">
                        <ul class="list-unstyled">


            
                            <li class="playlist-number">
                                <!-- song information -->
                                <div class="song-info">
                                    <!-- song title -->
                                    <h4><?= $last_album['qs_title']?></h4>
                                    <p><strong>Album</strong>: <?=$latest_album['album_title']?> &nbsp; &nbsp;|  &nbsp; &nbsp; <strong>Artist</strong>: <?=$last_album['artist']?></p>
                                </div>
                                <!-- music icon -->
                                <div>
                                    <audio style="width: 100%;" controls controlsList="nodownload" class="">
                                        <source src="/qs/qs/<?=$last_album['qs']?>" type="audio/mp3" />
                                    </audio>
                                </div>
                                <div class="clearfix"></div>
                            </li>

                            
                            
                            
                            
                            
                            
                            
                            
                            
                        </ul>
                    </div>
                </div>
                <?php } ?>


            </div>
        </div>
    </div>
</div>
<!--/ hero end -->



<!-- featured abbum -->
<div class="featured pad" id="featuredalbum">
    <div class="container">
        <!-- default heading -->
        <div class="default-heading">
            <!-- heading -->
            <h2>Featured Album</h2>
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
                            <img width="400" style="height: 350px;" class="img-responsive" src="/qs/img/album/<?=$album_status['photo']?>" alt="Featured Photo" />
                            <!-- paragraph -->
                           
                        </div>
                        <!-- featured information -->
                        <div class="featured-item-info">
                            <!-- featured title -->
                            <h4> <a href="/qs/single_album.php?id=<?=$album_status['id']?>"><?=$album_status['album_title'] ?></a> </h4>
                            <!-- horizontal line -->
                            <hr />
                            <!-- some responce from social medial or web likes -->
                            
                            <p> <span ><?=($album_status['like_count']==null?'0':$album_status['like_count']) ?> <a href="featured_react/feature_like.php?id=<?=$album_status['id']?>"> <i class="fa fa-thumbs-up" aria-hidden="true"></i></a></span> &nbsp;&nbsp; <span><?=($album_status['love_count']==null?'0':$album_status['love_count']) ?> <a href="featured_react/feature_love.php?id=<?=$album_status['id']?>"><i class="fa fa-heart" aria-hidden="true"></i></a></span></p>
                        </div>
                    </div>
                </div>       
                <?php }?>

                
                
                
                
            </div>
        </div>
    </div>
</div>
<!-- features end -->







<div class="portfolio pad" id="portfolio">
    <div>
        <!-- default heading -->
        <div class="default-heading">
            <!-- heading -->
            <h2>Top Rated Album</h2>
        </div>
    </div>
    <!-- portfolio -->
    <div class="portfolio-content" id="portfolioOwl">


    <?php foreach($album_rated_result as $rated){?>

        <div class="item">
            <!-- item image -->
            <img style="height: 420px; width: 330px;" width="330" class="img-responsive" src="/qs/img/album/<?=$rated['photo']?>" alt="">
            <!-- transparent background -->
            <div class="p-transparent"></div>
            <!-- on mouse hover details -->
            <div class="p-hover">
                <!-- heading /title -->
                <h3><?=$rated['album_title']?></h3>
                <hr>
                <!-- project details -->
                <p><?=$rated['artist_name']?></p>
                <!-- icon -->
                <a href="/qs/single_album.php?id=<?=$rated['id']?>"><i class="fa fa-share"></i></a>
            </div>
        </div>

        <?php }?>
       
        
       
    </div>

    <!-- portfolio end -->
</div>
<!-- work with us end -->


<!-- events -->
<div class="events parallax-three pad" id="events">
    <div class="container">
        <!-- default heading -->
        <div class="default-heading-shadow">
            <!-- heading -->
            <h2>Coming Events</h2>
        </div>
        <!-- events element -->
        <div class="events-element">
            <div class="row">


            <?php
                foreach($album_event_result as $event){ ?> 
                

                <div class="col-md-6 col-sm-6">
                    <!-- event item -->
                    <div class="events-item ">
                        <!-- image container -->
                        <div class="figure">
                            <!-- event date -->
                            <div class="event-date">
                                <?=$event['day']?> <span class="emonth"><?=$event['month']?></span>
                                <div class="clearfix"></div>
                                <!-- time -->
                                <span class="etime"><?=$event['time']?></span>
                            </div>
                            <!-- event location -->
                            <span class="event-location"><i class="fa fa-map-marker"></i> <?=$event['location']?></span>
                            <!-- image -->
                            <img style="height: 250px;" class="img-responsive" src="/qs/img/event/<?=$event['photo']?>" alt="" />
                            <!-- image hover -->
                            <div class="img-hover">
                                <!-- hover icon -->
                                <a href="<?=$event['url']?>" target="_blank"><i class="fa fa-play-circle"></i></a>
                            </div>
                        </div>
                        <!-- event information -->
                        <div class="event-info">
                            <!-- event title -->
                            <h3><?=$event['title']?></h3>
                            <!-- horizontal line -->
                            <hr />
                            <!-- paragraph -->
                            <p><?=$event['desp']?></p>
                           
                        </div>
                    </div>
                </div>




                <?php }
            ?>

                




               
                
            </div>
        </div>
    </div>
</div>
<!-- events end -->




<!-- contact -->
<div class="contact pad" id="contact">
    <div class="container">
        <!-- default heading -->
        <div class="default-heading">
            <!-- heading -->
            <h2>Contact Us</h2>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <!-- contact item -->
                <div class="contact-item ">
                    <!-- big icon -->
                    <i class="fa-solid fa-map-location-dot"></i>
                    <!-- contact details  -->
                    <span class="contact-details"><?=$after_assoc_contact['address']?></span>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <!-- contact item -->
                <div class="contact-item ">
                    <!-- big icon -->
                    <i class="fa-solid fa-envelope-open-text"></i>
                    <!-- contact details  -->
                    <span class="contact-details"><?=$after_assoc_contact['email']?></span>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <!-- contact item -->
                <div class="contact-item ">
                    <!-- big icon -->
                    <i class="fa fa-phone"></i>
                    <!-- contact details  -->
                    <span class="contact-details"><?=$after_assoc_contact['phone']?></span>
                </div>
            </div>
        </div>
        <!-- form content -->
        <div class="form-content ">
            <!-- paragraph -->
            <p>Do you have any idea in your mind? Drop us a line.</p>
            <form action="/qs/message/message_post.php" method="post">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" value="<?=(isset($_SESSION['old_name'])?$_SESSION['old_name']:'')?>">
                            <?php
                                if(isset($_SESSION['name_err'])){ ?> 
                                
                                <div class=" alert alert-danger"><?=$_SESSION['name_err']?></div>

                                <?php } unset($_SESSION['name_err']) ?>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" 
                            value="<?=(isset($_SESSION['old_email'])?$_SESSION['old_email']:'')?>">
                            <?php
                                if(isset($_SESSION['email_err'])){ ?> 
                                
                                <div class=" alert alert-danger"><?=$_SESSION['email_err']?></div>

                                <?php } unset($_SESSION['email_err']) ?>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="phone" class="form-control" id="phone" name="phone" placeholder="Enter phone"
                            value="<?=(isset($_SESSION['old_phone'])?$_SESSION['old_phone']:'')?>">
                            <?php
                                if(isset($_SESSION['phone_err'])){ ?> 
                                
                                <div class=" alert alert-danger"><?=$_SESSION['phone_err']?></div>

                                <?php } unset($_SESSION['phone_err']) ?>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label for="message">Message</label>
                            <?php
                                if(isset($_SESSION['message_err'])){ ?> 
                                
                                <div class=" alert alert-danger"><?=$_SESSION['message_err']?></div>

                                <?php } unset($_SESSION['message_err']) ?>
                            <textarea class="form-control" id="message" name="message" rows="9" placeholder="Enter message"><?=(isset($_SESSION['old_message'])?$_SESSION['old_message']:'')?></textarea>

                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-lg btn-theme">Send Message</button>
                </div>
            </form>

        </div>

    </div>
</div>
<!-- contact end -->


<?php
require 'footer.php';

unset($_SESSION['old_name']);
unset($_SESSION['old_email']);
unset($_SESSION['old_phone']);
unset($_SESSION['old_message']);
?>



<?php
        if(isset($_SESSION['message_sent'])){ ?>
           
           
<script>

Swal.fire({
  position: 'center',
  icon: 'success',
  title: '<?=$_SESSION['message_sent']?>',
  showConfirmButton: false,
  timer: 1500
})
</script>
            
      <?php  } unset($_SESSION['message_sent']);?>
