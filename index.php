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

        <p class="slideFromRight about_me_text animation_duration_5 animation_delay_02 animation_on_scroll" align="justify">Hi, I’m Hasan! I’m a front-end web developer specializing in WordPress. As a web developer, I have extensive experience in building and maintaining responsive and user-friendly websites and web applications. I am proficient in HTML, CSS, Bootstrap, and PHP, and have developed custom WordPress themes and plugins to meet the unique needs of clients.</p>

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

<section class="ftco-section ftco-no-pb goto-here" id="resume-section">
<div class="container">
<div class="row">
<div class="col-md-3">
<nav id="navi">
<ul>
<li><a href="#page-1">Education</a></li>
<li><a href="#page-2">Experience</a></li>
<li><a href="#page-3">Skills</a></li>
<li><a href="#page-4">Awards</a></li>
</ul>
</nav>
</div>
<div class="col-md-9">
<div id="page-1" class="page one">
<h2 class="heading">Education</h2>
<div class="resume-wrap d-flex ftco-animate">
<div class="icon d-flex align-items-center justify-content-center">
<span class="flaticon-ideas"></span>
</div>
<div class="text pl-3">
<span class="date">2014-2015</span>
<h2>Bachelor of Science in Computer Science</h2>
<span class="position">Cambridge University</span>
<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
</div>
</div>
<div class="resume-wrap d-flex ftco-animate">
<div class="icon d-flex align-items-center justify-content-center">
<span class="flaticon-ideas"></span>
</div>
<div class="text pl-3">
<span class="date">2014-2015</span>
<h2>Computer Processing Systems/Computer Software</h2>
<span class="position">Cambridge University</span>
<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
</div>
</div>
<div class="resume-wrap d-flex ftco-animate">
<div class="icon d-flex align-items-center justify-content-center">
<span class="flaticon-ideas"></span>
</div>
<div class="text pl-3">
<span class="date">2014-2015</span>
<h2>Diploma in Computer</h2>
<span class="position">Cambridge University</span>
<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
</div>
</div>
<div class="resume-wrap d-flex ftco-animate">
<div class="icon d-flex align-items-center justify-content-center">
<span class="flaticon-ideas"></span>
</div>
<div class="text pl-3">
<span class="date">2014-2015</span>
<h2>Art &amp; Creative Director</h2>
<span class="position">Cambridge University</span>
<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
</div>
</div>
</div>
<div id="page-2" class="page two">
<h2 class="heading">Experience</h2>
<div class="resume-wrap d-flex ftco-animate">
<div class="icon d-flex align-items-center justify-content-center">
<span class="flaticon-ideas"></span>
</div>
<div class="text pl-3">
<span class="date">2014-2015</span>
<h2>Software Developer</h2>
<span class="position">Cambridge University</span>
<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
</div>
</div>
<div class="resume-wrap d-flex ftco-animate">
<div class="icon d-flex align-items-center justify-content-center">
<span class="flaticon-ideas"></span>
</div>
<div class="text pl-3">
<span class="date">2014-2015</span>
<h2>Web Designer</h2>
<span class="position">Cambridge University</span>
<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
</div>
</div>
<div class="resume-wrap d-flex ftco-animate">
<div class="icon d-flex align-items-center justify-content-center">
<span class="flaticon-ideas"></span>
</div>
<div class="text pl-3">
<span class="date">2014-2015</span>
<h2>Web Marketing</h2>
<span class="position">Cambridge University</span>
<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
</div>
</div>
<div class="resume-wrap d-flex ftco-animate">
<div class="icon d-flex align-items-center justify-content-center">
<span class="flaticon-ideas"></span>
</div>
<div class="text pl-3">
<span class="date">2014-2015</span>
<h2>Art &amp; Creative Director</h2>
<span class="position">Side Tech</span>
<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
</div>
</div>
<div class="resume-wrap d-flex ftco-animate">
<div class="icon d-flex align-items-center justify-content-center">
<span class="flaticon-ideas"></span>
</div>
<div class="text pl-3">
<span class="date">2014-2015</span>
<h2>Wordpress Developer</h2>
<span class="position">Cambridge University</span>
<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
</div>
</div>
<div class="resume-wrap d-flex ftco-animate">
<div class="icon d-flex align-items-center justify-content-center">
<span class="flaticon-ideas"></span>
</div>
<div class="text pl-3">
<span class="date">2017-2018</span>
<h2>UI/UX Designer</h2>
<span class="position">Cambridge University</span>
<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
</div>
</div>
</div>
<div id="page-3" class="page three">
<h2 class="heading">Skills</h2>
<div class="row progress-circle mb-5">
<div class="col-lg-4 mb-4">
<div class="bg-white rounded-lg shadow p-4">
<h2 class="h5 font-weight-bold text-center mb-4">CSS</h2>

<div class="progress mx-auto" data-value='90'>
<span class="progress-left">
<span class="progress-bar border-primary"></span>
</span>
<span class="progress-right">
<span class="progress-bar border-primary"></span>
</span>
<div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
<div class="h2 font-weight-bold">90<sup class="small">%</sup></div>
</div>
</div>


