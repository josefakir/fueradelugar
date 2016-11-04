<?php 
add_theme_support( 'post-thumbnails' );
define("THEME_DIR", get_template_directory_uri());
function enqueue_styles() {
	wp_register_style( 'style', THEME_DIR.'/style.css', array(), '1', 'all' );
	wp_enqueue_style( 'style' );
	wp_register_style('opensanscondensed','https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300',array(),'1','all');
	wp_enqueue_style( 'opensanscondensed' );
	wp_register_style('opensans','https://fonts.googleapis.com/css?family=Open+Sans',array(),'1','all');
	wp_enqueue_style( 'opensans' );
	wp_register_style('superfish',THEME_DIR.'/plugins/superfish/css/superfish.css',array(),'1','all');
	wp_enqueue_style( 'superfish' );
	wp_register_style('dlmenu-css',THEME_DIR.'/plugins/dl-menu/component.css',array(),'1','all');
	wp_enqueue_style( 'dlmenu-css' );
	wp_register_style('font-awesome-css',THEME_DIR.'/plugins/font-awesome/css/font-awesome.min.css',array(),'1','all');
	wp_enqueue_style( 'font-awesome-css' );
	wp_register_style('style-responsive-css',THEME_DIR.'/stylesheet/style-responsive.css',array(),'1','all');
	wp_enqueue_style( 'style-responsive-css' );
	wp_register_style('style-custom-css',THEME_DIR.'/stylesheet/style-custom.css',array(),'1','all');
	wp_enqueue_style( 'style-custom-css' );
	wp_register_style('ms-main-css',THEME_DIR.'/plugins/masterslider/public/assets/css/masterslider.main.css',array(),'1','all');
	wp_enqueue_style( 'ms-main-css' );
	wp_register_style('ms-custom-css',THEME_DIR.'/plugins/masterslider/custom.css',array(),'1','all');
	wp_enqueue_style( 'ms-custom-css' );
	
	
}
function enqueue_scripts(){
	wp_enqueue_script( 'jquery' );
	wp_register_script( 'gdlr-soccer', THEME_DIR .'/plugins/goodlayers-soccer/javascript/gdlr-soccer.js', array('jquery'), '1', false );
	wp_enqueue_script( 'gdlr-soccer' );
	wp_register_script( 'superfish', THEME_DIR .'/plugins/superfish/js/superfish.js', array('jquery'), '1', false );
	wp_enqueue_script( 'superfish' );
	wp_register_script( 'modernizr', THEME_DIR .'/plugins/dl-menu/modernizr.custom.js', array('jquery'), '1', false );
	wp_enqueue_script( 'modernizr' );
	wp_register_script( 'dlmenu', THEME_DIR .'/plugins/dl-menu/jquery.dlmenu.js', array('jquery'), '1', false );
	wp_enqueue_script( 'dlmenu' );
	wp_register_script( 'easing', THEME_DIR .'/plugins/jquery.easing.js', array('jquery'), '1', false );
	wp_enqueue_script( 'easing' );
	wp_register_script( 'gdlr-script', THEME_DIR .'/javascript/gdlr-script.js', array('jquery'), '1', false );
	wp_enqueue_script( 'gdlr-script' );
	wp_register_script( 'masterslider', THEME_DIR .'/plugins/masterslider/public/assets/js/masterslider.min.js', array('jquery'), '1', false );
	wp_enqueue_script( 'masterslider' );
	

	
	
	
}
add_action( 'wp_enqueue_scripts', 'enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );
?>