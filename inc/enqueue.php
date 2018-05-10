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
		PAGE ENQUEUE FUNCTIONS
	***************************	
*/





function test_load_scripts(){

	wp_enqueue_style( 'test_css', get_template_directory_uri() . '/css/test.css', array(), '1.0.0' );
	wp_enqueue_style('font-awesome', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

	wp_enqueue_style('roboto','https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i');

	wp_enqueue_style('lato', 'https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i');

	wp_enqueue_style('open-sans', 'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i');

	wp_enqueue_style( 'playfair', 'https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i');


	
	wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.3.1.min.js', false, '3.3.1', true );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'testjs', get_template_directory_uri() . '/js/test.js', array('jquery'), '1.0.0' );

}
add_action( 'wp_enqueue_scripts', 'test_load_scripts' );















