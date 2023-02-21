(function ($) {
  "use strict";

  jQuery(document).ready(function ($) {
    // Pre Loader
    function handlePreloader() {
      if ($(".preloader").length) {
        $(".preloader").delay(200).fadeOut(500);
      }
    }
    handlePreloader();

    // Sticky Navigationbar
    function stickyNav() {
      window.onscroll = function () {
        myFunction();
      };

      const navbar = document.getElementById("header_area");
      const sticky = navbar.offsetTop;

      function myFunction() {
        if (window.pageYOffset > sticky) {
          navbar.classList.add("sticky");
        } else {
          navbar.classList.remove("sticky");
        }
      }
    }
    stickyNav();

    // Navigation menu active class
    const menuLink = document.querySelectorAll(".menu_link");

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

    // Navigation menu toogle check
    $("#check").click(function () {
      $("#header_area .menu_area ul").toggleClass("show");
    });

    // Click enent for any element from the body
    $("body").on("click", function (e) {
      // Navigation menu hide from anywhere click
      if (
        $(e.target).closest("#check").length ||
        $(e.target).closest("#header_menu").length
      ) {
        return;
      }
      if ($("#header_area .menu_area ul").hasClass("show")) {
        $("#header_area .menu_area ul").toggleClass("show");
      }
    });

    // On go to specific section add extra hight
    const onePageClick = function () {
      $(document).on("click", '#nav_menu_bar a[href^="#"]', function (event) {
        event.preventDefault();

        const href = $.attr(this, "href");

        $("html, body").animate(
          {
            scrollTop: $(href).offset().top - 80,
          },
          10,
          function () {
            // window.location.hash = href;
          }
        );
      });
      $(document).on(
        "click",
        '#resume_menu_bar a[href^="#"]',
        function (event) {
          event.preventDefault();

          const href = $.attr(this, "href");

          $("html, body").animate(
            {
              scrollTop: $(href).offset().top - 120,
            },
            10,
            function () {
              // window.location.hash = href;
            }
          );
        }
      );
    };

    onePageClick();

    // Download_CV_Btn_Text_Animation
    $(function () {
      $(".download_cv_btn_action").hover(function () {
        const classes = $(".download_cv_btn_action").parent().attr("class");
        $(".download_cv_btn_action").parent().attr("class", "animate");
        const indicator = $(".download_cv_btn_action");
        setTimeout(function () {
          $(indicator).parent().addClass(classes);
        }, 20);
      });
    });

    // Resume menu current class
    const resumeMenuLink = document.querySelectorAll(".resume_menu_link");

    resumeMenuLink.forEach(function (item) {
      item.addEventListener(
        "click",
        function (e) {
          resumeMenuLink.forEach(function (item) {
            item.classList.remove("current");
          });
          item.classList.add("current");
        },
        false
      );
    });
  });


  // const elements = document.querySelectorAll(".animation_on_scroll");

  // $(window).resize(function () {
  //   if ($(window).width() <= 991) {
  //     elements.forEach((element) => {
  //       if (element.classList.contains("animation_delay_01")) {
  //         element.classList.remove("animation_delay_01");
  //       }else if (element.classList.contains("animation_delay_02")) {
  //         element.classList.remove("animation_delay_02");
  //       }else if (element.classList.contains("animation_delay_03")) {
  //         element.classList.remove("animation_delay_03");
  //       } else if (element.classList.contains("animation_delay_04")) {
  //         element.classList.remove("animation_delay_04");
  //       } else if (element.classList.contains("animation_delay_05")) {
  //         element.classList.remove("animation_delay_05");
  //       } else if (element.classList.contains("animation_delay_06")) {
  //         element.classList.remove("animation_delay_06");
  //       } else if (element.classList.contains("animation_delay_065")) {
  //         element.classList.remove("animation_delay_065");
  //       } else if (element.classList.contains("animation_delay_07")) {
  //         element.classList.remove("animation_delay_07");
  //       } else if (element.classList.contains("animation_delay_075")) {
  //         element.classList.remove("animation_delay_075");
  //       } else if (element.classList.contains("animation_delay_08")) {
  //         element.classList.remove("animation_delay_08");
  //       } else if (element.classList.contains("animation_delay_1")) {
  //         element.classList.remove("animation_delay_1");
  //       }
  //     });
  //   }
  // });


  // jquery load function start
  
  jQuery(window).on("load", function () {});
})(jQuery);

// TextAnimation
const elts = {
  text1: document.getElementById("text1"),
  text2: document.getElementById("text2"),
};

// The strings to morph between. You can change these to anything you want!
const texts = [
  "HTML",
  "CSS",
  "Bootstrap",
  "JavaScript",
  "PHP",
  "WordPress Theme",
  "WordPress Plugin",
];

