<?php
/*
	***************************
		ADMIN PAGE
	***************************	
*/

function testtheme_add_admin_page() {

	//Generate Test Admin Page
	add_menu_page( 'Test Theme Options', 'Test', 'manage_options', 'sundstedts_test', 'test_theme_create_page', 'dashicons-admin-customizer', 110 );
	/*icon för att lägga in egen get_template_directory() . '/img/namn-icon.png'*/

	//Generate Test Admin Sub Pages
	add_submenu_page( 'sundstedts_test', 'Test Theme Sidebar', 'Sidebar', 'manage_options', 'sundstedts_test', 'test_theme_create_page' );
	add_submenu_page('sundstedts_test', 'Test Theme Options', 'Theme Options ', 'manage_options', 'sundstedts_test_theme', 'test_theme_support_page' );
	add_submenu_page('sundstedts_test', 'Test CSS Options', 'Custom CSS', 'manage_options', 'sundstedts_test_css', 'test_theme_setting_page' );
	
	//Activate custom settings
	add_action( 'admin_init', 'test_custom_settings' );

}
add_action(  'admin_menu', 'testtheme_add_admin_page' );

function test_custom_settings() {

//Sidebar Options Side
	register_setting( 'test-settings-group', 'profile_picture' );
	register_setting( 'test-settings-group', 'first_name' );
	register_setting( 'test-settings-group', 'last_name' );
	register_setting( 'test-settings-group', 'user_description' );
	register_setting( 'test-settings-group', 'linkedIn_handler' );	
	register_setting( 'test-settings-group', 'facebook_handler', 'test_sanitize_instagram_handler' );
	register_setting( 'test-settings-group', 'instagram_handler', 'test_sanitize_instagram_handler' );
	
	add_settings_section( 'test-sidebar-options', 'Sidebar Options', 'test_sidebar_options', 'sundstedts_test' );
	
//Field For the sidebar
	add_settings_field('sidebar-profile-picture', 'Profile Picture', 'test_sidebar_profile', 'sundstedts_test', 'test-sidebar-options' );
	add_settings_field('sidebar-name', 'Full Name', 'test_sidebar_name', 'sundstedts_test', 'test-sidebar-options' );
	add_settings_field('sidebar-description', 'User Description', 'test_sidebar_description', 'sundstedts_test', 'test-sidebar-options' );
	add_settings_field('sidebar-linkedin', 'LinkedIn handler', 'test_sidebar_linkedin', 'sundstedts_test', 'test-sidebar-options' );
	add_settings_field('sidebar-facebook', 'Facebook handler', 'test_sidebar_facebook', 'sundstedts_test', 'test-sidebar-options' );
	add_settings_field('sidebar-instagram', 'Instagram handler', 'test_sidebar_instagram', 'sundstedts_test', 'test-sidebar-options' );

//Theme Support Options Side
	register_setting('test-theme-support', 'post_formats' );
	register_setting('test-theme-support', 'custom_header' );
	register_setting('test-theme-support', 'custom_background' );
	
	add_settings_section( 'test-theme-options', 'Theme Options', 'test_theme_options', 'sundstedts_test_theme' );
	
	add_settings_field('post-formats', 'Post Formats', 'test_post_formats', 'sundstedts_test_theme', 'test-theme-options' );
	add_settings_field('custom-header', 'Custom Header', 'test_custom_header', 'sundstedts_test_theme', 'test-theme-options' );
	add_settings_field('custom-background', 'Custom Background', 'test_custom_background', 'sundstedts_test_theme', 'test-theme-options' );

// Custom CSS Options
	register_setting( 'test-custom-css-options', 'test_css', 'test_sanitize_custom_css' );

	add_settings_section( 'test-custom-css-section', 'Cutsom CSS', 'test_custom_css_section_callback', 'sundstedts_test_css' );

	add_settings_field( 'custom-css', 'Insert Your Custom CSS', 'test_custom_css_callback', 'sundstedts_test_css', 'test-custom-css-section' );
}
function test_custom_css_section_callback() {
	echo 'Personal CSS Code';
}
function test_custom_css_callback() {
	$css = get_option( 'test_css' );
	$css = (empty($css) ? '/* Style With Your Own CSS */' : $css );
	echo '<div id="customCss">'.$css.'</div><textarea id="test_css" name="test_css" style="display:none;visibility:hidden">'.$css.'</textarea>';
}

