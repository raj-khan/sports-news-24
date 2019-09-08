<!-- Slider Section Start Here -->
<?php  $datas = $this->Fetch_frontend_data_model->view_main_Slider_news();
if(!empty($datas)){
    ?>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 padding-0">
            <div class="slider-area">
                <div class="bend niceties preview-2">
                    <div id="ensign-nivoslider" class="slides">

                         <?php
                         $x = 1;
                        foreach ($datas as $data):
                            ?>
                            <!--Slider News Item Start-->
                            <img src="<?php echo base_url() ?>upload/news/<?php echo $data->img; ?>" alt=""
                                 title="#slider-direction-<?php echo $x; ?>"/>
                            <!--Slider News Item End-->
                            <?php $x++; endforeach; ?>
                    </div>

                    <?php
                    $datas = $this->Fetch_frontend_data_model->view_main_Slider_news();
                    $x = 1;
                    foreach ($datas as $data):
                        $mainCategories = $this->Fetch_frontend_data_model->find_main_category($data->category_id);
                        ?>
                        <!--Slider News Item Start-->
                        <div id="slider-direction-<?php echo $x; ?>" class="slider-direction">
                            <div class="slider-content t-cn s-tb slider-<?php echo $x; ?>">
                                <div class="title-container s-tb-c">
                                    <div class="slider-botton">
                                        <ul>
                                            <li>
                                                <a class="cat-link" href="#"><?php echo $mainCategories->name; ?></a>
                                                <span class="date">
                                                    <i class="fa fa-calendar-check-o"
                                                       aria-hidden="true"></i><?php $date = $data->created_at;
                                                    echo date("d-M-Y", strtotime($date)); ?></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <h1 class="title1"><a href="<?php echo base_url() .'single/'. $data->id .'/'. seoUrl($data->title); ?>"> <?php echo $data->title; ?></a></h1>
                                    <div class="title2"><?php
                                        $mainNews = strip_tags(html_entity_decode($data->news));
                                        $length = strlen($mainNews);
                                        if ($length >150) {
                                            $mainNews = substr($mainNews, 0, 149);
                                            echo $mainNews;
                                        } else {
                                            echo $mainNews;
                                        }
                                        ?>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <!--Slider News Item End -->
                        <?php $x++; endforeach; ?>

                </div>
            </div>
        </div>
        <!-- Slider Area End Here-->


        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 paddimg-left-none">
            <div class="slider-right">
                <ul>

                    <?php
                    $datas = $this->Fetch_frontend_data_model->view_sidebar_Slider_news();
                    foreach ($datas as $data):
                        $mainCategories = $this->Fetch_frontend_data_model->find_main_category($data->category_id);
                        ?>
                        <!--Slider-right tem Start-->
                        <li>
                            <div class="right-content">
                                <span class="category"><a class="cat-link"
                                                          href="#"><?php echo $mainCategories->name; ?></a></span>
                                <span class="date"><i class="fa fa-calendar-check-o"
                                                      aria-hidden="true"> </i><?php $date = $data->created_at;
                                    echo date("d-M-Y", strtotime($date)); ?></span>
                                <h3><a href="<?php echo base_url() .'single/'. $data->id .'/'. seoUrl($data->title); ?>"><?php echo $data->title; ?></a></h3>
                            </div>
                            <div class="right-image">
                                <a href="<?php echo base_url() .'single/'. $data->id .'/'. seoUrl($data->title); ?>"><img class="img-responsive" src="<?php echo base_url() ?>upload/news/<?php echo $data->img; ?>" alt="sidebar image"> </a>
                            </div>
                        </li>
                        <!--Slider-right tem Start-->
                    <?php endforeach; ?>

                </ul>
            </div>
        </div>
    </div>
</div>
<?php }else{ echo '<h1 class="text-center text-danger">Sorry! No News Available </h1>';} ?>
<!-- Slider Section end Here -->


