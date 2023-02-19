<?php
/**
 * Header area is in "header.php" file
 */
get_header();
?>

<!-- Home Section Start -->
<section id="home_area" style="overflow: hidden;" >
  <div class="container">
    <div class="row justify-content-center align-items-center set_height_for_home">

    <div class="fadeInAnimation style_area animation_duration_5 animation_delay_1 animation_on_scroll">
      <img src="/portfolio/wp-content/themes/myportfolio/image/grid.png" alt=""/> 
    </div>

    <div class="social_media_area">
      <ul>
        <li class="slideDown900Animation animation_duration_5 animation_delay_14 animation_on_scroll"><a href="https://www.facebook.com/tohasan1992" target="_blank"><i class="fa fa-facebook"></i></a></li>
        <li class="slideDown900Animation animation_duration_5 animation_delay_12 animation_on_scroll"><a href="https://www.linkedin.com/in/md-al-mehedi-hasan-b14578136/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
        <li class="slideDown900Animation animation_duration_5 animation_delay_1 animation_on_scroll"><a href="https://twitter.com/CKHASAN113" target="_blank"><i class="fa fa-twitter"></i></a></li>
      </ul>
    </div>


    <div class="fadeInAnimation content_area animation_duration_10 animation_delay_1 animation_on_scroll">
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
    <div class="row justify-content-center align-items-center">
    <div class="margin-top-80"></div>
      
      <div class="slideFromLeft col-md-5 about_me_image animation_duration_3 animation_delay_01 animation_on_scroll">
        <img src="/portfolio/wp-content/themes/myportfolio/image/about_me.png" alt="">
      </div>
      <div class="col-md-7">

        <h1 class="slideFromRight animation_duration_5 animation_delay_01 animation_on_scroll">About Me</h1>

        <p class="slideFromRight about_me_text animation_duration_5 animation_delay_02 animation_on_scroll" align="justify">Hi, I’m Rosie! I’m a front-end web developer specializing in WordPress. Before I started freelancing, I worked as a full-time developer for a marketing and web design company with hundreds of clients. This gave me experience building and maintaining a wide variety of websites, ranging from personal blogs to online stores to large corporate sites.</p>

        <table class="about_me_tbl">
          <tr class="slideFromRight animation_duration_6 animation_delay_03 animation_on_scroll"><th>Name:</th><td>Md Al Mehedi Hasan</td></tr>
          <tr class="slideFromRight animation_duration_6 animation_delay_04 animation_on_scroll"><th>Date of birth:</th><td>January 03, 1995</td></tr>
          <tr class="slideFromRight animation_duration_6 animation_delay_05 animation_on_scroll"><th>Address:</th><td>15C, 5th Building, NHA Garden City, Ring Rd, Mohammadpur, Dhaka-1207</td></tr>
          <tr class="slideFromRight no_space animation_duration_6 animation_delay_06 animation_on_scroll"><th>Email:</th><td>ck.hasan113@gmail.com</td></tr>
          <tr class="slideFromRight animation_duration_6 animation_delay_065 animation_on_scroll"><th></th><td>hasan15-7970@diu.edu.bd</td></tr>
          <tr class="slideFromRight no_space animation_duration_6 animation_delay_07 animation_on_scroll"><th>Phone:</th><td>+88 01734-184888</td></tr>
          <tr class="slideFromRight no_space animation_duration_6 animation_delay_075 animation_on_scroll"><th></th><td>+88 01845-592277</td></tr>
        </table>

        <p class="slideFromRight about_problem_solving animation_duration_6 animation_delay_08 animation_on_scroll">More than <span>250</span> problems have been solved on various online platforms</p>

        <div class="button_wrapper slideFromRight download_cv_btn animation_duration_6 animation_delay_1 animation_on_scroll">
          <div class="animate animation_effect">
            <a href="#" class="overflow-hidden download_cv_btn_action cbtn cbtn1">
              <span>D</span><span>o</span><span>w</span><span>n</span><span>l</span><span>o</span><span>a</span><span>d</span>&nbsp;<span>C</span><span>V</span><span>&nbsp;<i class="fas fa-arrow-right"></i></span>
            </a>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
<!-- About Section End -->

<section id="resume_area" style="height: 750px;">
  <div class="margin-top-80"></div>
  <h1>h</h1>
  <div class="margin-top-80"></div>
  <h1>i</h1>
</section>

<?php wp_footer() ?>
</body>
</html>
