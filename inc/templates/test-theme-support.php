<h1>Test Theme Support</h1>
<?php settings_errors(); ?>

<?php 
//	$picture = esc_attr( get_option( 'profile_picture' ) );
 ?>


<form method="post" action="options.php" class="test-general-form">
	<?php settings_fields( 'test-theme-support' );  ?>
	<?php do_settings_sections( 'sundstedts_test_theme' ); ?>
	<?php submit_button(); ?> 
</form>