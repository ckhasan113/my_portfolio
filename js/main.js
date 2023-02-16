(function ($) {
  "use strict";

  jQuery(document).ready(function ($) {
    //Sticky Navigationbar
    function stickyNav() {
      window.onscroll = function () {
        myFunction();
      };

      var navbar = document.getElementById("header_area");
      var sticky = navbar.offsetTop;

      function myFunction() {
        if (window.pageYOffset > sticky) {
          navbar.classList.add("sticky");
        } else {
          navbar.classList.remove("sticky");
        }
      }
    }
    stickyNav();

    //Navigation menu active class
    var menuLink = document.querySelectorAll(".menu_link");

    menuLink.forEach(function (item) {
      item.addEventListener(
        "click",
        function (e) {
          menuLink.forEach(function (item) {
            item.classList.remove("active");
          });
          item.classList.add("active");
        },
        false
      );
    });

    //Navigation menu toogle check
    $('#check').click(function(){
      $('#header_area .menu_area ul').toggleClass('show');
    });

    //Click enent for any element from the body
    $('body').on('click', function (e) {

      // Navigation menu hide from anywhere click
      if($(e.target).closest('#check').length || $(e.target).closest('#header_menu').length){
        return;
      }
      if($('#header_area .menu_area ul').hasClass('show')){
        $('#header_area .menu_area ul').toggleClass('show');
      }
    });  

    //Pre Loader
    // function handlePreloader() {
    //   if ($(".preloader").length) {
    //     $(".preloader").delay(200).fadeOut(500);
    //   }
    // }
    // handlePreloader();

  });
  

  //jquery load function start
  jQuery(window).on("load", function () {});

})(jQuery);


const elts = {
  text1: document.getElementById("text1"),
  text2: document.getElementById("text2") };


// The strings to morph between. You can change these to anything you want!
const texts = ["HTML", "CSS", "BootStrap", "PHP", "WordPress Theme", "WordPress Plugin"];

// Controls the speed of morphing.
const morphTime = 1.5;
const cooldownTime = 0.50;

let textIndex = texts.length - 1;
let time = new Date();
let morph = 0;
let cooldown = cooldownTime;

elts.text1.textContent = texts[textIndex % texts.length];
elts.text2.textContent = texts[(textIndex + 1) % texts.length];

function doMorph() {
  morph -= cooldown;
  cooldown = 0;

  let fraction = morph / morphTime;

  if (fraction > 1) {
    cooldown = cooldownTime;
    fraction = 1;
  }

  setMorph(fraction);
}

// A lot of the magic happens here, this is what applies the blur filter to the text.
function setMorph(fraction) {
  // fraction = Math.cos(fraction * Math.PI) / -2 + .5;

  elts.text2.style.filter = `blur(${Math.min(8 / fraction - 8, 100)}px)`;
  elts.text2.style.opacity = `${Math.pow(fraction, 0.4) * 100}%`;

  fraction = 1 - fraction;
  elts.text1.style.filter = `blur(${Math.min(8 / fraction - 8, 100)}px)`;
  elts.text1.style.opacity = `${Math.pow(fraction, 0.4) * 100}%`;

  elts.text1.textContent = texts[textIndex % texts.length];
  elts.text2.textContent = texts[(textIndex + 1) % texts.length];
}

function doCooldown() {
  morph = 0;

  elts.text2.style.filter = "";
  elts.text2.style.opacity = "100%";

  elts.text1.style.filter = "";
  elts.text1.style.opacity = "0%";
}

// Animation loop, which is called every frame.
function animate() {
  requestAnimationFrame(animate);

  let newTime = new Date();
  let shouldIncrementIndex = cooldown > 0;
  let dt = (newTime - time) / 1000;
  time = newTime;

  cooldown -= dt;

  if (cooldown <= 0) {
    if (shouldIncrementIndex) {
      textIndex++;
    }

    doMorph();
  } else {
    doCooldown();
  }
}

// Start the animation.
animate();

