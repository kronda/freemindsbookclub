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

  // add align class to images in the home page news stories
  $('.home .news-teaser a.alignleft img').addClass('alignleft');
  $('.home .news-teaser a.alignright img').addClass('alignright');

  // Wrap the first two widgets in the sidebar in a div
  $('#sidebar .widget').slice(0,2).wrapAll('<div class="widgets-archive-tags" />');
  $('#sidebar .widget').slice(0,2).wrapAll('<div class="widgets-archive-tags-inner" />');

  // Add tag icon next to to the tag cloud
  $('.widget_tag_cloud .widget-title').before('<i class="fa fa-tag"></i>');

}); // end jQuery



