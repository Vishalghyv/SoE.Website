$(document).ready(() => {
  var navImg = $('.navbar-brand');
  if ($(window).width() >= 576 && $(window).width() < 992) {
    comment(navImg);
    $(".wrapper-elm").appendTo(".navbar-brand");
  } else if ($(window).width() < 576) {
    comment(navImg);
    $(".wrapper-elm .logo-container").appendTo(".navbar-brand");
  } else {
    uncomment(navImg);
    $(".wrapper-elm").appendTo(".wrapper");
  }

  // Sticky navbar
  var hoheader = document.querySelector(".header-top").offsetHeight + document.querySelector(".header-middle").offsetHeight;
  

  $(window).on('scroll', function () {
    console.log('a',hoheader);
    if ($(this).scrollTop() >= hoheader) {
      $('.navbar').addClass('fixed-top');
    } else if ($(this).scrollTop() < hoheader) {
      $('.navbar').removeClass('fixed-top');
    }
  });

  function adjustNav() {
    var winWidth = $(window).width(),
      dropdown = $('.dropdown'),
      dropdownMenu = $('.dropdown-menu');
    if (winWidth >= 768) {
      dropdown.on('mouseenter', function () {
        $(this).addClass('show')
          .children(dropdownMenu).addClass('show');
      });

      dropdown.on('mouseleave', function () {
        $(this).removeClass('show')
          .children(dropdownMenu).removeClass('show');
      });
    } else {
      dropdown.off('mouseenter mouseleave');
    }
  }

  $(window).on('resize', adjustNav);

  adjustNav();
});

function comment(element) {
  element.html('<!--' + element.html() + '-->')
}

function uncomment(element) {
  var len = element.html().length;
  element.html(element.html().substring(4, len - 3))
}