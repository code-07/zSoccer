<!--Footer-->
<?php global $zsocer;?>
<footer>
	<div class="zerogrid top-footer">
		<div class="row">
		<?php 
			if(is_array($zsocer['sponser_slide'])){
				foreach(  $zsocer['sponser_slide'] as $singleValue){
			?>
				<div class="col-1-5">
					<a href="<?php echo $singleValue['url']; ?>"><img src="<?php echo $singleValue['image']; ?>" /></a>
				</div>
			<?php }
			}
		?>
		</div>
	</div>
	<div class="zerogrid wrap-footer">
		<div class="row">
			<div class="col-1-4 col-footer-1">
				<div class="wrap-col">
					<h3><?php global $zsocer; echo $zsocer['about_title'] ?></h3>
					<p><?php global $zsocer; echo $zsocer['about_desc'] ?></p>
					<a href="index.html" class="logo"><img src="<?php global $zsocer; echo $zsocer['footer_logo']['url'] ?>" /></a>
				</div>
			</div>
			<div class="col-1-4 col-footer-2">
				<div class="wrap-col">
					<h3><?php global $zsocer; echo $zsocer['category_title'] ?></h3>
					<ul>
						<?php the_category();?>
					</ul>
				</div>
			</div>
			<div class="col-1-4 col-footer-3">
				<div class="wrap-col">
					<h3><?php global $zsocer; echo $zsocer['photo_title'] ?></h3>
					<div class="row">
						<?php 
							if(is_array($zsocer['footer_photo'])){
							foreach(  $zsocer['footer_photo'] as $singleValue){
						?>
							<div class="col-1-3">
								<div class="wrap-col">
									<a href="<?php echo $singleValue['url']; ?>"><img src="<?php echo $singleValue['image']; ?>" /></a>
								</div>
							</div>
						<?php }
							}
						?>		
					</div>
				</div>
			</div>
			<div class="col-1-4 col-footer-4">
				<div class="wrap-col">
					<h3><?php global $zsocer; echo $zsocer['contact_title'] ?></h3>
					<?php 
						if(is_array($zsocer['contact_slide'])){
						foreach(  $zsocer['contact_slide'] as $singleValue){
						?>
							<span><i class="fa <?php echo $singleValue['title']; ?>"></i> <?php echo $singleValue['description']; ?></span>
					<?php }
						}
					?>
				</div>
			</div>
		</div>
	</div>
</footer>
<div class="copyright">
	<div class="zerogrid wrapper">
		<?php echo $zsocer['footer_copy'] ?>
		<ul class="quick-link f-right">
			<?php echo $zsocer['footer_policy'] ?>
		</ul>
	</div>
</div>

</div>