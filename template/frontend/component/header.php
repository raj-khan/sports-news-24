<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo isset($title) ? $title : ' Sports News 24' ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon"
          href="<?php echo base_url() ?>template/frontend/assets/images/fav.png">
    <!-- Place favicon.ico in the root directory -->
    <!-- all css here -->
    <!-- bootstrap v3.3.6 css -->
    <link rel="stylesheet" href="<?php echo base_url() ?>template/frontend/assets/css/bootstrap.min.css">
    <!-- font-awesome css -->
    <link rel="stylesheet" href="<?php echo base_url() ?>template/frontend/assets/css/font-awesome.min.css">
    <!-- animate css -->
    <link rel="stylesheet" href="<?php echo base_url() ?>template/frontend/assets/css/animate.css">
    <!-- hover-min css -->
    <link rel="stylesheet" href="<?php echo base_url() ?>template/frontend/assets/css/hover-min.css">
    <!-- magnific-popup css -->
    <link rel="stylesheet" href="<?php echo base_url() ?>template/frontend/assets/css/magnific-popup.css">
    <!-- meanmenu css -->
    <link rel="stylesheet" href="<?php echo base_url() ?>template/frontend/assets/css/meanmenu.min.css">
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="<?php echo base_url() ?>template/frontend/assets/css/owl.carousel.css">
    <!-- lightbox css -->
    <link href="<?php echo base_url() ?>template/frontend/assets/css/lightbox.min.css" rel="stylesheet">
    <!-- nivo slider CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>template/frontend/assets/inc/custom-slider/css/nivo-slider.css"
          type="text/css"/>
    <link rel="stylesheet" href="<?php echo base_url() ?>template/frontend/assets/inc/custom-slider/css/preview.css"
          type="text/css" media="screen"/>
    <!-- style css -->
    <link rel="stylesheet" href="<?php echo base_url() ?>template/frontend/assets/css/style.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="<?php echo base_url() ?>template/frontend/assets/css/responsive.css">
    <!-- modernizr js -->
    <script src="<?php echo base_url() ?>template/frontend/assets/js/modernizr-2.8.3.min.js"></script>
</head>

<body class="home">


<!--Header area start here-->
<header>


    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <div class="header-top-left">
                        <ul>
                            <li><span id="today"></span></li>
                            <li><a href="<?php echo base_url() ?>about">About Us</a></li>
                            <li><a href="<?php echo base_url() ?>copyright">Copyrights</a></li>
                            <li><a href="<?php echo base_url() ?>privacy-policy">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="social-media-area">
                        <nav>
                            <ul>
                                <li><a href="#" class="active"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-middle-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="logo-area">
                        <a href="<?php echo base_url() ?>"><img
                                    src="<?php echo base_url() ?>template/frontend/assets/images/logo.png"
                                    alt="logo"></a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="right-banner">
                        <img src="<?php echo base_url() ?>template/frontend/assets/images/add/1.png" alt="add image">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="header-bottom-area" id="sticky">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                    <div class="navbar-header">
                        <div class="col-sm-8 col-xs-8 padding-null">
                            <button class="navbar-toggle" type="button" data-toggle="collapse"
                                    data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="col-sm-4 col-xs-4 hidden-desktop text-right search">
                            <a href="#search-mobile" data-toggle="collapse" class="search-icon"><i class="fa fa-search"
                                                                                                   aria-hidden="true"></i></a>
                            <div id="search-mobile" class="collapse search-box">
                                <input type="text" class="form-control" placeholder="Search...">
                            </div>
                        </div>
                    </div>
                    <div class="main-menu navbar-collapse collapse">
                        <nav>
                            <ul>
                                <li><a href="<?php echo base_url() ?>"> হোম</a></li>
                                <?php
                                $datas = $this->Fetch_frontend_data_model->view_menu();
                                foreach ($datas as $data):
                                ?>
                                <li><a href="<?php echo base_url() .'sports/'. $data->id .'/'. seoUrl($data->name); ?>"><?php echo $data->name; ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-hidden col-xs-hidden text-right search hidden-mobile">
                    <a href="#search" data-toggle="collapse" class="search-icon"><i class="fa fa-search"
                                                                                    aria-hidden="true"></i></a>
                    <div id="search" class="collapse search-box">
                        <input type="text" class="form-control" placeholder="Search...">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ticker-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-0">
                    <div class="wrapper">
                        <!-- News Slider -->
                        <div class="ticker marg-botm">
                            <div class="ticker-wrap">
                                <!-- News Slider Title -->
                                <div class="ticker-head up-case backg-colr col-md-2"> সর্বশেষ  <i
                                            class="fa fa-angle-double-right" aria-hidden="true"></i></div>
                                <div class="tickers col-md-10">
                                    <div id="top-news-slider" class="owl-carousel ">
                                        <?php
                                        $datas = $this->Fetch_frontend_data_model->view_latest_news();
                                        foreach ($datas as $data):
                                            ?>
                                            <!--Latest News Start Here-->
                                            <div class="item latest_news_item">
                                                <a href="<?php echo base_url() .'single/'. $data->id .'/'. seoUrl($data->title); ?>"> <img src="<?php echo base_url()
                                                    ?>upload/news/<?php echo $data->img; ?>" alt="<?php echo $data->title; ?>">
                                                    <span><?php echo $data->title; ?> </span></a>
                                            </div>
                                            <!--Latest News End Here-->
                                        <?php endforeach; ?>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End News Slider -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--Header area end here-->

