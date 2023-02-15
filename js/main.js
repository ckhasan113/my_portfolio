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
