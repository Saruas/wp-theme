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
//Header, Logo & Background Aktivering 
$header = get_option( 'custom_header' );
if( @$header == 1){

	$custom = array(
		'width'         => '100vw',
		'height'        => '100wh',
		'default-image' => '',

		);
	add_theme_support('custom-header', $custom);
}

$logo = get_option( 'custom_logo' );
if( @$logo == 1){
	add_theme_support('custom-logo');
}

$background = get_option( 'custom_background' );
if( @$background == 1){
	add_theme_support('custom-background');
}

$customfont = get_option( 'change_roboto_font' );
if( @$customfont == 1){
	add_filter( 'body_class', function( $classes ) {
    return array_merge( $classes, array( 'roboto-font' ) );
} );
}
/*
	***************************
		CUSTOM FONT FAMILY OPTIONS
	***************************	
*/	

$custompostwidth = get_option( 'full_post_width' );
if( @$custompostwidth == 1){
	add_filter( 'body_class', function( $classes ) {
    return array_merge( $classes, array( 'around-article-post-fullwidth' ) );
} );
}


add_theme_support( 'post-thumbnails' );

add_theme_support( 'customize-selective-refresh-widgets' );

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
			'description' => 'Dynamic Left Sidebar',
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
	return '<div class="post-footer-container">' . get_the_tag_list('<div class="tag-list"><span class="fa fa-tags"></span>' ,'', '</div>' ) . 
	'</div>';
}

/*
	***************************
		SINGLE POST FUNCTIONS
	***************************	
*/
function stripped_post_navigation(){
	$prevPost = get_previous_post(true);
	$prevthumbnail = get_the_post_thumbnail($prevPost->ID, array(300,150) );

	previous_post_link( '<div class="nav-prev">%link</div>', $prevthumbnail . _x('<div class="stripped-nav-prev-title"><a class="stripped-prev-a">Privious</a><span class="stripped-prev-title"> %title </span><span class="meta-nav">&rarr;</span></div>', 'Previous post link', 'nicosite' ) );
	

	$nextPost = get_next_post(true);
	$nextthumbnail = get_the_post_thumbnail($nextPost->ID, array(300,150) );

	next_post_link( '<div class="nav-next">%link</div>', $nextthumbnail . _x( '<div class="stripped-nav-next-title"><a class="stripped-next-a">Next</a><span class="stripped-next-title"> %title </span><span class="meta-nav">&rarr;</span></div>', 'Next post link', 'nicosite' ) );

	
}









