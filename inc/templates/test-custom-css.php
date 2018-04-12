
<h1>Test Custom CSS</h1>
<?php settings_errors(); ?>

<?php 
//	$picture = esc_attr( get_option( 'profile_picture' ) );
 ?>

<form id="save-custom-css-form" method="post" action="options.php" class="test-general-form">
	<?php settings_fields( 'test-custom-css-options' );  ?>
	<?php do_settings_sections( 'sundstedts_test_css' ); ?>
	<?php submit_button(); ?> 
</form>
