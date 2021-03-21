// // // var imagesize = $('#loading-img').width();

// $(window).on("load", function() {
//   $(".loading-page").fadeOut(2000, scrollOn);
//   // // imagesize = imagesize + 100;
//   // // $('#loading-img').width(imagesize)("slow");
// });

// function scrollOn() {
//   document.querySelector("body").classList.remove("scroll-off");
//   document.querySelector("body").classList.toggle("scroll-on");
// }



var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("main-menu").style.top = "0";
  } else {
    document.getElementById("main-menu").style.top = "-200px";
  }
  prevScrollpos = currentScrollPos;
}



var hamburger_button = document.querySelector("#hamburger-button");
var nav = document.querySelector("#nav");
var body = document.querySelector("body");


hamburger_button.addEventListener("click", () => {
  body.classList.toggle("scroll-off");
  nav.classList.toggle("active");
})

var link1 = document.querySelector("#link1");
link1.addEventListener("click", () => {
  body.classList.remove("scroll-off");
  nav.classList.remove("active");
})

var link2 = document.querySelector("#link2");
link2.addEventListener("click", () => {
  body.classList.remove("scroll-off");
  nav.classList.remove("active");
})

var link3 = document.querySelector("#link3");
link3.addEventListener("click", () => {
  body.classList.remove("scroll-off");
  nav.classList.remove("active");
})

var link4 = document.querySelector("#link4");
link4.addEventListener("click", () => {
  body.classList.remove("scroll-off");
  nav.classList.remove("active");
})

var hamburger_overlay = document.querySelector("#hamburger-overlay");
hamburger_overlay.addEventListener("click", () => {
  body.classList.remove("scroll-off");
  nav.classList.remove("active");
})



$(document).ready(function() {
  $(".scroll-animation").click(function(event) {
    event.preventDefault();
    $("html, body").animate({
      scrollTop: $($(this).attr("href")).offset().top
    }, 500);
  });
});



var igFrame = document.querySelector(".ig-embed");
header = igFrame.contentDocument.querySelector("Header");
header.remove();