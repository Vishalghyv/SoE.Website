//mtype writer
var TxtType = function(el, toRotate, period) {
    this.toRotate = toRotate;
    this.el = el;
    this.loopNum = 0;
    this.period = parseInt(period, 10) || 2000;
    this.txt = '';
    this.tick();
    this.isDeleting = false;
};

TxtType.prototype.tick = function() {
    var i = this.loopNum % this.toRotate.length;
    var fullTxt = this.toRotate[i];

    if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
    } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
    }

    this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

    var that = this;
    var delta = 200 - Math.random() * 100;

    if (this.isDeleting) { delta /= 2; }

    if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
    } else if (this.isDeleting && this.txt === '') {
    this.isDeleting = false;
    this.loopNum++;
    delta = 500;
    }

    setTimeout(function() {
    that.tick();
    }, delta);
};

window.onload = function() {
    var elements = document.getElementsByClassName('typewrite');
    for (var i=0; i<elements.length; i++) {
        var toRotate = elements[i].getAttribute('data-type');
        var period = elements[i].getAttribute('data-period');
        if (toRotate) {
          new TxtType(elements[i], JSON.parse(toRotate), period);
        }
    }
    // INJECT CSS
    var css = document.createElement("style");
    css.type = "text/css";
    css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
    document.body.appendChild(css);
};

//owl-courosel
$('.owl-1').owlCarousel({
loop:true,
margin: 0,
autoplay: true,
autoplayTimeout: 2000,
stagePadding: 10,
responsiveClass:true,
smartSpeed: 2000,
dots:false,
nav: true,
navText : ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
responsive:{
    0:{
        items:1,
    },
    600:{
        items:1,
    },
    1000:{
        items:2,
        loop:true
    }
}
})

$('.owl-2').owlCarousel({
loop:true,
margin: 0,
autoplay: true,
autoplayTimeout: 2000,
stagePadding: 10,
responsiveClass:true,
dots:false,
nav: true,
navText : ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
responsive:{
    0:{
        items:1,
    },
    600:{
        items:1,
    },
    1000:{
        items:1,
        loop:true
    }
}
})


$('.owl-4').owlCarousel({
loop:true,
margin:10,
dots: true,
nav:true,
autoplay:true,   
smartSpeed: 3000, 
autoplayTimeout:7000,
responsive:{
    0:{
        items:1
    },
    600:{
        items:2
    },
    1000:{
        items:3
    }
}
})

$('.owl-3').owlCarousel({
loop:true,
margin:10,
dots: true,
nav:true,
autoplay:true,   
smartSpeed: 2000, 
autoplayTimeout:3000,
responsive:{
    0:{
        items:1
    },
    600:{
        items:2
    },
    1000:{
        items:4
    }
}
})

$(".owl-5").owlCarousel({
loop: true,
autoplay: true,
items: 1,
nav: false,
autoplayHoverPause: true, 
animateOut: 'slideOutUp',
animateIn: 'slideInUp'
});

//FAQS
function toggleIcon(e) {
$(e.target)
    .prev('.panel-heading')
    .find(".fa-1x")
    .toggleClass('fa-plus fa-minus');
}

$('#accordion').on('hidden.bs.collapse', toggleIcon);
$('#accordion').on('shown.bs.collapse', toggleIcon);

//gallery
popup={
init: function(){
$('figure').click(function(){
  popup.open($(this));
});

$(document).on('click', '.popup img', function(){
  return false;
}).on('click', '.popup', function(){
  popup.close();
})
},
open: function($figure) {
$('.gallery').addClass('pop');
$popup = $('<div class="popup" />').appendTo($('body'));
$fig = $figure.clone().appendTo($('.popup'));
$bg = $('<div class="bg" />').appendTo($('.popup'));
$close = $('<div class="close"><svg><use xlink:href="#close"></use></svg></div>').appendTo($fig);
$shadow = $('<div class="shadow" />').appendTo($fig);
src = $('img', $fig).attr('src');
$shadow.css({backgroundImage: 'url(' + src + ')'});
$bg.css({backgroundImage: 'url(' + src + ')'});
setTimeout(function(){
  $('.popup').addClass('pop');
}, 10);
},
close: function(){
$('.gallery, .popup').removeClass('pop');
setTimeout(function(){
  $('.popup').remove()
}, 100);
}
}

popup.init()