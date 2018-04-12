<h1>Test Theme Options</h1>
<?php settings_errors(); ?>

<?php 
	$picture = esc_attr( get_option( 'profile_picture' ) );
	$firstName = esc_attr( get_option( 'first_name' ) );
	$lastName = esc_attr( get_option( 'last_name' ) );
	$fullName = $firstName . ' '. $lastName;
	$description = esc_attr( get_option('user_description' ) );
 ?>
<div class="test-sidebar-preview">
	<div class="test-sidebar">
		<div class="image-container">
			<div id="profile-picture-preview" class="profile-picture" style="background-image: url(<?php print $picture; ?>);"></div>
		</div>
		<h1 class="test-username"><?php print $fullName; ?></h1>
		<h2 class="test-discription"><?php print $description; ?></h2>
			<div class="icon-wrapper"></div>		
	</div>
</div>

<form method="post" action="options.php" class="test-general-form">
	<?php settings_fields( 'test-settings-group' );  ?>
	<?php do_settings_sections( 'sundstedts_test' ); ?>
	<?php submit_button('Save Changes', 'primary', 'btnSubmit' ); ?>
</form>