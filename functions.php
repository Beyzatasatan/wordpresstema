<?php
function tema_setup(){
	
	register_nav_menu('anamenu',__('Ana Menü','temam'));
	register_nav_menu('footermenu',__('footer Menü','temam'));
}
add_action('after_setup_theme','tema_setup');


function tema_cagirilcak_dosyalar(){
	
	wp_enqueue_style('bootstrap',get_template_directory_uri().'/inc/bootstrap/css/bootstrap.min.css');
	wp_enqueue_style('fontawesome1',get_template_directory_uri().'/inc/fontawesome/css/fa-solid.min.css');
	wp_enqueue_style('fontawesome2',get_template_directory_uri().'/inc/fontawesome/css/fontawesome-all.min.css');
	wp_enqueue_style('owl1',get_template_directory_uri().'/inc/owl-carousel/assets/owl.carousel.css');
	wp_enqueue_style('owl2',get_template_directory_uri().'/inc/owl-carousel/dist/assets/owl.theme.default.min.css');
	wp_enqueue_style('goolefonts','https://fonts.googleapis.com/css?family=Roboto:300,400,500&amp;subset=latin-ext');
	wp_enqueue_style('tema-style',get_stylesheet_uri());
	wp_enqueue_style('responsive',get_template_directory_uri().'css/responsive.css');
	
	
	
	wp_enqueue_script('jquery',get_template_directory_uri().'/inc/jquery/jquery-3.3.1.min.js',array(),'1.0.1',true);
	wp_enqueue_script('owl3',get_template_directory_uri().'/inc/owl-carousel/owl.carousel.min.js',array(),'1.0.1',true);
	wp_enqueue_script('bootstrap2',get_template_directory_uri().'/inc/bootstrap/js/bootstrap.min.js',array(),'1.0.1',true);
	wp_enqueue_script('tema-script',get_template_directory_uri().'inc/scripts.js',array(),'1.0.1',true);
}
add_action('wp_enqueue_scripts','tema_cagirilcak_dosyalar');
function jquery(){
	echo '<script type="text/javascript" src="'.get_template_directory_uri(),'/inc/jquery/jquery-3.3.1.min.js"></script>';
}	
add_action('wp_head','jquery');	
/*acf*/
add_filter('acf/settings/path', 'my_acf_settings_path');
 
function my_acf_settings_path( $path ) {
    $path = get_stylesheet_directory() . '/inc/acf/';
    return $path;
}


add_filter('acf/settings/dir', 'my_acf_settings_dir');
 
function my_acf_settings_dir( $dir ) {
    $dir = get_stylesheet_directory_uri() . '/inc/acf/';
    return $dir;
    
}

//add_filter('acf/settings/show_admin', '__return_false');

include_once( get_stylesheet_directory() . '/inc/acf/acf.php' );

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Site Ayarları',
		'menu_title'	=> 'Site Ayarları',
		'menu_slug' 	=> 'site-ayarlari',
		'capability'	=> 'manage_options',
		'redirect'		=> false
	));
	
	
	acf_add_options_page(array(
		'page_title' 	=> 'Ana Sayfa Ayarları',
		'menu_title'	=> 'Ana Sayfa Ayarları',
		'menu_slug' 	=> 'anasayfa-ayarlari',
		'parent_slug'	=> 'site-ayarlari',
		'capability'	=> 'manage_options',
		'redirect'		=> false
	));
	
	
}
	 

?>