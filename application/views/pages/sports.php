<!-- Category Page Start Here -->
<div class="blog-page-area gallery-page category-page">
    <div class="container">
        <div class="row">
<?php if(!empty($largeNews)){ ?>
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="sub_news_main_blog">

                        <a href="#">
                            <img src="<?php echo base_url()
                            ?>upload/news/<?php echo $largeNews->img; ?>"
                                 alt="category photo">
                        </a>
                        <h3>
                            <a href="<?php echo base_url() . 'single/' . $largeNews->id . '/' . seoUrl($largeNews->title); ?>"><?php echo $largeNews->title; ?>

                            </a></h3>
                        <p><?php
                            $mainNews = strip_tags(html_entity_decode($largeNews->news));
                            $length = strlen($mainNews);
                            if ($length > 150) {
                                $mainNews = substr($mainNews, 0, 149);
                                echo $mainNews;
                            } else {
                                echo $mainNews;
                            }

                            ?></p>
                    </div>
                </div>

                <!--===================Sub News Star==============-->
                <div class="row">


                    <?php foreach ($commonNews as $common): ?>
                        <!--Single Item-->
                        <div class="col-md-6 col-sm-12 col-lg-6 col-xs-12 single_item_news">
                            <h4>
                                <a href="<?php echo base_url() . 'single/' . $largeNews->id . '/' . seoUrl($largeNews->title); ?>"><?php echo $common->title; ?></a>
                            </h4>
                            <a href="<?php echo base_url() . 'single/' . $largeNews->id . '/' . seoUrl($largeNews->title); ?>"><img
                                        class="img-responsive" src="<?php echo base_url()
                                ?>upload/news/<?php echo $common->img; ?>" alt=""></a>
                            <p><?php
                                $mainNews = strip_tags(html_entity_decode($common->news));
                                $length = strlen($mainNews);
                                if ($length > 150) {
                                    $mainNews = substr($mainNews, 0, 149);
                                    echo $mainNews;
                                } else {
                                    echo $mainNews;
                                }
                                ?> </p>
                        </div>
                    <?php endforeach; ?>


                </div>

                <!--==============Gallery================-->
                <div class="row">
                    <div class="gallery_header_title">
                        <h2>Gallery</h2>
                    </div>
                    <ul>
                        <li>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div id="news-Carousel1" class="carousel carousel-top-category slide"
                                     data-ride="carousel">
                                    <!-- Wrapper for slides -->
                                    <!-- Left and right controls -->
                                    <div class="next-prev">
                                        <a class="left news-control" href="#news-Carousel1" data-slide="prev">
                                            <span class="news-arrow-left"><i class="fa fa-angle-left"
                                                                             aria-hidden="true"></i></span>
                                        </a>
                                        <a class="right news-control" href="#news-Carousel1" data-slide="next">
                                            <span class="news-arrow-right"><i class="fa fa-angle-right"
                                                                              aria-hidden="true"></i></span>
                                        </a>
                                    </div>
                                    <div class="carousel-inner">

                                        <?php $x = 0;
                                        foreach ($gallery as $data): ?>
                                            <!--Item Gallery-->
                                            <div class="item <?php if ($x <= 0) {
                                                echo 'active';
                                            } ?>">
                                                <div class="blog-image">
                                                    <a href="<?php echo base_url() . 'single/' . $data->id . '/' . seoUrl($data->title); ?>">
                                                        <img style="height:  400px; width: 100%;" class="img-responsive"
                                                             src="<?php echo base_url() ?>upload/news/<?php echo $data->img; ?>"
                                                             alt="<?php echo $data->title; ?>">
                                                    </a>
                                                </div>
                                                <div class="dsc gallery_desc_custom">
                                                    <h3>
                                                        <a href="<?php echo base_url() . 'single/' . $data->id . '/' . seoUrl($data->title); ?>"
                                                           style="color: #fff !important;"><?php
                                                            $mainNews = strip_tags(html_entity_decode($data->news));
                                                            $length = strlen($mainNews);
                                                            if ($length > 150) {
                                                                $mainNews = substr($mainNews, 0, 149);
                                                                echo $mainNews;
                                                            } else {
                                                                echo $mainNews;
                                                            }
                                                            ?></a></h3>
                                                    <span class="date"> <i class="fa fa-calendar-check-o"
                                                                           aria-hidden="true"></i> <?php $date = $data->created_at;
                                                        echo date("d-M-Y", strtotime($date)); ?></span>

                                                </div>
                                            </div>
                                            <?php $x++; endforeach; ?>

                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>


                <!--===================Sub News Star After Gallery==============-->
                <div class="row">
                    <div class="col-md-6 news_after_gallery_main">

                        <!--Single Item-->
                        <?php $x = 0;
                        foreach ($showFeatures as $data): ?>
                            <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 single_item_news_after_gallery">
                                <div class="separate_from_other_news"></div>
                                <h4><a href="<?php echo base_url() . 'single/' . $data->id . '/' . seoUrl($data->title); ?>"><?php echo $data->title; ?></a></h4>
                                <a href="<?php echo base_url() . 'single/' . $data->id . '/' . seoUrl($data->title); ?>"><img class="img-responsive" src="<?php echo base_url()
                                    ?>template/frontend/assets/images/category/2
						.jpg" alt=""></a>
                                <p><?php
                                    $mainNews = strip_tags(html_entity_decode($data->news));
                                    $length = strlen($mainNews);
                                    if ($length > 150) {
                                        $mainNews = substr($mainNews, 0, 149);
                                        echo $mainNews;
                                    } else {
                                        echo $mainNews;
                                    }
                                    ?></p>
                            </div>

                            <?php $x++; endforeach; ?>


                    </div>


                    <div class="col-md-6 news_by_only_title">

						<?php $x = 0;
						foreach ($showFeaturesTitle as $data): ?>
                        <!--Single Item-->
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 news_by_only_title_single">
                            <div class="separate_from_other_news"></div>
                            <h4><a href="<?php echo base_url() . 'single/' . $data->id . '/' . seoUrl($data->title); ?>"><?php echo $data->title; ?></a></h4>
                        </div>
							<?php $x++; endforeach; ?>


                    </div>
                </div>
            </div>
            <?php }else{ echo '<h1 class="text-center text-danger">Sorry! No News Available </h1>';} ?>


            <?php if(!empty($recentNews)){ ?>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="sidebar-area">

                    <!--Recent Stories-->
                    <div class="side_bar_custom_post">
                        <div class="gallery_header_title">
                            <h2> সর্বশেষ    খবর </h2>
                        </div>
                        <div class="side_bar_news_custom">
                            <?php foreach ($recentNews as $recent): ?>
                                <!--Single Item-->
                                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 news_by_only_title_single">
                                    <div class="separate_from_other_news"></div>
                                    <h4><a href="<?php echo base_url() . 'single/' . $recent->id . '/' . seoUrl($recent->title); ?>"><?php echo $recent->title; ?></a></h4>
                                </div>
                            <?php endforeach; ?>


                        </div>
                    </div>


                    <div class="add" style="margin-top: 400px;">
                        <img src="<?php echo base_url() ?>template/frontend/assets/images/add/2.jpg" alt="Add">
                    </div>

                    <!--Recent Stories-->
                    <div class="side_bar_custom_post" style="margin-top: 50px !important;">
                        <div class="gallery_header_title">
                            <h2> সর্বাধিক পঠিত </h2>
                        </div>
                        <div class="side_bar_news_custom">
                            <!--Single Item-->

							<?php foreach ($mostReadRandom as $recent): ?>
                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 news_by_only_title_single">
                                <div class="separate_from_other_news"></div>
                                <h4><a href="<?php echo base_url() . 'single/' . $recent->id . '/' . seoUrl($recent->title); ?>"><?php echo $recent->title; ?></a></h4>
                            </div>
							<?php endforeach; ?>



                        </div>
                    </div>


                </div>
            </div>

            <?php }else{ echo '';} ?>
        </div>
    </div>
</div>
