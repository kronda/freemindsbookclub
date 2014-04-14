jQuery( document ).ready( function( $ ) {
  
  console.log("TEST");

  enquire.register("screen and (min-width: 768px)", {

      match : function() {
          console.log("MATCH");
      }
  });

});