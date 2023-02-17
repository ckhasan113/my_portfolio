<?php
/*
*Header area is in "header.php" file
*/
get_header();
?>

<!-- Home Section Start -->
<section id="home_area" style="overflow: hidden;" >
  <div class="container">
    <div class="row justify-content-center align-items-center set_height_for_home">


    <div class="style_area fade_in animation_duration_5 animation_delay_1">
      <img src="/portfolio/wp-content/themes/myportfolio/image/grid.png" alt=""/> 
    </div>

    <div class="social_media_area">
      <ul>
        <li class="slideDown_900 animation_duration_5 animation_delay_14"><a href="https://www.facebook.com/tohasan1992" target="_blank"><i class="fa fa-facebook"></i></a></li>
        <li class="slideDown_900 animation_duration_5 animation_delay_12"><a href="https://www.linkedin.com/in/md-al-mehedi-hasan-b14578136/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
        <li class="slideDown_900 animation_duration_5 animation_delay_1"><a href="https://twitter.com/CKHASAN113" target="_blank"><i class="fa fa-twitter"></i></a></li>
      </ul>
    </div>


    <div class="content_area fade_in animation_duration_10 animation_delay_03">
      <div class="text text-center">
        <span class="subheading">Hey! I Am</span>
        <h1>Md Al Mehedi Hasan</h1>
        <h2>I'm working with</h2>

        <div class="text_animation">
        
          <!-- The two texts -->
          <div id="container">
            <span id="text1"></span>
            <span id="text2"></span>
          </div>

          <!-- The SVG filter used to create the merging effect -->
          <svg id="filters">
            <defs>
              <filter id="threshold">
                <!-- Basically just a threshold effect - pixels with a high enough opacity are set to full opacity, and all other pixels are set to completely transparent. -->
                <feColorMatrix in="SourceGraphic"
                    type="matrix"
                    values="1 0 0 0 0
                            0 1 0 0 0
                            0 0 1 0 0
                            0 0 0 255 -140" />
              </filter>
            </defs>
          </svg>
        </div>
      </div>
    </div>
    </div>
  </div>    
</section>
<!-- Home Section End -->

<!-- About Section Start -->
<section id="about_area">
  <div class="container">
    <div class="row justify-content-center align-center">
      <div class="col-md-10">
        <div  class="margin-top-80"></div>
        <h1>About Me</h1>
        <div class="row">
          <div class="col-md-6 about_me_image">
            <img src="/portfolio/wp-content/themes/myportfolio/image/about_me.png" alt="">
          </div>
          <div class="col-md-6">
            <h1>Hello text</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- About Section End -->

<?php wp_footer() ?>
</body>
</html>
