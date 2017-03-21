<?php get_header();?>

<div class="bg-white">
	<div class="zerogrid">
		<!-- Slideshow -->
		<div class="callbacks_container">
			<ul class="rslides" id="slider">
				<?php 
					$zsocer_post = null;
					$zsocer_post = new WP_Query(array(
						'post_type'=>'slider',
						'posts_per_page'=>-1

					));
					if ($zsocer_post->have_posts() ){
						while ($zsocer_post->have_posts() ){
							$zsocer_post->the_post();
							$slider_caption = get_post_meta(get_the_ID(),'slider_caption', true)
							?>
							<li>
								<?php the_post_thumbnail(); ?>
								<div class="caption">
									<h1><?php the_title();?></h1>
									<span><?php echo $slider_caption;?></span>
								</div>
							</li>
					<?php }
						}else{
					?>
					<li>
						<img src="<?php echo get_template_directory_uri();?>/images/slideshow-image2.jpg" alt="">
						<div class="caption">
							<h1>No Slide Here</h1>
							<span >Put Your Slide Here</span>
						</div>
					</li>
					<?php
					}
				?>
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
											<p><?php echo wp_trim_words(get_the_content(),50,'....');?></p>
											<a class="button button02" href="<?php the_permalink();?>">MORE</a>
										</div>
									</article>
								<?php }
						}else{
							echo "No Post";
						}
					?>
					<?php 
						the_posts_pagination(array(
							'next_text'=>'Next',
							'prev_text'=>'Prev',
							'screen_reader_text'=>' '

						));
					?>
				</div>
			</div>
		</div>
		
<?php get_sidebar();?>
<?php get_footer();?>
<?php wp_footer();?>  
</body></html>