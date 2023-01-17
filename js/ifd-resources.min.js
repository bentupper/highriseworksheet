jQuery(document).ready(function($) {

  /* For All Accordions */
  $(function() {
    $("#accident-accordion,#blood-draws-accordion,#death-notices-accordion,#high-rise-accordion,#high-rise-assignments-accordion,#hydrants-out-accordion,#mass-exposure-reports-accordion,#road-construction-accordion,#scantron-accordion").accordion({
      collapsible: true,
      active: false
    });

    // Allows the Datepicker to come up when date need off is clicked in Trade Times forum
    $(function() {
      $('.datepicker').datepicker();
    });

    $(function() {
      $('.cpapp_break').html('<hr />');
    });

    // Animates buttons - they grow on hover, and shrink on mouse exit
    $(function() {
      $('div[id^="panel-"] img').mouseenter(
        function() {
          $(this).addClass('animated grow duration1');
        }
      );

      $('div[id^="panel-"] img').mouseleave(
        function() {
          $(this).removeClass('animated grow duration1');
        }
      );

    });


    // Animates the IFD Resources Logo on the Home page only
    $(function() {
      $('.page-id-13994 .header-image').addClass('animated flipInX duration2');
    });


  }); /* IIFE */

}); /* document ready */