<?php
    require 'db.php';
    session_start();
    require 'login_check.php';
    
    $roll = $_SESSION['roll'];
    $select_contact = "SELECT * FROM contact_info";
    $contact_result = mysqli_query($db_connect, $select_contact);
    $after_assoc_contact = mysqli_fetch_assoc($contact_result);


    $select_smedia = "SELECT * FROM smedia";
    $select_smedia_result = mysqli_query($db_connect, $select_smedia);
    $after_assoc_smedia = mysqli_fetch_assoc($select_smedia_result);

   




?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Qaseedah Shareef</title>
    <!-- Description, Keywords and Author -->
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your,Keywords">
    <meta name="author" content="HimanshuGupta">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Styles -->
    <!-- Bootstrap CSS -->
    <link href="/qs/css/bootstrap.min.css" rel="stylesheet">
    <!-- Animate CSS -->
    <link href="/qs/css/animate.min.css" rel="stylesheet">
    <!-- Basic stylesheet -->
    <link rel="stylesheet" href="/qs/css/owl.carousel.css">
    <!-- Font awesome CSS -->
    <link href="/qs/css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="/qs/css/style.css" rel="stylesheet">
    <link href="/qs/css/style-color.css" rel="stylesheet">

    <!-- Favicon -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/png" sizes="16x16" href="/qs/images/icon.png">
</head>

<body>



    <!-- wrapper -->
    <div class="wrapper" id="home">

        <!-- header area -->
        <header>
            <!-- secondary menu -->
            <nav class="secondary-menu">
                <div class="container">
                    <!-- secondary menu left link area -->
                    <div class="sm-left">
                        <strong>Phone</strong>:&nbsp; <a href=""><?=$after_assoc_contact['phone']?>  </a>&nbsp;&nbsp;&nbsp;&nbsp;
                        <strong>E-mail</strong>:&nbsp; <a href=""><?=$after_assoc_contact['email']?></a>
                    </div>
                    <!-- secondary menu right link area -->
                    <div class="sm-right">
                        <!-- social link -->
                        <div class="sm-social-link">
                            <a class="h-facebook" title="Facebook Page" href="<?=$after_assoc_smedia['fb_page']?>"><i class="fa-brands fa-square-facebook"></i></a>
                            <a class="h-google" title="Youtube Channel" href="<?=$after_assoc_smedia['youtube']?>"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </nav>
            <!-- primary menu -->
            <nav class="navbar navbar-fixed-top navbar-default">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- logo area -->
                        <a class="navbar-brand" href="https://abuesa.com/qs">
                            <!-- logo image -->
                            <!-- <img class="img-responsive" src="/qs/img/logo/logo.png" alt="" /> -->
                            <h4 style="color: white;" class="text-decoration-none text-white">Qaseedah Shareef</h4>
                        </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="/qs/index.php/#latestalbum">Latest Album</a></li>
                            <li><a href="/qs/index.php/#featuredalbum">Featured Album</a></li>
                            <li><a href="/qs/all_album.php/#all_album">All Album</a></li>

                            <li><a href="/qs/index.php/#portfolio">Top Rated Album</a></li>
                            <li><a href="/qs/index.php/#events">Events</a></li>

                            <li><a href="/qs/index.php/#contact">Contact</a></li>
                            <li><a href="/qs/profile.php/#profile">Profile</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </header>
        <!--/ header end -->

        <!-- banner area -->
        <div class="banner">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="/qs/img/banner/b1.jpg" alt="...">
                        <div class="container">
                            <!-- banner caption -->
                            <div class="carousel-caption slide-one">
                                <!-- heading -->
                                <h2 class="animated fadeInLeftBig"><i class="fa fa-music"></i> Qaseedah For You!</h2>
                                <!-- paragraph -->
                                <h3 class="animated fadeInRightBig">Find More Innovative &amp; Creative Naat Albums.</h3>
                                <!-- button -->
                                <a href="/qs/all_album.php/#all_album" class="animated fadeIn btn btn-theme">Visit Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="/qs/img/banner/b2.jpg" alt="...">
                        <div class="container">
                            <!-- banner caption -->
                            <div class="carousel-caption slide-two">
                                <!-- heading -->
                                <h2 class="animated fadeInLeftBig"><i class="fa fa-headphones"></i> Listen It...</h2>
                                <!-- paragraph -->
                                <h3 class="animated fadeInRightBig">Avoid music Listen Hamd, Naat & Qaseedah Shareef.</h3>
                                <!-- button -->
                                <a href="/qs/all_album/all_album.php#all_album" class="animated fadeIn btn btn-theme">Listen Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="fa fa-arrow-left" aria-hidden="true"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="fa fa-arrow-right" aria-hidden="true"></span>
                </a>
            </div>
        </div>
        <!--/ banner end -->

        <!-- block for animate navigation menu -->
        <div class="nav-animate"></div>