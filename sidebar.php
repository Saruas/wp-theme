<?php
/* 
	This is the temlate for the header 
	@
*/

if ( ! is_active_sidebar( 'test-sidebar') ) {
	return;
}

?>
<aside id="secondary" class="widget-area" role="complemenrary">
	<?php dynamic_sidebar( 'test-sidebar' ); ?>
</aside>