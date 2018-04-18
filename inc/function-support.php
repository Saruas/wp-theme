<?php
/*
	***************************
		THEME SUPPORT OPTIONS
	***************************	
*/
//to save checkbox
$options = get_option( 'post_formats' );
$formats = array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' );
$output = array();
foreach ( $formats as $format ) {
		$output[] = ( @$options[$format] == 1? $format : '' );
}		
if(!empty( $options ) ){
	add_theme_support( 'post-formats', $output );

}
//Header & Background Aktivering 
$header = get_option( 'custom_header' );
if( @$header == 1){
	add_theme_support('custom-header');
}
$background = get_option( 'custom_background' );
if( @$background == 1){
	add_theme_support('custom-background');
}

/* Activate Nav Menu Options */

function test_regrister_nav_menu() {
	register_nav_menu( 'First_menu', 'First Navigation Menu');
	register_nav_menu( 'Second_menu', 'Second Navigation Menu');
}
add_action( 'after_setup_theme', 'test_regrister_nav_menu' );