// Controls the speed of morphing.
const morphTime = 1.5;
const cooldownTime = 0.5;

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

// Active_Animation_When_It_Is_In_View
const elements = document.querySelectorAll(".animation_on_scroll");

window.addEventListener("scroll", checkelEments);

checkelEments();

function checkelEments() {
  const clientHeight = document.documentElement.clientHeight;

  elements.forEach((element) => {
    if (
      element.getBoundingClientRect().y +
        (element.getBoundingClientRect().height * 2) / 7 <
      clientHeight
    ) {
      if (element.classList.contains("fadeIn")) {-
        element.classList.add("fadeInAnimation");
      } else if (element.classList.contains("slideDown")) {
        element.classList.add("slideDownAnimation");
      } else if (element.classList.contains("slideDown900")) {
        element.classList.add("slideDown900Animation");
      } else if (element.classList.contains("slideUpAndLeft")) {
        element.classList.add("slideUpAndLeftAnimation");
      } else if (element.classList.contains("slideDownAndRight")) {
        element.classList.add("slideDownAndRightAnimation");
      } else if (element.classList.contains("slideFromLeft")) {
        element.classList.add("slideFromLeftAnimation");
      } else if (element.classList.contains("slideFromRight")) {
        element.classList.add("slideFromRightAnimation");
      } else if (element.classList.contains("slideFromRight900")) {
        element.classList.add("slideFromRight900Animation");
      }
    }
  });
}

// Active_Menu_On_View
const bodyOfElements = document.querySelectorAll(".menu_activate_on_view_body");
const menuSections = document.querySelectorAll(".menu_active_on_view");
const menuItems = document.querySelectorAll(".menu_link");

let percentage = 0;

function menu_heighlight() {
  let active = 0;
  const innerHeight = window.innerHeight / 100;
  const elementHeight = innerHeight * percentage;
  const scrollHeight = window.scrollY + elementHeight;

  // Check_Which_Part_Is_In_View
  menuSections.forEach(function (section, sectionIndex, elementWithClass) {
    if (scrollHeight > section.offsetTop - window.innerHeight / 4) {
      active = sectionIndex;
    }
  });

  // Active_Corresponding_Menu
  menuItems.forEach(function (menuItem, menuIndex, elementWithClass) {
    if (active === menuIndex) {
      menuItem.classList.add("active");
    } else {
      menuItem.classList.remove("active");
    }
  });
}

function element_srcoll_percentage(element) {
  let rect = element.getBoundingClientRect();
  if (Math.sign(rect.top) == -1) {
    let value = Math.abs(rect.top);
    let inc = (rect.height - window.innerHeight) / 100;
    percentage = value / inc;
    if (percentage > 100) {
      percentage = 100;
    } else {
      percentage = 0;
    }
    return percentage;
  }
}

document.onscroll = function () {
  bodyOfElements.forEach((element) => {
    percentage = element_srcoll_percentage(element);
    menu_heighlight();
  });
};
// document.onscroll();

// Make_Resume_Menu_Sticky_It_Is_In_View
const resumeElement = document.querySelector(".resume_area_wrap");
const resumeNav = document.querySelector(".resume_nav");

window.addEventListener("scroll", checkelResumeEments);

checkelResumeEments();

function checkelResumeEments() {
  const bottom = resumeElement.getBoundingClientRect().bottom;
  console.log(bottom);

  if (resumeElement.getBoundingClientRect().y - 20 <= 0 && bottom - 240 >= 0) {
    resumeNav.classList.add("stickt_resume_menu");
  } else {
    resumeNav.classList.remove("stickt_resume_menu");
  }
}

// Number Counter Animation
const valueDisplays = document.querySelectorAll(".counter");

window.addEventListener("scroll", counterValueOnDisplay);

function counterValueOnDisplay() {
  valueDisplays.forEach((valueDisplay) => {
    let counterDone = valueDisplay.getAttribute("isCounterDone");

    if (
      counterDone != "done" &&
      valueDisplay.getBoundingClientRect().y <= window.innerHeight - 20
    ) {
      let interval = parseInt(valueDisplay.getAttribute("data-delay"));
      let startValue = 0;
      let endValue = parseInt(valueDisplay.getAttribute("data-val"));
      const duration = Math.floor(interval / endValue);
      valueDisplay.setAttribute("isCounterDone", "done");
      let counter = setInterval(() => {
        startValue += 1;
        valueDisplay.textContent = startValue;
        if (startValue == endValue) {
          clearInterval(counter);
        }
      }, duration);
    }
  });
}
