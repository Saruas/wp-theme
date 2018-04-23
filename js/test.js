//Load jQuery
jQuery(document).ready(function($){

/* sidebar functions */

/*
$(document).on('click', '.js-closeSidebar', function() {
	$( '.test-sidebar' ).addClass( 'sidebar-closed');
}); //close sidebar

$(document).on('click', '.js-openSidebar', function() {
	$( '.test-sidebar' ).removeClass( 'sidebar-closed');
}); //close sidebar
*/
$(document).on('click', '.js-toggleSidebar', function() {
	$( '.test-sidebar' ).toggleClass( 'sidebar-closed');
}); //
});