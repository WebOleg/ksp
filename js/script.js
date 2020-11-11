$(document).ready(function($) {

  $(window).scroll(function(){
    if($(this).scrollTop()>50){
      $('.header-btn').addClass('scrolled');
    } else {
      $('.header-btn').removeClass('scrolled');
    }
  });

  // crop comment
  $('.client-comment p').each(function () {
    $(this).attr({
      'full-text': $(this).html(),
      'crop-text': $(this).html().slice(0, 159)
      });
    $(this).html($(this).attr('crop-text'));
  });

  $( '.full-comment' ).click(function() {
    let element = $( this ).siblings("p");
    if( $(element).html() == $(element).attr('crop-text')){
      $(element).html($(element).attr('full-text'));
    } else {
      $(element).html($(element).attr('crop-text'));
    }
  });

  $('.question-form').hide();

  $('.header-btn').click(function(event) {
    $('.question-form').removeClass('hide');
    $('.question-form').show('500');
  });

  $('.question-close').click(function(event) {
    $('.question-form').hide('500');
  });








});