<div class="row text-center mt-4">
<div class="col-6 border-right">
<div class="h4 font-weight-bold mb-0">28%</div><span class="small text-gray">Last week</span>
</div>
<div class="col-6">
<div class="h4 font-weight-bold mb-0">60%</div><span class="small text-gray">Last month</span>
</div>
</div>

</div>
</div>
<div class="col-lg-4 mb-4">
 <div class="bg-white rounded-lg shadow p-4">
<h2 class="h5 font-weight-bold text-center mb-4">HTML</h2>

<div class="progress mx-auto" data-value='80'>
<span class="progress-left">
<span class="progress-bar border-primary"></span>
</span>
<span class="progress-right">
<span class="progress-bar border-primary"></span>
</span>
<div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
<div class="h2 font-weight-bold">80<sup class="small">%</sup></div>
</div>
</div>


<div class="row text-center mt-4">
<div class="col-6 border-right">
<div class="h4 font-weight-bold mb-0">28%</div><span class="small text-gray">Last week</span>
</div>
<div class="col-6">
<div class="h4 font-weight-bold mb-0">60%</div><span class="small text-gray">Last month</span>
</div>
</div>

</div>
</div>
<div class="col-lg-4 mb-4">
<div class="bg-white rounded-lg shadow p-4">
<h2 class="h5 font-weight-bold text-center mb-4">jQuery</h2>

<div class="progress mx-auto" data-value='75'>
<span class="progress-left">
<span class="progress-bar border-primary"></span>
</span>
<span class="progress-right">
<span class="progress-bar border-primary"></span>
</span>
<div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
<div class="h2 font-weight-bold">75<sup class="small">%</sup></div>
</div>
</div>


<div class="row text-center mt-4">
<div class="col-6 border-right">
<div class="h4 font-weight-bold mb-0">28%</div><span class="small text-gray">Last week</span>
</div>
<div class="col-6">
<div class="h4 font-weight-bold mb-0">60%</div><span class="small text-gray">Last month</span>
</div>
</div>

</div>
</div>
</div>
<div class="row">
<div class="col-md-6 animate-box">
<div class="progress-wrap ftco-animate">
<h3>Photoshop</h3>
<div class="progress">
<div class="progress-bar color-1" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%">
<span>90%</span>
</div>
</div>
</div>
</div>
<div class="col-md-6 animate-box">
<div class="progress-wrap ftco-animate">
<h3>jQuery</h3>
<div class="progress">
<div class="progress-bar color-2" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width:85%">
<span>85%</span>
</div>
</div>
</div>
</div>
<div class="col-md-6 animate-box">
<div class="progress-wrap ftco-animate">
<h3>HTML5</h3>
<div class="progress">
<div class="progress-bar color-3" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width:95%">
<span>95%</span>
</div>
</div>
</div>
</div>
<div class="col-md-6 animate-box">
<div class="progress-wrap ftco-animate">
<h3>CSS3</h3>
<div class="progress">
<div class="progress-bar color-4" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%">
<span>90%</span>
</div>
</div>
</div>
</div>
<div class="col-md-6 animate-box">
<div class="progress-wrap ftco-animate">
<h3>WordPress</h3>
<div class="progress">
<div class="progress-bar color-5" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
<span>70%</span>
</div>
</div>
</div>
</div>
<div class="col-md-6 animate-box">
<div class="progress-wrap ftco-animate">
<h3>SEO</h3>
<div class="progress">
<div class="progress-bar color-6" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">
<span>80%</span>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="page-4" class="page four">
<h2 class="heading">Awards</h2>
<div class="resume-wrap d-flex ftco-animate">
<div class="icon d-flex align-items-center justify-content-center">
<span class="flaticon-ideas"></span>
</div>
<div class="text pl-3">
<span class="date">2014-2015</span>
<h2>Top 10 Web Developer</h2>
<span class="position">Cambridge University</span>
<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
</div>
</div>
<div class="resume-wrap d-flex ftco-animate">
<div class="icon d-flex align-items-center justify-content-center">
<span class="flaticon-ideas"></span>
</div>
<div class="text pl-3">
<span class="date">2014-2015</span>
<h2>Top 5 LeaderShip Exellence Winner</h2>
<span class="position">Cambridge University</span>
<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
</div>
</div>
<div class="resume-wrap d-flex ftco-animate">
<div class="icon d-flex align-items-center justify-content-center">
<span class="flaticon-ideas"></span>
</div>
<div class="text pl-3">
<span class="date">2014-2015</span>
<h2>Top 4 Web Tester</h2>
<span class="position">Cambridge University</span>
<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
</div>
</div>
<div class="resume-wrap d-flex ftco-animate">
<div class="icon d-flex align-items-center justify-content-center">
<span class="flaticon-ideas"></span>
</div>
<div class="text pl-3">
<span class="date">2014-2015</span>
<h2>Art &amp; Creative Director</h2>
<span class="position">Cambridge University</span>
<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<?php wp_footer() ?>
</body>
</html>
