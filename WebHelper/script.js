$(document).ready(function () {
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {  //check if page is scrolled greater than 100px
      $('.scroll-top').fadeIn();    //if this happens, fadein the button
    } else {
      $('.scroll-top').fadeOut();
    }
  });

  $('.scroll-top').click(function () {
    $("html, body").animate({
      scrollTop: 0    //when user clicks on button, scroll to top of the page to 0px
    }, 100);
      return false;
  });

});
