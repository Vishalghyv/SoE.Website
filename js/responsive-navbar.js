$(document).ready(() => {
  var navImg = $('.navbar-brand');
  console.log(navImg);
  if ($(window).width() >= 576 && $(window).width() < 992) {
    comment(navImg);
    $(".wrapper-elm").appendTo(".navbar-brand");
  } else if($(window).width() < 576) {
    comment(navImg);
    $(".wrapper-elm .logo-container").appendTo(".navbar-brand");
  } else {
    uncomment(navImg);
    $(".wrapper-elm").appendTo(".wrapper");
  }
});

function comment(element) {
  element.html('<!--' + element.html() + '-->')
}

function uncomment(element) {
  var len = element.html().length;
  element.html(element.html().substring(4, len - 3))
}