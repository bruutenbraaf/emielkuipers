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


jQuery('a').click(function (e) {
  e.preventDefault();                   // prevent default anchor behavior
  var goTo = this.getAttribute("href"); // store anchor href

  jQuery('.lxss').addClass('load');

  setTimeout(function () {
    window.location = goTo;
  }, 800);                             // time in ms
}); 