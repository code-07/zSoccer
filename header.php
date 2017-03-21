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