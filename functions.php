<?php

function zSoccer_theme(){
	add_theme_support('title-tag');
	register_nav_menus(array(
			'main-menu'=>'Main Menu'
		));
	add_theme_support('post-thumbnails');
	add_theme_support('html5');
	

}
add_action('after_setup_theme','zSoccer_theme');
function zSoccer_scripts_style() {
	wp_enqueue_style('zerogrid', get_template_directory_uri().'/css/zerogrid.css',null,'v4.4.7','all');
	wp_enqueue_style('zSoccer_style', get_template_directory_uri().'/css/style.css',null,'v4.4.7','all');
	wp_enqueue_style('menu_style', get_template_directory_uri().'/css/menu.css',null,'v4.4.7','all');
	wp_enqueue_style('responsiveslides_style', get_template_directory_uri().'/css/responsiveslides.css',null,'v4.4.7','all');
	wp_enqueue_style('font-awesome_style', get_template_directory_uri().'/font-awesome/css/font-awesome.min.css',null,'v4.4.7','all');
	wp_enqueue_style('style', get_stylesheet_uri());

	//script style
	wp_enqueue_script('jquery',null,'v4.4.7',true);
	wp_enqueue_script('script', get_template_directory_uri().'/js/script.js',null,'v4.4.7',true);	
	wp_enqueue_script('lightbox', get_template_directory_uri().'/js/jquery183.min.js',null,'v4.4.7',true);
	wp_enqueue_script('owlcarousel', get_template_directory_uri().'/js/responsiveslides.min.js',null,'v4.4.7',true);
	wp_enqueue_script('custom', get_template_directory_uri().'/custom.js',null,'v4.4.7',true);


}
add_action('wp_enqueue_scripts','zSoccer_scripts_style');

function zSoccer_custom_post() {
	register_post_type('slider',array(
			'labels'=>array(
				'name'=>'Main Slider',
				'menu_name'=>'Slider Menu',
				'all_items'=>'All Slider',
				'add_new'=>'Add New Slide',
				'add_new_item'=>'Add New Slide Item'
			),
			'public'=>true,
			'supports'=>array(
				'title','thumbnail','page-attributes'
			),
	));
	register_post_type('news',array(
			'labels'=>array(
				'name'=>'Featured News',
				'menu_name'=>'News Menu',
				'all_items'=>'All News',
				'add_new'=>'Add News Post',
				'add_new_item'=>'Add New News Item'
			),
			'public'=>true,
			'supports'=>array(
				'title','thumbnail','editor','page-attributes'
			),
	));
	register_post_type('events',array(
			'labels'=>array(
				'name'=>'Upcomimg Events',
				'menu_name'=>'Event Menu',
				'all_items'=>'All Events',
				'add_new'=>'Add New Event',
				'add_new_item'=>'Add New Event Item'
			),
			'public'=>true,
			'supports'=>array(
				'title','thumbnail','editor','page-attributes'
			),
	));
	register_post_type('games',array(
			'labels'=>array(
				'name'=>'Upcomimg Games',
				'menu_name'=>'Game Menu',
				'all_items'=>'All Games ',
				'add_new'=>'Add New Game',
				'add_new_item'=>'Add New Game Item'
			),
			'public'=>true,
			'supports'=>array(
				'title','thumbnail','editor','page-attributes'
			),
	));

}
add_action('init','zSoccer_custom_post');

include_once('inc/cmb2-custom-field.php');
include_once('inc/custom_shortcode.php');
include_once('inc/custom_widget.php');
include_once('inc/redux-framework-master/redux-framework.php');
include_once('inc/redux-framework-master/sample/barebones-config.php');




