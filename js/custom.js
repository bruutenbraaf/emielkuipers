// Scrollmagic
var controller = new ScrollMagic.Controller();
var steps = document.querySelectorAll('.h__proj');
for (var step of steps) {
  var scene = new ScrollMagic.Scene({
    triggerElement: step
  })
    .setClassToggle(step, 'h__vi')
    .addTo(controller)
    .reverse(false)
    .offset(-320)
}

var controller = new ScrollMagic.Controller();
var steps = document.querySelectorAll('.h__proj_p');
for (var step of steps) {
  var scene = new ScrollMagic.Scene({
    triggerElement: step
  })
    .setClassToggle(step, 'h__vi_p')
    .addTo(controller)
    .offset(-300)
    .reverse(false)
}

var tween = TweenMax.to("footer", 1, { className: "fo-change" });
var scene = new ScrollMagic.Scene({ triggerElement: "#fo" })
  .setTween(tween)
  .addTo(controller)
  .offset(-300)
  .reverse(false)

var controller = new ScrollMagic.Controller();
var steps = document.querySelectorAll('.th_img');
for (var step of steps) {
  var scene = new ScrollMagic.Scene({
    triggerElement: step
  })
    .setClassToggle(step, 'th_img_vi')
    .addTo(controller)
    .offset(-300)
    .reverse(false)
}

var controller = new ScrollMagic.Controller();
var steps = document.querySelectorAll('.f_p p');
for (var step of steps) {
  var scene = new ScrollMagic.Scene({
    triggerElement: step
  })
    .setClassToggle(step, 'p_s')
    .addTo(controller)
    .reverse(false)
    .offset(-300)
}


var controller = new ScrollMagic.Controller();
var steps = document.querySelectorAll('.cv h3');
for (var step of steps) {
  var scene = new ScrollMagic.Scene({
    triggerElement: step
  })
    .setClassToggle(step, 'cv_hb_s')
    .addTo(controller)
    .reverse(false)
    .offset(-300)
}

var controller = new ScrollMagic.Controller();
var steps = document.querySelectorAll('.cv .item');
for (var step of steps) {
  var scene = new ScrollMagic.Scene({
    triggerElement: step
  })
    .setClassToggle(step, 'cv_p_s')
    .addTo(controller)
    .reverse(false)
    .offset(-300)
}

var controller = new ScrollMagic.Controller();
var steps = document.querySelectorAll('.fwc h2');
for (var step of steps) {
  var scene = new ScrollMagic.Scene({
    triggerElement: step
  })
    .setClassToggle(step, 'is_v')
    .addTo(controller)
    .reverse(false)
    .offset(-300)
}

var controller = new ScrollMagic.Controller();
var steps = document.querySelectorAll('.carrousel');
for (var step of steps) {
  var scene = new ScrollMagic.Scene({
    triggerElement: step
  })
    .setClassToggle(step, 'carrousel_v')
    .addTo(controller)
    .reverse(false)
    .offset(-300)
}


var controller = new ScrollMagic.Controller();
var steps = document.querySelectorAll('.inf h4, .inf span');
for (var step of steps) {
  var scene = new ScrollMagic.Scene({
    triggerElement: step
  })
    .setClassToggle(step, 'is_v')
    .addTo(controller)
    .reverse(false)
    .offset(-300)
}

var controller = new ScrollMagic.Controller();
var steps = document.querySelectorAll('.proj_p h2');
for (var step of steps) {
  var scene = new ScrollMagic.Scene({
    triggerElement: step
  })
    .setClassToggle(step, 'is_v')
    .addTo(controller)
    .reverse(false)
    .offset(-300)
}

jQuery('.h__proj').each(function () {
  var tween = TweenMax.to(jQuery('.im_g', this), 5, { className: "+=im_ga" });
  var scene = new ScrollMagic.Scene({ triggerElement: this, duration: "200%" })
    .setTween(tween)
    .addTo(controller)
    .offset(-200)
});

jQuery('.f_img').each(function () {
  var tween = TweenMax.to(jQuery('.th_img', this), 5, { className: "+=imgv" });
  var scene = new ScrollMagic.Scene({ triggerElement: this, duration: "200%" })
    .setTween(tween)
    .addTo(controller)
    .offset(-300)
});


jQuery('.h__proj_p').each(function () {
  var tween = TweenMax.to(jQuery('.im_g', this), 3, { className: "+=im_ga" });
  var scene = new ScrollMagic.Scene({ triggerElement: this, duration: "200%" })
    .setTween(tween)
    .addTo(controller)
    .offset(-300)
});


jQuery('.slide').each(function () {
  var tween = TweenMax.to(jQuery('.img', this), 2, { className: "imgb" });
  var scene = new ScrollMagic.Scene({ triggerElement: this, duration: "200%" })
    .setTween(tween)
    .addTo(controller)
    .offset(-320)
});

// Delay next page  

jQuery('a').click(function (e) {
  e.preventDefault();                   // prevent default anchor behavior
  var goTo = this.getAttribute("href"); // store anchor href

  jQuery('.lxss').addClass('load');

  setTimeout(function () {
    window.location = goTo;
  }, 300);                             // time in ms
});

jQuery(document).ready(function () {
  jQuery.cookie('visitor', 'havebeen', { expires: 1, path: '/' });
});

(function ($) {
  if ('havebeen' == jQuery.cookie('visitor')) {
    jQuery('.lxs').addClass('allreadybeen');
  }
}(jQuery));

// Hide Header on on scroll down
var didScroll;
var lastScrollTop = 0;
var delta = 5;
var navbarHeight = jQuery('nav').outerHeight();

jQuery(window).scroll(function (event) {
  didScroll = true;
});

setInterval(function () {
  if (didScroll) {
    hasScrolled();
    didScroll = false;
  }
}, 250);

function hasScrolled() {
  var st = jQuery(this).scrollTop();

  // Make sure they scroll more than delta
  if (Math.abs(lastScrollTop - st) <= delta)
    return;

  // If they scrolled down and are past the navbar, add class .nav-up.
  // This is necessary so you never see what is "behind" the navbar.
  if (st > lastScrollTop && st > navbarHeight) {
    // Scroll Down
    jQuery('nav').removeClass('nav-down').addClass('nav-up');
  } else {
    // Scroll Up
    if (st + jQuery(window).height() < jQuery(document).height()) {
      jQuery('nav').removeClass('nav-up').addClass('nav-down');
    }
  }

  lastScrollTop = st;
}



var pointer = jQuery('#custom-pointer');
var clickableLinks = jQuery('a[href], button, .nxt');

jQuery(document).ready(function() {
	pointer.removeClass('is-hover');

	jQuery(document).mousemove(function(e) {
		var positionLeft = e.clientX - pointer.width()/2;
		var positionTop = e.clientY - pointer.height()/2;
		pointer.css({'left': positionLeft, 'top': positionTop});
	});

	// Change pointer when hover links
	clickableLinks.hover( function() {
		pointer.addClass('is-hover');
	}, function() {
		pointer.removeClass('is-hover');
	});

	clickableLinks.click( function() {
		pointer.removeClass('is-hover');
	});
});