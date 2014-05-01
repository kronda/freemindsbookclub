jQuery( document ).ready( function( $ ) {

    enquire.register("screen and (max-width: 767px)", {

      match : function() {
          $('#title a img').attr('src', '/wp-content/themes/freeminds/images/fm_logo_small.png');
      }

  });
  enquire.register("screen and (min-width: 768px)", {

      match : function() {
          $('#title a img').attr('src', '/wp-content/themes/freeminds/images/fm_logo_large.png');
      }

  });

  // Wrap the text elements in the home page featured success story so we can make it look like like a widget
  $('#featured-post-4 div > a').nextAll().wrapAll('<div id="featured-post-teaser" />').wrapAll('<div class="featured-post-inner" />');

});