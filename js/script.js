$(document).ready(function () {
  $(".main").on("click", "a", function (event) {

    event.preventDefault();

    var id = $(this).attr('href'),

      top = $(id).offset().top;
    $('body,html').animate({
      scrollTop: top
    }, 500);
  });
});

$(document).ready(function () {
  $('.main-contacts__button').on('click', function () {
    $('.overlay').fadeIn();
  });

  $('.main-text__button ').on('click', function () {
    $('.overlay').fadeIn();
  });

  $('.training-button').on('click', function () {
    $('.overlay').fadeIn();
  });

  $('.armor-button').on('click', function () {
    $('.overlay').fadeIn();
  });

  $('.feedback-button').on('click', function () {
    $('.overlay').fadeIn();
  });

  $('.services-block__button').on('click', function () {
    $('.overlay').fadeIn();
  });

  $('.contacts-block__button').on('click', function () {
    $('.overlay').fadeIn();
  });

  $('.popup-close', 'body').on('click', function () {
    $('.overlay').fadeOut();
  });
});