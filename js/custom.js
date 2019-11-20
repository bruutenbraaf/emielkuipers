// Scrollmagic
var controller = new ScrollMagic.Controller();
var tween = TweenMax.to("nav", 1, { className: "+=nav--change" });
var scene = new ScrollMagic.Scene({ triggerElement: "#main", duration: 300 })
  .setTween(tween)
  .addTo(controller);

var tween = TweenMax.to("nav .row", 1, { className: "+=row--change" });
var scene = new ScrollMagic.Scene({ triggerElement: "#main", duration: 300 })
  .setTween(tween)
  .addTo(controller);

var tween = TweenMax.to(".normal--branding", 1, { className: "+=visible--branding " });
var scene = new ScrollMagic.Scene({ triggerElement: "#main", duration: 300 })
  .setTween(tween)
  .addTo(controller);

var tween = TweenMax.to(".light--branding", 1, { className: "+=hidden--branding " });
var scene = new ScrollMagic.Scene({ triggerElement: "#main", duration: 300 })
  .setTween(tween)
  .addTo(controller);

var tween = TweenMax.to(".tp", 1, { className: "+=scr--right" });
var scene = new ScrollMagic.Scene({ triggerElement: ".marq", duration: 300 })
  .setTween(tween)
  .addTo(controller);

var tween = TweenMax.to(".bt", 1, { className: "+=scr--left" });
var scene = new ScrollMagic.Scene({ triggerElement: ".marq", duration: 300 })
  .setTween(tween)
  .addTo(controller);

var tween = TweenMax.to(".tpx", 1, { className: "+=scr--rightx" });
var scene = new ScrollMagic.Scene({ triggerElement: ".marq--vac", duration: 300 })
  .setTween(tween)
  .addTo(controller);

var tween = TweenMax.to(".btx", 1, { className: "+=scr--leftx" });
var scene = new ScrollMagic.Scene({ triggerElement: ".marq--vac", duration: 300 })
  .setTween(tween)
  .addTo(controller);

var tween = TweenMax.to(".mtgo", 1, { className: "+=mtgo--vis" });
var scene = new ScrollMagic.Scene({ triggerElement: "#main", duration: 300, offset: 100 })
  .setTween(tween)
  .addTo(controller);

var tween = TweenMax.to(".hamburger", 1, { className: "+=hamburger--vis" });
var scene = new ScrollMagic.Scene({ triggerElement: "#main", duration: 300, offset: 100 })
  .setTween(tween)
  .addTo(controller);

