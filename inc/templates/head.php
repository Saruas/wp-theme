<?php
add_action( 'wp_head', 'su_head' ); 

function su_head(){
	?>
	<style type="text/css">
		.nav-first-container.test-sidebar {
			background-color: <?php echo get_theme_mod( 'sidebar_bg_color', '#1f1f1f' ); ?> !important;
		}
	</style>	
}