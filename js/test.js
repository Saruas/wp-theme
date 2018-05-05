//Load jQuery
jQuery(document).ready(function($){

/* sidebar functions */
/*

$(document).on('click', '.js-toggleSidebar', function() {
	$( '.page-container-width' ).toggleClass( 'page-container-width');
}); //close sidebar

$(document).on('click', '.js-openSidebar', function() {
	$( '.test-sidebar' ).removeClass( 'sidebar-closed');
}); //close sidebar
*/


$(document).on('click', '.js-toggleSidebar', function() {
	$( '.test-sidebar' ).toggleClass( 'sidebar-closed' );
	$( '.page-container-sidebar' ).toggleClass( 'page-container');
}); //

/* First page functions 


$(document).ready(function() { 
if $('.test-sidebar').hasClass('sidebar-closed');
$('#main').removeClass('.page-container-sidebar');
});

$(document).ready(function(){
    $("js-toggleSidebar").click(function(){
        $("div").removeClass(".page-container-sidebar");
    });
});
$(document).ready(function(){
    $("js-toggleSidebar").click(function(){
        $("page-container-sidebar").toggleClass("page-container");
    });
});
*/
});

