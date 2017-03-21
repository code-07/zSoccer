<?php get_header();?>


<div class="bg-white">
	<div class="zerogrid">
		<!-- Slideshow -->
		<div class="callbacks_container">
			<ul class="rslides" id="slider">
				<li>
					<img src="<?php echo get_template_directory_uri();?>/images/slideshow-image1.jpg" alt="">
					<div class="caption">
						<h1>Welcome to MyTeam</h1>
						<span >Lorem ipsum dolor sit amet</span>
					</div>
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri();?>/images/slideshow-image2.jpg" alt="">
					<div class="caption">
						<h1>Welcome to MyTeam</h1>
						<span >Lorem ipsum dolor sit amet</span>
					</div>
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri();?>/images/slideshow-image3.jpg" alt="">
					<div class="caption">
						<h1>Welcome to MyTeam</h1>
						<span >Lorem ipsum dolor sit amet</span>
					</div>
				</li>
			</ul>
		</div>
		<div class="clear"></div>
	</div>
</div>

<!--////////////////////////////////////Container-->
<section id="container" class="sub-page">
	<div class="wrap-container zerogrid">
		<div id="main-content" class="col-2-3">
			<div class="wrap-col">
				<div class="wrap-content">
					<?php 
						if (have_posts()){
							while (have_posts() ){
								the_post();?>
									<article>
										<div class="art-header">
											<?php the_post_thumbnail(); ?>
										</div>
										<div class="art-content">
											<a href="<?php the_permalink();?>"><h3><?php the_title();?></h3></a>
											<div class="info">Posted on <?php the_date();?> in: <a href="<?php the_permalink();?>"><?php comments_number();?></a></div>
											<p><?php the_content();?></p>
											
										</div>
									</article>
								<?php }
						}else{
							?>
							<article>
								<div class="art-header">
									
									<img src="http://placehold.it/780x330" />
								</div>
								<div class="art-content">
									<h3>Write Your Article Title </h3>
									<div class="info">Posted on Date in: Event</div>
									<p>NO Post Here</p>
									
								</div>
							</article>
						<?php 
						}
					?>
					<?php comments_template(); ?>
				</div>
			</div>
		</div>
		
<?php get_sidebar();?>
<?php get_footer();?>
<?php wp_footer();?>  
</body></html>