<?php global $zsocer;?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html <?php language_attributes();?>> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="description" content="Free Responsive Html5 Css3 Templates | zerotheme.com">
	<meta name="author" content="www.zerotheme.com">
	
    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
		<script src="js/html5.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
	<![endif]-->
<?php wp_head();?>   
</head>
<body>
<div class="wrap-body">

<!-- Top -->
<div class="top">
	<div class="zerogrid">
		<div class="row">
			<div class="f-left">
			<?php 
				if(is_array($zsocer['top_left'])){
					foreach(  $zsocer['top_left'] as $singleValue){
			?>
				<span><i class="fa <?php echo $singleValue['title']; ?>"></i> <?php echo $singleValue['description']; ?> </span>
			<?php }
				}
			?>	
			</div>
			<div class="f-right">
				<span><?php global $zsocer; echo $zsocer['top_right'] ?></span>
			</div>
		</div>
	</div>
</div>
<!--Header-->
<header>
	<div class="wrap-header zerogrid">
		<div class="row">
			<div id="cssmenu">
				<?php wp_nav_menu(array(
				   	'theme_location'=>'main-menu',
	                'container'    => 'ul',
					'menu_id'      => 'cssmenu',
				   	));
				?>
			</div>
			<a href='<?php echo site_url();?>' class="logo"><img src="<?php global $zsocer; echo $zsocer['site_logo']['url'] ?>" /></a>
		</div>
	</div>
</header>

