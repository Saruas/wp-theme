<?php
/*
	***************************
		ADMIN ENQUEUE FUNCTIONS
	***************************	
*/

function test_load_admin_scripts( $hook ){
//echo $hook;
	if( 'toplevel_page_sundstedts_test' == $hook ){ 

		wp_register_style( 'test_admin', get_template_directory_uri() . '/css/test.admin.css', array(), '1.0.0', 'all' );
		wp_enqueue_style( 'test_admin');

		wp_enqueue_media();

		wp_register_script( 'test-admin-script', get_template_directory_uri() . '/js/test.admin.js', array('jquery'), '1.0.0', true );
		wp_enqueue_script( 'test-admin-script');

	} else if ( 'test_page_sundstedts_test_css' == $hook ){

		wp_enqueue_style( 'ace', get_template_directory_uri() . '/css/test.ace.css', array(), '1.0.0', 'all' );

		wp_enqueue_script( 'ace', get_template_directory_uri() . '/js/ace/src-noconflict/ace.js', array('jquery'), '1.3.3', true );
		wp_enqueue_script( 'test-custom-css-script', get_template_directory_uri() . '/js/test.custom_css.js', array('jquery'), '1.0.0', true );

	}	else { return; }
}

add_action( 'admin_enqueue_scripts', 'test_load_admin_scripts');



/*
	***************************
		ADMIN ENQUEUE FUNCTIONS
	***************************	
*/

function test_load_scripts(){

	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.0.3', 'all' );
	wp_deregister_script( 'jquery' );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.0.3', true );

}
add_action( 'wp_enqueue_script', 'test_load_scripts' );