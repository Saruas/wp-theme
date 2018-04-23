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

add_theme_support( 'post-thumbnails' );

/* Activate Nav Menu Options */

function test_regrister_nav_menu() {
	register_nav_menu( 'First_menu', 'First Navigation Menu');
	register_nav_menu( 'Second_menu', 'Second Navigation Menu');
}
add_action( 'after_setup_theme', 'test_regrister_nav_menu' );

/*
	***************************
		SIDEBAR SUPPORT OPTIONS
	***************************	
*/

function test_sidebar_init() {

	register_sidebar(
		array(
			'name' => esc_html__( 'Test Sidebar', 'testtheme'),
			'id' => 'test-sidebar',
			'description' => 'Dynamic Right Sidebar',
			'before_widget' => '<section id="%1$s" class="test-widget %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<h2 class="test-widget-title">',
			'after_title' => '</h2>'
			)
		);
}
add_action( 'widgets_init', 'test_sidebar_init' );

/*
	***************************
		BLOG LOOP FUNCTIONS
	***************************	
*/

function theme_posted_meta () {
	 
	return '<span class="posted-in">' . the_category('. ' ) . '</span>';
}
function theme_posted_footer () {
	return '<div class="post-footer-container">
	<div class="row>
	<div class="col-xs-12">' . get_the_tag_list('<div class="tag-list"><span class="fa fa-tags"></span>' ,'', '</div>' ) . 
	' </div> 
	</div>';
}