<!--Container-->
<section id="container" class="home-page">
	<div class="wrap-container clearfix">
		<div id="main-content">
			<section class="content-box box-1 box-style-1"><!--Start Box-->
				<div class="wrap-box">
					<div class="zerogrid">
						<div class="row">
							<div class="col-1-3">
								<div class="wrap-col">
									<div class="sub-title">
										<h2>FEATURED NEWS</h2>
									</div>
									<?php 
										$zsocer_post = null;
										$zsocer_post = new WP_Query(array(
											'post_type'=>'news',
											'posts_per_page'=>-1

										));
										if ($zsocer_post->have_posts() ){
											while ($zsocer_post->have_posts() ){
												$zsocer_post->the_post();
												?>
												<div class="item">
													<?php the_post_thumbnail(); ?>
													<div class="item-content">
														<a href="single.html"><h3><?php the_title();?></h3></a>
														<div class="info">Posted on <?php the_date();?> in: <a href="#">Featured</a>, <a href="<?php the_permalink();?>">News</a></div>
														<p><?php echo wp_trim_words(get_the_content(),100,'....');?></p>
														<a href="<?php the_permalink();?>">Read More</a>
													</div>
												</div>
									<?php }
										} else{
											echo "No Post News";
										}
									?>

								</div>
							</div>
							<div class="col-1-3">
								<div class="wrap-col">
									<div class="sub-title">
										<h2>UPCOMING EVENTS</h2>
									</div>
									<div class="row">
									<?php 
										$zsocer_post = null;
										$zsocer_post = new WP_Query(array(
											'post_type'=>'events',
											'posts_per_page'=>-1

										));
										if ($zsocer_post->have_posts() ){
											while ($zsocer_post->have_posts() ){
												$zsocer_post->the_post();
												?>
												<div class="item">
													<div class="item-content">
														<a href="single.html"><h3><?php the_title();?></h3></a>
														<div class="info">Posted on <?php the_date();?> in: <a href="<?php the_permalink();?>">Featured</a>, <a href="#">News</a></div>
														<p><?php echo wp_trim_words(get_the_content(),30,'....');?></p>
														<a href="<?php the_permalink();?>">Read More</a>
													</div>
												</div>
										<?php }
										} else{
											echo "No Post Event";
										}
									?>
									</div>
									
								</div>
							</div>
							<div class="col-1-3">
								<div class="wrap-col">
									<div class="sub-title">
										<h2>UPCOMING GAME</h2>
									</div>
									<?php 
										$zsocer_post = null;
										$zsocer_post = new WP_Query(array(
											'post_type'=>'games',
											'posts_per_page'=>-1

										));
										if ($zsocer_post->have_posts() ){
											while ($zsocer_post->have_posts() ){
												$zsocer_post->the_post();
												$game_caption = get_post_meta(get_the_ID(),'game_caption', true);
												$ticket_caption = get_post_meta(get_the_ID(),'ticket_caption', true);
												?>
												<h2 style="font-size: 35px;line-height: 1.3;margin-bottom: 10px;"><?php the_title();?></h2>
												<?php the_post_thumbnail(); ?>
												<p><?php echo wp_trim_words(get_the_content(),50,'....');?></p>
												<a href="<?php the_permalink();?>"><?php echo $game_caption;?></a><br>
												<a href="<?php the_permalink();?>" class="button bt1"><?php echo $ticket_caption;?></a>
									<?php }
										} else{
											echo "No Post Game";
										}
									?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="content-box box-2 box-style-3"><!--Start Box-->
				<div class="wrap-box">
					<div class="zerogrid">
						<div class="title">
							<h2><span>Our</span> Team</h2>
						</div>	
						<div class="row">
							<div class="col-1-4">
								<div class="wrap-col">
									<div class="item t-center">
										<div class="item-container">
											<a href="single.html">
												<div class="item-caption">
													<div class="item-caption-inner">
														<div class="item-caption-inner1">
															<span class="user-social"><i class="fa fa-facebook"></i><i class="fa fa-twitter"></i><i class="fa fa-google-plus"></i><i class="fa fa-pinterest"></i></span>
														</div>
													</div>
												</div>
												<img src="<?php echo get_template_directory_uri();?>/images/user1.jpg" />
											</a>
										</div>
										<div class="item-content">
											<a href="single.html"><h3>LAMBORGHINI GALLARDO</h3></a>
											<p>Defender</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-1-4">
								<div class="wrap-col">
									<div class="item t-center">
										<div class="item-container">
											<a href="single.html">
												<div class="item-caption">
													<div class="item-caption-inner">
														<div class="item-caption-inner1">
															<span class="user-social"><i class="fa fa-facebook"></i><i class="fa fa-twitter"></i><i class="fa fa-google-plus"></i><i class="fa fa-pinterest"></i></span>
														</div>
													</div>
												</div>
												<img src="<?php echo get_template_directory_uri();?>/images/user2.jpg" />
											</a>
										</div>
										<div class="item-content">
											<a href="single.html"><h3>LAMBORGHINI GALLARDO</h3></a>
											<p>Midfielder</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-1-4">
								<div class="wrap-col">
									<div class="item t-center">
										<div class="item-container">
											<a href="single.html">
												<div class="item-caption">
													<div class="item-caption-inner">
														<div class="item-caption-inner1">
															<span class="user-social"><i class="fa fa-facebook"></i><i class="fa fa-twitter"></i><i class="fa fa-google-plus"></i><i class="fa fa-pinterest"></i></span>
														</div>
													</div>
												</div>
												<img src="<?php echo get_template_directory_uri();?>/images/user3.jpg" />
											</a>
										</div>
										<div class="item-content">
											<a href="single.html"><h3>LAMBORGHINI GALLARDO</h3></a>
											<p>Goalkeeper</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-1-4">
								<div class="wrap-col">
									<div class="item t-center">
										<div class="item-container">
											<a href="single.html">
												<div class="item-caption">
													<div class="item-caption-inner">
														<div class="item-caption-inner1">
															<span class="user-social"><i class="fa fa-facebook"></i><i class="fa fa-twitter"></i><i class="fa fa-google-plus"></i><i class="fa fa-pinterest"></i></span>
														</div>
													</div>
												</div>
												<img src="<?php echo get_template_directory_uri();?>/images/user4.jpg" />
											</a>
										</div>
										<div class="item-content">
											<a href="single.html"><h3>LAMBORGHINI GALLARDO</h3></a>
											<p>Sweeper</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="content-box box-3 box-style-2"><!--Start Box-->
				<div class="wrap-box t-center">
					<div class="zerogrid">
						<div class="title">
							<h2>WELCOME <span>To Our Website</span></h2>
						</div>	
						<strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</strong>
						<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo</p>
						<a href="#" class="button bt1">Read More</a>
					</div>
				</div>
			</section>
			<section class="content-box box-4 box-style-1"><!--Start Box-->
				<div class="wrap-box" >
					<div class="zerogrid">
						<div class="row">
							<div class="col-1-4">
								<div class="wrap-col">
									<div class="sub-title">
										<h2>ADVERTISING</h2>
									</div>
									<div class="item">
										<img src="<?php echo get_template_directory_uri();?>/images/banner.jpg" />
									</div>
									<div class="item">
										<img src="<?php echo get_template_directory_uri();?>/images/banner2.jpg" />
									</div>
								</div>
							</div>
							<div class="col-2-4">
								<div class="wrap-col">
									<div class="sub-title">
										<h2>UPCOMING EVENTS</h2>
									</div>
									<div class="row">
										<div class="item">
											<div class="col-1-3">
												<div class="item-date-box">
													<div class="item-caption-inner">
														<div class="item-caption-inner1">
															<h3>30</h3>
															<span>DEC,2015</span>
														</div>
													</div>
												</div>
											</div>
											<div class="col-2-3">
												<div class="item-content">
													<a href="single.html"><h3>Nominated Club Of The Year</h3></a>
													<div class="info">Posted on June 22, 2010 in: <a href="#">Featured</a>, <a href="#">News</a></div>
													<p>Don't walk through life just playing football. Don't walk through life just being an athlete. Athletics will fade. Character and integrity are the...</p>
												</div>
											</div>
											<div class="clear"></div>
										</div>
									</div>
									<div class="row">
										<div class="item">
											<div class="col-1-3">
												<div class="item-date-box">
													<div class="item-caption-inner">
														<div class="item-caption-inner1">
															<h3>31</h3>
															<span>DEC,2015</span>
														</div>
													</div>
												</div>
											</div>
											<div class="col-2-3">
												<div class="item-content">
													<a href="single.html"><h3>Nominated Club Of The Year</h3></a>
													<div class="info">Posted on June 22, 2010 in: <a href="#">Featured</a>, <a href="#">News</a></div>
													<p>Don't walk through life just playing football. Don't walk through life just being an athlete. Athletics will fade. Character and integrity are the...</p>
												</div>
											</div>
											<div class="clear"></div>
										</div>
									</div>
									<div class="row">
										<div class="item">
											<div class="col-1-3">
												<div class="item-date-box">
													<div class="item-caption-inner">
														<div class="item-caption-inner1">
															<h3>18</h3>
															<span>jun,2016</span>
														</div>
													</div>
												</div>
											</div>
											<div class="col-2-3">
												<div class="item-content">
													<a href="single.html"><h3>Nominated Club Of The Year</h3></a>
													<div class="info">Posted on June 22, 2010 in: <a href="#">Featured</a>, <a href="#">News</a></div>
													<p>Don't walk through life just playing football. Don't walk through life just being an athlete. Athletics will fade. Character and integrity are the...</p>
												</div>
											</div>
											<div class="clear"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-1-4">
								<div class="wrap-col">
									<div class="sub-title">
										<h2>LASTEST POST</h2>
									</div>
									<div class="item">
										<img src="<?php echo get_template_directory_uri();?>/images/2.jpg" />
										<div class="item-content">
											<a href="single.html"><h3>Nominated Club Of The Year</h3></a>
											<p>Black alloys, Sat Nav, Bluetooth, 4 seats, Ceramic Brakes...</p>
										</div>
									</div>
									<div class="item">
										<img src="<?php echo get_template_directory_uri();?>/images/3.jpg" />
										<div class="item-content">
											<a href="single.html"><h3>Nominated Club Of The Year</h3></a>
											<p>Black alloys, Sat Nav, Bluetooth, 4 seats, Ceramic Brakes...</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
</section>

<?php get_footer();?>
<?php wp_footer();?>