//General Settings Site
function test_theme_options() {
	echo 'Activate and Deactivate Specifik Theme Support Opptions';
}
//Loop Out The Diffrent Opptions
function test_post_formats() { 
	$options = get_option( 'post_formats' );
	$formats = array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' );
	$output = '';
	foreach ( $formats as $format ) {
		$checked = ( @$options[$format] == 1? 'checked' : '' );
		$output .= '<label><input type="checkbox" id="'.$format.'" name="post_formats['.$format.']" value="1" '.$checked.' /> '.$format.'</label><br>';
	}
	echo $output;
}
function test_custom_header() { 
	$options = get_option( 'custom_header' );
	$checked = ( @$options[$format] == 1? 'checked' : '' );
	echo '<label><input type="checkbox" id="custom_header" name="custom_header" value="1" '.$checked.' /> Activate the Custom Header</label>';
}
function test_custom_background() { 
	$options = get_option( 'custom_background' );
	$checked = ( @$options[$format] == 1? 'checked' : '' );
	echo '<label><input type="checkbox" id="custom_background" name="custom_background" value="1" '.$checked.' /> Activate the Custom Background</label>';
}
//Sidebar Options Functions
//Custumize the sidebar with name and social media
function test_sidebar_options() {
	echo 'Costumize your Sidebar Information';
}
function test_sidebar_profile(){
	$picture = esc_attr( get_option('profile_picture' ) );
	if(empty($picture) ){
		echo '<input type="button" class="button button-secondary" value="Upload Profile Picture" id="upload-button"><input type="hidden" id="profile-picture" name="profile_picture" value="" />';
	} else{
		echo '<input type="button" class="button button-secondary" value="Upload Profile Picture" id="upload-button"><input type="hidden" id="profile-picture" name="profile_picture" value="'.$picture.'" /> <input type="button" class="button button-secondary" value="Remove" id="remove-picture">';
	}
}
function  test_sidebar_name() {
	$firstName = esc_attr( get_option( 'first_name' ) );
	$lastName = esc_attr( get_option( 'last_name' ) );
	echo '<input type="text" name="first_name" value="'.$firstName.'" placeholder="First Name"/>
	<input type="text" name="last_name" value="'.$lastName.'" placeholder="Last Name"/>  ';
}
function test_sidebar_description(){
	$description = esc_attr( get_option('user_description' ) );
	echo '<input type="text" name="user_description" value="'.$description.'" placeholder="Description"/> <p class="description"> Whrite something smart about yourself.</p>';
}
function test_sidebar_linkedin(){
	$linkedIn = esc_attr( get_option('linkedIn_handler' ) );
	echo '<input type="text" name="linkedIn_handler" value="'.$linkedIn.'" placeholder="LinkedIn Name"/> <p class="description"> Input your LinkedIn username width the following numbers.<br> ex firstname-surname-123456789</p>';
}
function test_sidebar_facebook(){
	$facebook = esc_attr( get_option('facebook_handler' ) );
	echo '<input type="text" name="facebook_handler" value="'.$facebook.'" placeholder="Facebook Name"/><p class="description"> Input your Facebook username without the @ character.</p>  ';
}
function test_sidebar_instagram(){
	$instagram = esc_attr( get_option('instagram_handler' ) );
	echo '<input type="text" name="instagram_handler" value="'.$instagram.'" placeholder="Instagram Name"/> <p class="description"> Input your Instagram username without the @ character.</p> ';
}

//Sanitization settings
function test_sanitize_instagram_handler( $input ){
	$output = sanitize_text_field( $input );
	$output = str_replace( '@', '', $output );
	return $output;
}

function test_sanitize_custom_css( $input ){
	$output = esc_textarea( $input );
	return $output;
}
//Template submenu functions
function test_theme_create_page() {
	//Let us pull the information only ones
	require_once( get_template_directory() . '/inc/templates/test-admin.php' );
}
function test_theme_support_page() {
	require_once( get_template_directory() . '/inc/templates/test-theme-support.php');
}
//CSS PAGE
function test_theme_setting_page() {
	//Generation of our admin page
	require_once( get_template_directory() . '/inc/templates/test-custom-css.php');
}


