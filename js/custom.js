// Scrollmagic
var controller = new ScrollMagic.Controller();
var steps = document.querySelectorAll('.h__proj');
for (var step of steps) {
  var scene = new ScrollMagic.Scene({
    triggerElement: step
  })
    .setClassToggle(step, 'h__vi')
    .addTo(controller)
    .offset(-200)
    .reverse(false);
}