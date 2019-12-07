// Scrollmagic
var controller = new ScrollMagic.Controller();
var steps = document.querySelectorAll('.h__proj');
for (var step of steps) {
  var scene = new ScrollMagic.Scene({
    triggerElement: step
  })
    .setClassToggle(step, 'h__vi')
    .addTo(controller)
    .offset(-250)
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
    .offset(-250)
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
    .offset(-250)
    .reverse(false)
}


var controller = new ScrollMagic.Controller();
var steps = document.querySelectorAll('.cv h3');
for (var step of steps) {
  var scene = new ScrollMagic.Scene({
    triggerElement: step
  })
    .setClassToggle(step, 'cv_hb_s')
    .addTo(controller)
    .offset(-250)
    .reverse(false)
}


var controller = new ScrollMagic.Controller();
var steps = document.querySelectorAll('.cv h4');
for (var step of steps) {
  var scene = new ScrollMagic.Scene({
    triggerElement: step
  })
    .setClassToggle(step, 'cv_h_s')
    .addTo(controller)
    .offset(-250)
    .reverse(false)
}

var controller = new ScrollMagic.Controller();
var steps = document.querySelectorAll('.cv p');
for (var step of steps) {
  var scene = new ScrollMagic.Scene({
    triggerElement: step
  })
    .setClassToggle(step, 'cv_p_s')
    .addTo(controller)
    .offset(-250)
    .reverse(false)
}


// Delay next page  

jQuery('a').click(function (e) {
  e.preventDefault();                   // prevent default anchor behavior
  var goTo = this.getAttribute("href"); // store anchor href

  jQuery('.lxss').addClass('load');

  setTimeout(function () {
    window.location = goTo;
  }, 800);                             // time in ms
}); 