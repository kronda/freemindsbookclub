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


});