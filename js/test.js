//Load jQuery
jQuery(document).ready(function($){

// ===== Scroll to Top ==== 
$(window).scroll(function() {
    if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
        $('#return-to-top').fadeIn(200);    // Fade in the arrow
    } else {
        $('#return-to-top').fadeOut(200);   // Else fade out the arrow
    }
});

$('#return-to-top').click(function() {      // When arrow is clicked
    $('body,html').animate({
        scrollTop : 0                       // Scroll to top of body
    }, 500);
});

// var portfolioPostsBtn = document.getElementById( 'portfolio-post-btn' );
// var portfolioPostLoad = document.getElementById( 'portfolio-post-load' );

// if (portfolioPostsBtn) {
//   portfolioPostsBtn.addEventListener("click", function() {
//     var ourRequest = new XMLHttpRequest();
//     ourRequest.open('GET', 'http://localhost/wp-json/wp/v2/posts');
//     ourRequest.onload = function() {
//       if (ourRequest.status >= 200 && ourRequest.status < 400) {
//         var data = JSON.parse(ourRequest.responseText);
//         createHTML(data);
//         portfolioPostsBtn.remove();
//       } else {
//         console.log("We connected to the server, but it returned an error.");
//       }
//     };

//     ourRequest.onerror = function() {
//       console.log("Connection error");
//     };

//     ourRequest.send();
// });
// }

// function createHTML(postsData) {
//   var ourHTMLString = '';
//   for (i = 0; i < postsData.length; i++) {
//     ourHTMLString += '<h2>' + postsData[i].title.rendered + '</h2>';
//     ourHTMLString += postsData[i].content.rendered;
//   }
//   portfolioPostLoad.innerHTML = ourHTMLString;
// }



/* sidebar functions */
/*

$(document).on('click', '.js-toggleSidebar', function() {
	$( '.page-container-width' ).toggleClass( 'page-container-width');
}); //close sidebar

$(document).on('click', '.js-openSidebar', function() {
	$( '.test-sidebar' ).removeClass( 'sidebar-closed');
}); //close sidebar


$(document).on('click', '.js-toggleSidebar', function() {
  $( '.test-sidebar' ).toggleClass( 'sidebar-closed' );
  $( '.page-container-sidebar' ).toggleClass( 'page-container' );
  $( '#nav-icon3' ).toggleClass( 'open' );
}); //
*/

// HAMBURGER MENU

$(document).ready(function(){
  $('#nav-icon3').click(function(){
    $(this).toggleClass('open');
    $( '.test-sidebar' ).toggleClass( 'sidebar-closed' );
    $( '.page-container-sidebar' ).toggleClass( 'page-container' );
  });
});
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

jQuery( function( $ ) {

  // start fetchpage at 1
  var fetchpage = "1";

  $('a.load-more__button' ).on( 'click', function ( e ) {

      // prevent default click event
      e.preventDefault();

      // update the link text
      $(this).text('Loading posts...');

      // ajax call
            $.ajax( {
              url: 'http://localhost:8888/wp-json/wp/v2/posts?_filter[tag]=appcontent' + fetchpage,
              success: function ( data, textStatus, request ) {
  
          // log all the things 
          // console.log ( data );
          // console.log ( textStatus );
          // console.log ( request );
          
          // get total number of pages
                  var totalpages = request.getResponseHeader('X-WP-TotalPages');
                  

         // if current page is less than total pages
                  if(fetchpage <= totalpages) {

            // for each item
            $.each( data, function( count, item ) {
              var title = item.title.rendered;
              var link = item.link;
              var excerpt = item.excerpt.rendered;


              $(".posts").append('<div class="category-grid"><div class="post"><a href="' + link + '" target="_blank">' + title + '</a>'+ excerpt +'</div>');
                    });

          // increment fetchpage
                    fetchpage++;

                    // as long as we still have pages to load
                    if(fetchpage <= totalpages) {
                        $('.load-more a').text('Load More News');
                    } else {
                        $('.load-more__button').hide();
                        $('.js-load-more').text('No more news to load.');
                    }
                }

          },

       error: function ( data, textStatus, request ) {
            console.log(data.responseText);
        },

          cache: false
        } );
    
  } );
  
} );














