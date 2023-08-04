<?php
require 'db.php';

require 'header.php';
require 'roll_check.php';






$id = $_GET['id'];

$select_album = "SELECT * FROM album WHERE id ='$id'";
$select_result = mysqli_query($db_connect, $select_album);
$after_assoc_album = mysqli_fetch_assoc($select_result);

$select_album_staus =  "SELECT * FROM album";
$album_status_result = mysqli_query($db_connect, $select_album_staus);

$album = $after_assoc_album['album_number'];

$select_qs = "SELECT * FROM qs WHERE album_number=$album";
$select_qs_result = mysqli_query($db_connect, $select_qs);









?>





 



<!-- featured abbum -->
<div class="featured pad" id="">
    <div class="container">
        <!-- default heading -->
        <div class="default-heading">
            <!-- heading -->
            <h2> <?=$after_assoc_album['album_title']?></h2>
        </div>
        <!-- featured album elements -->
        <div class="featured-element">
            <div class="row">
                

            
                
                <div class="col-lg-4 ">
                    <!-- featured item -->
                    <div class="featured-item ">
                        <!-- image container -->
                        <div class="figure">
                            <!-- image -->
                            <img style="width: 600px; hight height: 600px;" class="img-responsive" src="/qs/img/album/<?=$after_assoc_album['photo']?>" alt="Featured Photo" />
                           
                        </div>
                        <!-- featured information -->
                        <div class="featured-item-info">
                            <!-- featured title -->
                            <h4> <?=$after_assoc_album['artist_name'] ?> </h4>
                            <!-- horizontal line -->
                            <hr />

                            
                        </div>
                    </div>
                </div>  



                    <?php

                        foreach($select_qs_result as $qs){ ?> 
                <div class="col-lg-4">
                    <!-- featured item -->
                    <div class="featured-item ">
                    <ul class="list-unstyled">



                        <li class="playlist-number">
                            <!-- song information -->
                            <div class="song-info">
                                <!-- song title -->
                                <h4><?= $qs['qs_title']?></h4>
                                <p><strong>Artist</strong>: <?=$qs['artist']?></p>
                            </div>
                            <!-- music icon -->
                            <div>
                                <audio style="width: 100%;" controls class="">
                                    <source src="/qs/qs/<?=$qs['qs']?>" type="audio/mp3" />
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
                    <!-- features end -->







<?php
    require 'footer.php';
?>