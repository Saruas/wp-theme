<?php

add_action( 'wp_head', 'su_head' );

function su_head(){
	?>
	<style type="text/css">
		.nav-first-container,.test-sidebar {
			background-color: <?php echo get_theme_mod( 'sidebar_bg_color', '#1f1f1f' ); ?> !important;
		}
	</style>	
	<?php		

	?>
	<style type="text/css">
		.test-widget-title {
			background-color: <?php echo get_theme_mod( 'sidebar_rubrik_color', '#000' ); ?> !important;
		}
	</style>	
	<?php	

	?>
	<style type="text/css">
		.test-username, .test-discription, .test-title, .test-widget.widget_text p, .sidebar-open, .menu a {
			color: <?php echo get_theme_mod( 'sidebar_title_color', '#fff' ); ?> !important;
		}
	</style>	
	<?php	

	?>
	<style type="text/css">
		.socialMedia a{
			color: <?php echo get_theme_mod( 'socialMedia_color', '#000' ); ?> !important;
		}
	</style>	
	<?php	
}
