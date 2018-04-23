<?php

/*

WIDGET CLASS
-------------------------------------
ny klass som extends från wordpress

*/

class Custom_Profile_Widget extends WP_Widget {

//setup widget name, description, etc....
	public function __construct() {

		$widget_ops = array(
			'classname' => 'custom-profile-widget',
			'description' => ' Custom Theme Profile Widget',
		);
		parent::__construct( 'theme_profile', 'Theme Profile', $widget_ops );
	} 
	//back-end display of widget
	public function form( $instance ){
		echo ' <p>No options for this Widget! </p>
		<p>You can controll the fields of this widget on from <a href="./admin.php?page=sundstedts_test">this page </a> ';
	} 


	//front-end display of widget
	public function widget( $args, $instance ){

	$picture = esc_attr( get_option( 'profile_picture' ) );
	$firstName = esc_attr( get_option( 'first_name' ) );
	$lastName = esc_attr( get_option( 'last_name' ) );
	$fullName = $firstName . ' '. $lastName;
	$usertitle = esc_attr( get_option('user_title' ) );
	$description = esc_attr( get_option('user_description' ) );
	$linkedIn = esc_attr( get_option('linkedIn_handler' ) );
	$facebook = esc_attr( get_option('facebook_handler' ) );
	$instagram = esc_attr( get_option('instagram_handler' ) );
	$socialMedia = $linkedIn . ' ' . $facebook . ' ' . $instagram;

	echo $args['before_widget'];
	?>
	<div class="text-center">
	<div class="image-container">
			<div id="profile-picture-preview" class="profile-picture" style="background-image: url(<?php print $picture; ?>);"></div>
			</div>
				<h1 class="test-username"><?php print $fullName; ?></h1>
				<h2 class="test-title"><?php print $usertitle; ?></h2>
				<h2 class="test-discription"><?php print $description; ?></h2>
			<div class="icon-wrapper">
				<ul class="socialMedia">
					<li class="socialMedia linkedIn"><a class="linkedIn" href="https://www.linkedin.com/in/<?php print $linkedIn; ?>" target="_blank"></a></li>
					<li class="socialMedia facebook"><a class="facebook" href="https://www.facebook.com/<?php print $facebook; ?>" target="_blank"></a></li>
					<li class="socialMedia instagram"><a href="https://www.instagram.com/<?php print $instagram; ?>" target="_blank"></a></li>
				</ul>
			</div>	
	</div>
	</div>
		
	<?php
		echo $args['after_widget'];
	}
}

add_action( 'widgets_init', function() {
	register_widget( 'Custom_Profile_Widget' );
} );