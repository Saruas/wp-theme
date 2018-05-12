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


/*
	***************************
		CUSTOM FONT FAMILY OPTIONS
	***************************	
*/	
$customfont = get_option( 'change_roboto_font' );
if( @$customfont == 1){
	add_filter( 'body_class', function( $classes ) {
    return array_merge( $classes, array( 'roboto-font' ) );
} );
}

$opensansfont = get_option( 'change_open_sans_font' );
if( @$opensansfont == 1){
	add_filter( 'body_class', function( $classes ) {
    return array_merge( $classes, array( 'open-sans-font' ) );
} );
}

$playfairfont = get_option( 'change_playfair_font' );
if( @$playfairfont == 1){
	add_filter( 'body_class', function( $classes ) {
    return array_merge( $classes, array( 'playfair-font' ) );
} );
}




$custompostwidth = get_option( 'full_post_width' );
if( @$custompostwidth == 1){
	add_filter( 'body_class', function( $classes ) {
    return array_merge( $classes, array( 'around-article-post-fullwidth' ) );
} );
}

$custompostthirdwidth = get_option( 'third_post_width' );
if( @$custompostthirdwidth == 1){
	add_filter( 'body_class', function( $classes ) {
    return array_merge( $classes, array( 'around-article-post-thirdwidth' ) );
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

/**
 * Enables the Excerpt meta box in Page edit screen.
 */
function wpcodex_add_excerpt_support_for_pages() {
	add_post_type_support( 'page', 'excerpt' );
}
add_action( 'init', 'wpcodex_add_excerpt_support_for_pages' );

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

add_filter('wp_list_categories', 'cat_count_span');
function cat_count_span($links) {
  $links = str_replace('</a> (', '</a> <span class="stripped-span">(', $links);
  $links = str_replace(')', ')</span>', $links);
  return $links;
}


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

	if($prevPost){ ?>
	<?php  
	 previous_post_link( '<div class="nav-prev">%link</div>', '<span class="meta-nav"></span>', 'Previous post link' );
	}
	
	else {
		echo '';
	}

	$nextPost = get_next_post(true);

	if($nextPost){ ?>
	<?php 
	 next_post_link( '<div class="nav-next">%link</div>', '<span class="meta-nav"> </span></div>', 'Previous post link' );
	}

	else {
		echo '';
	}
	
}


function pinit_get_attachment(){
	$attachments = get_posts( array(
		'post_type' => 'attachment',
		'numberposts' => 1,
		'post_parent' => get_the_ID()
	) );
	if( $attachments ):
		foreach ($attachments as $attachment ): 
			$output = wp_get_attachment_url( $attachment -> ID );
		endforeach;
	endif;
	return $output;
}