<!-- All News Section Start Here -->
<?php $latest_news_first_item = $this->Fetch_frontend_data_model->view_latest_news_first_item(); ?>
<?php
if(!empty($latest_news_first_item)){
?>
<div class="all-news-area">
    <div class="container">
        <!-- latest news Start Here -->
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 tab-home">
                <ul class="nav nav-tabs">
                    <li class="title-bg"> সাম্প্রতিক খবর</li>

                </ul>
                <div class="tab-content">

                    <!--Tab Item Start Here--->
                    <div id="" class="tab-pane fade in active">


                        <!--Latest News Fast Item Start Here-->
                        <div class="tab-top-content">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 paddimg-right-none latest_news_fast_item">
                                    <a href="<?php echo base_url() .'single/'. $data->id .'/'. seoUrl($data->title); ?>"><img class="img-responsive" src="<?php echo base_url() ?>upload/news/<?php echo $latest_news_first_item->img; ?>" alt="sidebar image"></a>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 last-col">
                                    <span class="date"><a href="#"><i class="fa fa-calendar-check-o"
                                                                      aria-hidden="true"></i> <?php $date = $latest_news_first_item->created_at;
                                            echo date("d-M-Y", strtotime($date)); ?></a></span>
                                    <h3><a href="<?php echo base_url() .'single/'. $data->id .'/'. seoUrl($data->title); ?>"><?php echo $latest_news_first_item->title; ?></a></h3>

                                    <p><?php
                                        $mainNews = strip_tags(html_entity_decode($latest_news_first_item->news));
                                        $length = strlen($mainNews);
                                        if ($length >100) {
                                            $mainNews = substr($mainNews, 0, 99);
                                            echo $mainNews;
                                        } else {
                                            echo $mainNews;
                                        }

                                    ?></p>
                                    <a href="<?php echo base_url() .'single/'. $data->id .'/'. seoUrl($data->title); ?>" class="read-more hvr-bounce-to-right">বিস্তারিত</a>
                                </div>
                            </div>
                        </div>
                        <!--Latest News Fast Item End Here-->


                        <div class="tab-bottom-content">
                            <div class="row">
                                <?php
                                $datas = $this->Fetch_frontend_data_model->view_latest_news_bottom_item();
                                foreach ($datas as $data):
                                    ?>
                                    <!--====Latest News Bottom Item Start Here====-->
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 tab-area">
                                        <div class="col-sm-12 col-xs-3 img-tab">
                                            <a href="<?php echo base_url() .'single/'. $data->id .'/'. seoUrl($data->title); ?>"><img
                                                        src="<?php echo base_url() ?>upload/news/<?php echo $data->img; ?>"
                                                        alt="News image"></a>
                                        </div>
                                        <div class="col-sm-12 col-xs-9 img-content">
                                            <span class="date"><i class="fa fa-calendar-check-o"
                                                                  aria-hidden="true"> </i><?php $date = $data->created_at;
                                                echo date("d-M-Y", strtotime($date)); ?></span>
                                            <h4><a href="<?php echo base_url() .'single/'. $data->id .'/'. seoUrl($data->title); ?>"><?php echo $data->title; ?></a></h4>
                                        </div>
                                    </div>
                                    <!--====Latest News Bottom Item End Here====-->
                                <?php endforeach; ?>

                            </div>
                        </div>
                    </div>
                    <!--Tab Item End Here--->
                </div>


                <!-- Trending news  here-->
                <div class="trending-news separator-large">
                    <div class="row">
                        <div class="view-area">
                            <div class="col-sm-8">
                                <h3 class="title-bg">শীর্ষ খবর</h3>
                            </div>

                        </div>
                        <?php $trending_news_first_item = $this->Fetch_frontend_data_model->view_trending_news_first_item(); ?>

                        <!--Trending News Large Item Start-->
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="list-col trending_news_fast_item">
                                <a href="<?php echo base_url() .'single/'. $data->id .'/'. seoUrl($data->title); ?>"> <img
                                            src="<?php echo base_url() ?>upload/news/<?php echo $trending_news_first_item->img; ?>"
                                            alt="" title="Trending image"/></a>
                                <div class="dsc">
                                    <span class="date"> <i class="fa fa-calendar-check-o"
                                                           aria-hidden="true"></i><?php $date = $trending_news_first_item->created_at;
                                        echo date("d-M-Y", strtotime($date)); ?> </span>
                                    <h3><a href="<?php echo base_url() .'single/'. $data->id .'/'. seoUrl($data->title); ?>"><?php echo $trending_news_first_item->title; ?></a></h3>
                                    <p>
                                        <?php
                                        $mainNews = strip_tags(html_entity_decode($trending_news_first_item->news));
                                        $length = strlen($mainNews);
                                        if ($length >100) {
                                            $mainNews = substr($mainNews, 0, 99);
                                            echo $mainNews;
                                        } else {
                                            echo $mainNews;
                                        }
                                        ?></p>
                                </div>
                            </div>
                        </div>
                        <!--Trending News Large Item End-->


                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <ul class="news-post">
                                <?php
                                $datas = $this->Fetch_frontend_data_model->view_trending_news_bottom_item();
                                foreach ($datas as $data):
                                    ?>
                                    <!--Trending News Small Item Start-->
                                    <li>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content">
                                                <div class="item-post">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-4 col-sm-3 col-xs-3 paddimg-right-none trending_news_bottom_item">
                                                            <a href="<?php echo base_url() .'single/'. $data->id .'/'. seoUrl($data->title); ?>"> <img
                                                                        src="<?php echo base_url() ?>upload/news/<?php echo $data->img; ?>"
                                                                        alt="" title="Trending image"></a>
                                                        </div>
                                                        <div class="col-lg-8 col-md-8 col-sm-9 col-xs-9">
                                                            <h4><a href="<?php echo base_url() .'single/'. $data->id .'/'. seoUrl($data->title); ?>"><?php echo $data->title; ?> </a></h4>
                                                            <span class="date"><i class="fa fa-calendar-check-o"
                                                                                  aria-hidden="true"></i> <?php $date = $data->created_at;
                                                                echo date("d-M-Y", strtotime($date)); ?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <!--Trending News Small Item End-->
                                <?php endforeach; ?>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>


            <!--Sidebar Start Here -->
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 paddimg-left-none sidebar-latest">
                <!--Like Box Start Here -->
                <div class="like-box">
                    <ul>
                        <li>
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i>
                            </a><span>210,956 <br/>likes</span>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> </a><span>350,580 <br/>followers</span>
                        </li>
                        <li class="last">
                            <a href="#"><i class="fa fa-rss" aria-hidden="true"></i> </a><span>210,956 <br/>subscribers</span>
                        </li>
                    </ul>
                </div>
                <!--Like Box End Here -->

                <!--Add Start Here -->
                <div class="add-section">
                    <img class="img-responsive"  src="<?php echo base_url() ?>template/frontend/assets/images/add/2.jpg" alt="add image">
                </div>
                <!--Add Box End Here -->


                <!--popular Post Start Here -->
                <div class="sidebar popular">
                    <h3 class="title-bg">জনপ্রিয় খবর </h3>
                    <ul>
                        <li>
                            <?php $popular_news_first_item = $this->Fetch_frontend_data_model->view_popular_news_first_item();
                            $mainCategories = $this->Fetch_frontend_data_model->find_main_category($data->category_id);?>
                            <a href="#" class="category-btn hvr-bounce-to-right"><?php echo $mainCategories->name; ?></a>
                            <div class="post-image popular_news_fast_item"><img src="<?php echo base_url() ?>upload/news/<?php  echo $popular_news_first_item->img; ?>" class="img-responsive"  alt="<?php  echo $popular_news_first_item->title; ?>"></div>
                            <div class="content">
                                <h4>
                                    <a href="<?php echo base_url() .'single/'. $data->id .'/'. seoUrl($data->title); ?>"><?php  echo $popular_news_first_item->title; ?></a>
                                </h4>
                                <span class="date">
                                        <i class="fa fa-calendar-check-o" aria-hidden="true"></i> <?php $date = $popular_news_first_item->created_at;
                                    echo date("d-M-Y", strtotime($date)); ?>
                                    </span>
                            </div>
                        </li>
                    </ul>
                </div>


                <div class="hot-news popular-related">
                    <ul class="news-post">

                        <?php
                        $datas = $this->Fetch_frontend_data_model->view_popular_news_bottom_item();
                        foreach ($datas as $data):
                        ?>
                        <li>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content">
                                    <div class="item-post">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-3 paddimg-right-none popular_news_bottom_item">
                                                <img src="<?php echo base_url() ?>upload/news/<?php echo $data->img; ?>" class="img-responsive" alt="" title="News image">
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-9">
                                                <h4><a href="<?php echo base_url() .'single/'. $data->id .'/'. seoUrl($data->title); ?>"> <?php echo $data->title; ?></a></h4>
                                                <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> <?php $date = $data->created_at;
                                                    echo date("d-M-Y", strtotime($date)); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <?php endforeach; ?>


                    </ul>
                </div>
                <!--popular Post End Here -->

            </div>
        </div>
    </div>
</div>
<?php } ?>


