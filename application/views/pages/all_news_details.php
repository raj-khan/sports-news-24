<!-- Blog Single Start Here -->
<div class="single-blog-page-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="single-image news_details_single">
                    <img src="<?php echo base_url() ?>upload/news/<?php echo $news_details->img ?>" alt="Blog single photo">
                </div>
                <h3><a href="#"><?php echo $news_details->title ?></a></h3>
                <p><?php echo $news_details->news ?></p>





                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <ul class="next-pre-section">
                            <?php if(isset($prevNews) && !empty($prevNews)) {
                            ?>
                            <li class="left-arrow"><a href="<?php echo base_url() .'single/'. $prevNews->id .'/'. seoUrl($prevNews->title); ?>"><i class="fa fa-angle-left" aria-hidden="true"></i> Previous News</a></li>
                            <?php }else{echo '';} ?>


                            <?php if(isset($nextNews) && !empty($nextNews)) {
                            ?>
                            <li class="right-arrow"><a href="<?php echo base_url() .'single/'. $nextNews->id .'/'. seoUrl($nextNews->title); ?>">Next News <i class="fa fa-angle-right" aria-hidden="true"></i> </a></li>
                            <?php }else{echo '';} ?>


                        </ul>
                    </div>
                </div>


                <div class="like-section">
                    <h3 class="title-bg">YOU MIGHT ALSO LIKE</h3>
                    <div class="row">

                        <?php
                        $datas = $this->Fetch_frontend_data_model->view_also_like_this();
                        foreach ($datas as $data):
                        ?>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="popular-post-img also_like_post">
                                <a href="#"><img src="<?php echo base_url() ?>upload/news/<?php echo $data->img; ?>" alt="Blog single photo"></a>
                            </div>
                            <h3>
                                <a href="<?php echo base_url() .'single/'. $data->id .'/'. seoUrl($data->title); ?>"><?php echo $data->title; ?></a>
                            </h3>
                            <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> <?php $date = $data->created_at;
                                echo date("d-M-Y", strtotime($date)); ?></span>
                        </div>
                        <?php endforeach; ?>


                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="sidebar-area">

                    <!--Recent Stories-->
                    <div class="side_bar_custom_post">
                        <div class="gallery_header_title">
                            <h2>RECENT STORIES</h2>
                        </div>
                        <div class="side_bar_news_custom">

                            <?php
                            $datas = $this->Fetch_frontend_data_model->view_recent_stories();
                            foreach ($datas as $data):
                            ?>
                            <!--Single Item-->
                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 news_by_only_title_single">
                                <div class="separate_from_other_news"></div>
                                <h4><a href="<?php echo base_url() .'single/'. $data->id .'/'. seoUrl($data->title); ?>"><?php echo $data->title; ?></a></h4>
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
                            <h2>MOST READ</h2>
                        </div>
                        <div class="side_bar_news_custom">


                            <?php
                            $datas = $this->Fetch_frontend_data_model->view_most_read_stories();
                            foreach ($datas as $data):
                                ?>
                            <!--Single Item-->
                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 news_by_only_title_single">
                                <div class="separate_from_other_news"></div>
                                <h4><a href="<?php echo base_url() .'single/'. $data->id .'/'. seoUrl($data->title); ?>"><?php echo $data->title; ?></a></h4>
                            </div>
                            <?php endforeach; ?>


                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog Details Page end here -->