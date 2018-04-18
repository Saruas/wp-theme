<h1>Test Theme Options</h1>
<?php settings_errors(); ?>

<?php 
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
 ?>
<div class="test-sidebar-preview">
	<div class="test-sidebar">
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

<form method="post" action="options.php" class="test-general-form">
	<?php settings_fields( 'test-settings-group' );  ?>
	<?php do_settings_sections( 'sundstedts_test' ); ?>
	<?php submit_button('Save Changes', 'primary', 'btnSubmit' ); ?>
</form>