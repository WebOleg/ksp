$(document).ready(function($) {

  // crop comment
  $('.client-comment p').each(function () {
    $(this).attr({
      'full-text': $(this).html(),
      'crop-text': $(this).html().slice(0, 3)
      });
    $(this).html($(this).attr('crop-text'));
  });

  $( '.full-comment' ).click(function() {
    $( this ).siblings("p").html('sdgdsfgdfsgd')
  });











});