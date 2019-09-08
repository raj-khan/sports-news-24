
<!-- Footer Area Section Start Here -->
<div class="add-section separator-large2">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<img src="<?php echo base_url() ?>template/frontend/assets/images/footer-top.png" alt="footer">
			</div>
		</div>
	</div>
</div>
<footer>
	<div class="footer-top-area">
		<div class="container">
			<div class="row">
				<!-- Footer About Section Start Here -->
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
					<div class="single-footer footer-one">
						<h3>সম্পাদকীয়</h3>
						<div class="footer-logo"><img src="<?php echo base_url() ?>template/frontend/assets/images/logo.png" alt="footer-logo"></div>
						<p>Your source for the Sports news.    Visit our main page for more </p>
						<p>We're social, connect with us: </p>
						<div class="footer-social-media-area">
							<nav>
								<ul>
									<!-- Facebook Icon Here -->
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<!-- Google Icon Here -->
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
									<!-- Twitter Icon Here -->
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<!-- Vimeo Icon Here -->
									<li><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
									<!-- Pinterest Icon Here -->
									<li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
				<!-- Footer About Section End Here -->

				<!-- Footer Popular Post Section Start Here -->
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
					<div class="single-footer footer-two">
						<h3>জনপ্রিয় খবর </h3>
						<nav>
							<ul>
                                <?php
                                $datas = $this->Fetch_frontend_data_model->view_popular_news_bottom_item();
                                foreach ($datas as $data):
                                    ?>
                                    <li>
                                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-4 footer_news">
                                            <a href="<?php echo base_url() .'single/'. $data->id .'/'. seoUrl($data->title); ?>"><img src="<?php echo base_url() ?>upload/news/<?php echo $data->img; ?>" alt="post photo"></a>
                                        </div>
                                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-8">
                                            <p><a href="<?php echo base_url() .'single/'. $data->id .'/'. seoUrl($data->title); ?>"><?php echo $data->title; ?></a></p>
                                            <span><i class="fa fa-calendar-check-o" aria-hidden="true"> </i> <?php $date = $data->created_at;
                                                echo date("d-M-Y", strtotime($date)); ?></span>
                                        </div>
                                    </li>
                                <?php endforeach; ?>
							</ul>
						</nav>
					</div>
				</div>
				<!-- Footer Popular Post Section End Here -->

				<!-- Footer Recent Post Section Start Here -->
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
					<div class="single-footer footer-two">
						<h3>সাম্প্রতিক খবর</h3>
						<nav>
							<ul>
                                <?php
                                $datas = $this->Fetch_frontend_data_model->view_recent_news();
                                foreach ($datas as $data):
                                ?>
								<li>
									<div class="col-lg-5 col-md-5 col-sm-5 col-xs-4 footer_news">
										<a href="<?php echo base_url() .'single/'. $data->id .'/'. seoUrl($data->title); ?>"><img src="<?php echo base_url() ?>upload/news/<?php echo $data->img; ?>" alt="post photo"></a>
									</div>
									<div class="col-lg-7 col-md-7 col-sm-7 col-xs-8">
										<p><a href="<?php echo base_url() .'single/'. $data->id .'/'. seoUrl($data->title); ?>"><?php echo $data->title; ?></a></p>
										<span><i class="fa fa-calendar-check-o" aria-hidden="true"> </i> <?php $date = $data->created_at;
                                            echo date("d-M-Y", strtotime($date)); ?></span>
									</div>
								</li>
                                <?php endforeach; ?>


							</ul>
						</nav>
					</div>
				</div>
				<!-- Footer Recent Post Section End Here -->
			</div>
		</div>
	</div>

	<!-- Footer Copyright Area Start Here -->
	<div class="footer-bottom-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="footer-bottom">
						<p> &copy; Copyrights <?php echo date("Y"); ?>. <a href="http://raajkhan.com/">Raj Khan</a> 
							All  rights reserved.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer Copyright Area End Here -->
</footer>

<!-- Start scrollUp  -->
<div id="return-to-top">
	<span>Top</span>
</div>
<!-- End scrollUp  -->

<!-- Footer Area Section End Here -->

<!-- all js here -->
<script src="<?php echo base_url() ?>template/frontend/assets/js/jquery.min.js"></script>
<!-- jquery latest version -->
<script src="<?php echo base_url() ?>template/frontend/assets/js/jquery.min.js"></script>
<!-- jquery-ui js -->
<script src="<?php echo base_url() ?>template/frontend/assets/js/jquery-ui.min.js"></script>
<!-- bootstrap js -->
<script src="<?php echo base_url() ?>template/frontend/assets/js/bootstrap.min.js"></script>
<!-- meanmenu js -->
<script src="<?php echo base_url() ?>template/frontend/assets/js/jquery.meanmenu.js"></script>
<!-- wow js -->
<script src="<?php echo base_url() ?>template/frontend/assets/js/wow.min.js"></script>
<!-- owl.carousel js -->
<script src="<?php echo base_url() ?>template/frontend/assets/js/owl.carousel.min.js"></script>
<!-- magnific-popup js -->
<script src="<?php echo base_url() ?>template/frontend/assets/js/jquery.magnific-popup.js"></script>

<!-- jquery.counterup js -->
<script src="<?php echo base_url() ?>template/frontend/assets/js/jquery.counterup.min.js"></script>
<script src="<?php echo base_url() ?>template/frontend/assets/js/waypoints.min.js"></script>
<!-- jquery light box -->
<script src="<?php echo base_url() ?>template/frontend/assets/js/lightbox.min.js"></script>
<!-- Nivo slider js -->
<script src="<?php echo base_url() ?>template/frontend/assets/inc/custom-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>template/frontend/assets/inc/custom-slider/home.js" type="text/javascript"></script>
<!-- main js -->
<script src="<?php echo base_url() ?>template/frontend/assets/js/main.js"></script>
</body>

</html>
