<h1>Stripped Theme Layout Options</h1>
<?php settings_errors(); ?>

<?php 
//	$picture = esc_attr( get_option( 'profile_picture' ) );
 ?>


<form method="post" action="options.php" class="stripped-layout-form">
	<?php settings_fields( 'stripped-layout-options' );  ?>
	<?php do_settings_sections( 'stripped_theme_layout_options' ); ?>
	<?php submit_button(); ?> 
</form>