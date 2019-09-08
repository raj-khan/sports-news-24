
    <!-- Home About Start Here -->
    <div class="home-about-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h2 class="title2">About Us </h2>
                </div>
            </div>

            <?php
            $datas = $this->Fetch_frontend_data_model->viewAbout();
            ?>

            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <p><?php  echo isset($datas->page_content) ? $datas->page_content : '' ?></p>
                </div>

				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="sidebar-area">

						<!--Recent Stories-->
						<div class="side_bar_custom_post">
							<div class="sidebar_news_header_title">
								<h2>RECENT STORIES</h2>
							</div>
							<div class="side_bar_news_custom">
                                <?php
                                $datas = $this->Fetch_frontend_data_model->view_recent_stories_common_page();
                                foreach ($datas as $data):
                                ?>
								<!--Single Item-->
								<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 news_by_only_title_single">
									<div class="separate_from_other_news"></div>
									<h4><a href="<?php echo base_url() .'single/'. $data->id .'/'. seoUrl($data->title); ?>"><?php echo isset($data->title) ? $data->title : '' ?></a></h4>
								</div>
                                <?php endforeach; ?>

							</div>
						</div>


						<div class="add" style="margin-top: 400px;">
							<img src="<?php echo base_url() ?>template/frontend/assets/images/add/2.jpg" alt="Add">
						</div>

						<!--Recent Stories-->
						<div class="side_bar_custom_post" style="margin-top: 50px !important;">
							<div class="sidebar_news_header_title">
								<h2>MOST READ</h2>
							</div>


                            <div class="side_bar_news_custom">
                                <?php
                                $datas = $this->Fetch_frontend_data_model->view_popular_stories_common_page();
                                foreach ($datas as $data):
                                    ?>
                                    <!--Single Item-->
                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 news_by_only_title_single">
                                        <div class="separate_from_other_news"></div>
                                        <h4><a href="<?php echo base_url() .'single/'. $data->id .'/'. seoUrl($data->title); ?>"><?php echo isset($data->title) ? $data->title : '' ?></a></h4>
                                    </div>
                                <?php endforeach; ?>

                            </div>

						</div>



					</div>
				</div>

            </div>
        </div>
    </div>
    <!-- Home About End Here -->

