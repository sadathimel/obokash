<?php 


if (site_url() == "http://demo.lwhh.com") {
    define("VERSION", time());
}else{
    define("VERSION",wp_get_theme()->get("Version"));
}

/**
 * after setup theme.
 */

 function obokash_after_setup_theme(){
 	load_theme_textdomain('obokash');
 	add_theme_support( 'post-thumbnails' );
 	add_theme_support('title-tag');
 	add_theme_support( 
 		'html5', 
 		array( 
 			'comment-list', 
 			'comment-form', 
 			'search-form', 
 			'gallery', 
 			'caption', 
 			'style', 
 			'script', 
 		) 
 	);

 	add_theme_support(
			'post-formats',
			array(
				'link',
				'gallery',
				'image',
				'quote',				
				'video',
				'audio',			
			)
		);
 	add_editor_style("/css/editor-style.css");

 	register_nav_menu("topmenu", __("Top Menu", "obokash"));
 }

 add_action( 'after_setup_theme', 'obokash_after_setup_theme');

function obokash_enqueue_scripts() {
	wp_enqueue_style( 'bootstrap', '//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css',null,'3.3.7');
	wp_enqueue_style( 'font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css',null,'4.7.0');
	/*custom css*/
	wp_enqueue_style( 'main-css', get_theme_file_uri( '/css/style.min.css' ), null, '1.0');
	wp_enqueue_style( 'lightblue-min-css', get_theme_file_uri( '/css/lightblue.min.css' ), null, '1.0');
	wp_enqueue_style( 'responsive-min-css', get_theme_file_uri( '/css/responsive.min.css' ), null, '1.0');

	wp_enqueue_style( 'owl-carousel-min', '//cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css',null,'1.3.3');
	wp_enqueue_style( 'owl-theme-min', '//cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css',null,'1.3.3');
	wp_enqueue_style( 'flexslider-min', '//cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.1/flexslider.min.css',null,'2.7.1');
	wp_enqueue_style( 'datepicker-min', '//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.min.css',null,'1.8.0');	
	wp_enqueue_style( 'googleapis', '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i%7CMerriweather:300,300i,400,400i,700,700i,900,900i',null,VERSION);
	wp_enqueue_style( 'jquery-ui-min-css', '//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.3/css/base/jquery-ui.min.css', null, '1.10.3');
	wp_enqueue_style( 'jquery-confirm-min-css', '//cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css', null, '3.3.0');
	wp_enqueue_style( 'select2.min', '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css',null,'4.0.6');
	wp_enqueue_style( 'arrowheadit-min-css', get_theme_file_uri( '/css/arrowheadit.min.css' ), null, '1.0');
	
 	wp_enqueue_style('main-style', get_stylesheet_uri(), null, VERSION);



	wp_enqueue_script('select2-min', '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js', array('jquery'), '4.0.6', true);
	wp_enqueue_script('twitter-bootstrap', '//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'), '3.3.7', true);
	// wp_enqueue_script('jquery-ui', '//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js', array('jquery'), '1.10.3', true);
	wp_enqueue_script('customSelect-min-js', '//cdnjs.cloudflare.com/ajax/libs/jquery.customSelect/0.5.1/jquery.customSelect.min.js', array('jquery'), '0.5.1', true);
	wp_enqueue_script('jquery-confirm-min-js', '//cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js', array('jquery'), '3.3.0', true);

	wp_enqueue_script('jquery-flexslider-min-js', '//cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.1/jquery.flexslider-min.js', array('jquery'), '2.7.1', true);
	wp_enqueue_script('navigation-min', get_theme_file_uri('/js/custom-navigation.min.js'), array('jquery'), '1.0', true);
	wp_enqueue_script('tour-min', get_theme_file_uri('/js/pages/packages-tour.min.js'), array('jquery'), '1.0', true);
	wp_enqueue_script('bootstrap-datepicker-min', get_theme_file_uri('/vendors/bootstrap-datepicker/js/bootstrap-datepicker.min.js'), array('jquery'), '1.0', true);
	wp_enqueue_script('owl-carousel-min', '//cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js', array('jquery'), '1.0', true);
	wp_enqueue_script('home-min', get_theme_file_uri('/js/pages/home.min.js'), array('jquery','jquery-ui-autocomplete'), '1.0', true);
	wp_enqueue_script('arrowheadit-min', get_theme_file_uri('/js/arrowheadit.min.js'), array('jquery'), '1.0', true);
}
add_action( 'wp_enqueue_scripts', 'obokash_enqueue_scripts');






