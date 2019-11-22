// Scrollmagic
var controller = new ScrollMagic.Controller();
var tween = TweenMax.to(".h__proj", 1, { className: "+=h__vi" });
var scene = new ScrollMagic.Scene({ triggerElement: "#main", duration: 300 })
  .setTween(tween)
  .addTo(controller)
