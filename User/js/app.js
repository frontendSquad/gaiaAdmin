// ========================================= Owl carousel ============================================================//
$("#home-slider-1").owlCarousel({
  loop: true,
  margin: 10,
  nav: true,
  dots: false,
  center: false,
  navText: [
    "<i class='fas fa-angle-left arrows'></i> Back",
    "Next <i class='fas fa-angle-right arrows'></i>",
  ],
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 1,
    },
    1000: {
      items: 1,
    },
  },
});
$("#courses").owlCarousel({
  loop: true,
  margin: 10,
  nav: false,
  dots: false,
  center: false,
  stagePadding: 100,
  responsive: {
    0: {
      items: 1,
      stagePadding: 0,
      
    },
    600: {
      items: 2,
      stagePadding: 0,
    },
    1000: {
      items: 3,
    },
  },
});

$(document).ready(function () {
  setTimeout(function () {
    $("#ctn-preloader").addClass("loaded");
    // Una vez haya terminado el preloader aparezca el scroll
    $("body").removeClass("no-scroll-y");

    if ($("#ctn-preloader").hasClass("loaded")) {
      // Es para que una vez que se haya ido el preloader se elimine toda la seccion preloader
      $("#preloader")
        .delay(1000)
        .queue(function () {
          $(this).remove();
        });
    }
  }, 600);
});

$( ".enter-icon" ).click(function() {
  $(this).toggleClass("fa-eye fa-eye-slash");
var input = $(".enter-input");
if (input.attr("type") === "password") {
   input.attr("type", "text");
 } else {
   input.attr("type", "password");
 }
});
$( ".enter-icon-2" ).click(function() {
  $(this).toggleClass("fa-eye fa-eye-slash");
var input = $(".enter-input-2");
if (input.attr("type") === "password") {
   input.attr("type", "text");
 } else {
   input.attr("type", "password");
 }
});
$( ".enter-icon-3" ).click(function() {
  $(this).toggleClass("fa-eye fa-eye-slash");
var input = $(".enter-input-3");
if (input.attr("type") === "password") {
   input.attr("type", "text");
 } else {
   input.attr("type", "password");
 }
});

function openNav() {
  document.getElementById("mySidenav").style.width = "100%";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}


// Fancybox Config
$('[data-fancybox="gallery"]').fancybox({
  buttons: [
    "slideShow",
    "thumbs",
    "zoom",
    "fullScreen",
    "share",
    "close"
  ],
  loop: false,
  protect: true
});
new WOW().init();
