<?php

/**
 * Header area is in "header.php" file
 */
get_header();
?>

<div class="menu_activate_on_view_body">

  <!-- Home Section Start -->
  <section id="home_area" class="menu_active_on_view">
    <div class="container">
      <div class="row justify-content-center align-items-center set_height_for_home">

        <div class="fadeInAnimation style_area animation_duration_5 animation_delay_1 animation_on_scroll">
          <img src="/portfolio/wp-content/themes/myportfolio/image/grid.png" alt="" />
        </div>

        <div class="social_media_area">
          <ul>
            <li class="slideDown900Animation animation_duration_5 animation_delay_12 animation_on_scroll"><a href="https://www.facebook.com/tohasan1992" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li class="slideDown900Animation animation_duration_5 animation_delay_11 animation_on_scroll"><a href="https://www.linkedin.com/in/md-al-mehedi-hasan-b14578136/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
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
                    <feColorMatrix in="SourceGraphic" type="matrix" values="1 0 0 0 0
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
  <section id="about_area" class="menu_active_on_view">
    <div class="about_area_wrap mt-5">
      <div class="container">
        <div class="row justify-content-center align-items-center">

          <div class="slideUp col-md-5 about_me_image animation_duration_3 animation_delay_01 animation_on_scroll">
            <img src="/portfolio/wp-content/themes/myportfolio/image/about_me_2.png" alt="">
          </div>
          <div class="col-md-7">

            <h1 class="slideFromRight animation_duration_4 animation_delay_01 animation_on_scroll">About Me</h1>

            <p class="slideFromRight about_me_text animation_duration_4 animation_delay_02 animation_on_scroll" align="justify">Hi, I&#39;m Hasan! I&#39;m a front-end web developer specializing in WordPress. As a web developer, I have extensive experience in building and maintaining responsive and user-friendly websites as well as web applications. I am proficient in HTML, CSS, Bootstrap, PHP, and have developed custom WordPress themes and plugins to meet the unique needs of clients.</p>

            <table class="about_me_tbl">
              <tr class="slideFromRight animation_duration_4 animation_delay_03 animation_on_scroll">
                <th>Name:</th>
                <td>Md Al Mehedi Hasan</td>
              </tr>
              <tr class="slideFromRight animation_duration_4 animation_delay_04 animation_on_scroll">
                <th>Date of birth:</th>
                <td>January 03, 1995</td>
              </tr>
              <tr class="slideFromRight animation_duration_4 animation_delay_05 animation_on_scroll">
                <th>Address:</th>
                <td>15C, 5th Building, NHA Garden City, Ring Rd, Mohammadpur, Dhaka-1207</td>
              </tr>
              <tr class="slideFromRight no_space animation_duration_4 animation_delay_06 animation_on_scroll">
                <th>Email:</th>
                <td>ck.hasan113@gmail.com</td>
              </tr>
              <tr class="slideFromRight animation_duration_4 animation_delay_065 animation_on_scroll">
                <th></th>
                <td>hasan15-7970@diu.edu.bd</td>
              </tr>
              <tr class="slideFromRight no_space animation_duration_4 animation_delay_07 animation_on_scroll">
                <th>Phone:</th>
                <td>+88 01734-184888</td>
              </tr>
              <tr class="slideFromRight no_space animation_duration_4 animation_delay_075 animation_on_scroll">
                <th></th>
                <td>+88 01845-592277</td>
              </tr>
            </table>

            <p class="slideFromRight about_problem_solving animation_duration_4 animation_delay_08 animation_on_scroll"><span class="counter" data-val="250" data-delay="7000" isCounterDone="no">0</span><span>+</span> problems have been solved on various online platforms</p>

            <div class="button_wrapper slideFromRight download_cv_btn animation_duration_4 animation_delay_1 animation_on_scroll">
              <div class="animate animation_effect">
                <a href="/portfolio/wp-content/themes/myportfolio/image/Md_Al_Mehedi_Hasan.pdf" class="overflow-hidden download_cv_btn_action cbtn cbtn1" target="_blank">
                  <span>D</span><span>o</span><span>w</span><span>n</span><span>l</span><span>o</span><span>a</span><span>d</span>&nbsp;<span>C</span><span>V</span><span>&nbsp;<i class="fas fa-arrow-right"></i></span>
                </a>
              </div>
            </div>

            <!-- using a tag href to view cv. We can use iframe to view pdf on page -->
            <!-- <iframe class="resume_pdf_viewer" src="/portfolio/wp-content/themes/myportfolio/image/Md_Al_Mehedi_Hasan.pdf"></iframe> -->

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- About Section End -->


  <!-- Resume Section Area Start -->
  <section id="resume_area" class="menu_active_on_view resume_menu_active_on_view">
    <div class="resume_area_wrap">
      <div class="container">
        <div class="row">
          <div class="margin-top-80"></div>

          <!-- Resume Nav Menu -->
          <div class="col-lg-3" id="resume_menu_bar">
            <nav class="resume_nav element_background_primary animation_on_scroll slideFromLeft animation_duration_2 animation_delay_01">
              <ul class="m-0 p-0">
                <li><a class="resume_menu_link current" href="#page_education">Education</a></li>
                <li><a class="resume_menu_link" href="#page_experience">Experience</a></li>
                <li><a class="resume_menu_link" href="#page_skills">Skills</a></li>
                <li><a class="resume_menu_link" href="#page_certificates">Certificates</a></li>
              </ul>
            </nav>
          </div>

          <!-- Resume Menu Items -->
          <div class="col-lg-9">

            <!-- Education_Area -->
            <div id="page_education" class="resume_menu_active_on_view resume_menu_items">

              <div class="resume_page_wrap">
                <h2 class="heading animation_on_scroll slideUp animation_duration_2 animation_delay_01">Education</h2>

                <div class="resume_wrap border-bottom d-flex animation_on_scroll slideUp animation_duration_2 animation_delay_01">
                  <div class="resume_icon d-flex justify-content-center align-items-center">
                    <i class="fas fa-book"></i>
                  </div>
                  <div class="resume_text ps-4">
                    <p class="date m-0"><span class="start_date">May, 2016</span> &#8211; <span class="end_date">December, 2019</span></p>
                    <h3 class="position">B.Sc (Hons) in Computer Science &#38; Engineering (CSE)</h3>
                    <span class="name">Daffodil International University</span>
                    <p class="address m-0">102 Sukrabad Rd, Dhaka 1207 <span class="extra">(Old Campus)</span></p>
                    <p class="outcomes">3.66 out of 4.00</p>
                  </div>
                </div>

                <div class="resume_wrap border-bottom d-flex animation_on_scroll slideUp animation_duration_2 animation_delay_02">
                  <div class="resume_icon d-flex justify-content-center align-items-center">
                    <i class="fas fa-book"></i>
                  </div>
                  <div class="resume_text ps-4">
                    <p class="date m-0"><span class="start_date">2010</span> &#8211; <span class="end_date">2012</span></p>
                    <h3 class="position">Higher Secondary School Certificate (HSC)</h3>
                    <span class="name">Nazipur Govt. College</span>
                    <p class="address m-0">Nazipur, Patnitala, Naogaon</p>
                    <p class="outcomes">5.00 out of 5.00</p>
                  </div>
                </div>

                <div class="resume_wrap border-bottom d-flex animation_on_scroll slideUp animation_duration_2 animation_delay_03">
                  <div class="resume_icon d-flex justify-content-center align-items-center">
                    <i class="fas fa-book"></i>
                  </div>
                  <div class="resume_text ps-4">
                    <p class="date m-0"><span class="start_date">2005</span> &#8211; <span class="end_date">2010</span></p>
                    <h3 class="position">Secondary School Certificate (SSC)</h3>
                    <span class="name">Nazipur High School</span>
                    <p class="address m-0">Nazipur, Patnitala, Naogaon</p>
                    <p class="outcomes">5.00 out of 5.00</p>
                  </div>
                </div>

              </div>

            </div>

            <!-- Experience_Area -->
            <div id="page_experience" class="resume_menu_active_on_view resume_menu_items">

              <div class="resume_page_wrap">

                <h2 class="heading animation_on_scroll slideUp animation_duration_3 animation_delay_04">Experience</h2>

                <div class="resume_wrap border-bottom d-flex animation_on_scroll slideUp animation_duration_2 animation_delay_01">
                  <div class="resume_icon d-flex justify-content-center align-items-center">
                    <i class="fas fa-laptop"></i>
                  </div>
                  <div class="resume_text ps-4">
                    <p class="date m-0"><span class="start_date">September, 2021</span> &#8211; &#8211; <span class="end_date"></span></p>
                    <h3 class="position">Project co-ordinator</h3>
                    <span class="name">WeTech Digital</span>
                    <p class="address m-0">44 F/7(Rongon Tower), West Panthapath, Dhaka.</p>
                    <p class="outcomes">
                    <ul class="outcomes_list">
                      <li class="outcome">Communication with project team members, and clients.</li>
                      <li class="outcome">Resource allocation.</li>
                      <li class="outcome">Quality control.</li>
                      <li class="outcome">Technical support for software applications.</li>
                      <li class="outcome">HR support.</li>
                    </ul>
                    </p>
                  </div>
                </div>

                <div class="resume_wrap border-bottom d-flex animation_on_scroll slideUp animation_duration_2 animation_delay_02">
                  <div class="resume_icon d-flex justify-content-center align-items-center">
                    <i class="fas fa-laptop"></i>
                  </div>
                  <div class="resume_text ps-4">
                    <p class="date m-0"><span class="start_date">March, 2021</span> &#8211; <span class="end_date">Jully, 2022</span></p>
                    <h3 class="position">IT &#38; Admin Manager</h3>
                    <span class="name">Sobuj Group of Companies</span>
                    <p class="address m-0">Nazipur, Patnitala, Naogaon</p>
                    <p class="outcomes">
                    <ul class="outcomes_list">
                      <li class="outcome">IT consultant.</li>
                      <li class="outcome">HR support.</li>
                      <li class="outcome">Client management.</li>
                      <li class="outcome">Managing service center.</li>
                    </ul>
                    </p>
                  </div>
                </div>

                <div class="resume_wrap border-bottom d-flex animation_on_scroll slideUp animation_duration_2 animation_delay_03">
                  <div class="resume_icon d-flex justify-content-center align-items-center">
                    <i class="fas fa-laptop"></i>
                  </div>
                  <div class="resume_text ps-4">
                    <p class="date m-0"><span class="start_date">June, 2019</span> &#8211; <span class="end_date">February, 2021</span></p>
                    <h3 class="position">Android Developer</h3>
                    <span class="name">aaalooo Healthcare Limited</span>
                    <p class="address m-0">Gulshan Garace, House # 8, Flat # 6B, Gulshan - 1</p>
                    <p class="outcomes">
                    <ul class="outcomes_list">
                      <li class="outcome">Creating mobile applications.</li>
                      <li class="outcome">Debugging problems.</li>
                      <li class="outcome">Helping to create, update, and debug API.</li>
                      <li class="outcome">Publishing mobile app.</li>
                    </ul>
                    </p>
                  </div>
                </div>

              </div>

            </div>

            <!-- Skills_Area -->
            <?php
            $data_delay = 3000;
            $linear_data_delay = 700;

            $data_value_html = 95;
            $data_value_css = 90;
            $data_value_js = 80;
            $data_value_php = 85;

            $progress_bar_value_html = (357 - (357 * ($data_value_html / 100)));
            $progress_bar_value_css = (357 - (357 * ($data_value_css / 100)));
            $progress_bar_value_js = (357 - (357 * ($data_value_js / 100)));
            $progress_bar_value_js = (357 - (357 * ($data_value_php / 100)));

            $last_week_html_value = 28;
            $last_month_html_value = 60;

            $last_week_css_value = 28;
            $last_month_css_value = 60;

            $last_week_js_value = 28;
            $last_month_js_value = 60;

            $last_week_php_value = 28;
            $last_month_php_value = 60;

            $c_progress_value = 85;
            $java_progress_value = 80;
            $jQuery_progress_value = 80;
            $android_progress_value = 70;
            $database_progress_value = 60;
            $wp_theme_progress_value = 90;
            $photoshop_progress_value = 30;
            $wp_plugin_progress_value = 30;
            ?>

            <!-- Circular progress bar color css start -->
            <style>
              <?php /* Add "<?php echo (variable/function name, that take the value from database which is set through CMS)" in color code vale's place ?> */ ?> :root {
                --progress_bar_color: #0045ff;
              }

              /* Gradient color circile */
              circle {
                fill: none;
                stroke: var(--progress_bar_color);
                stroke-width: 5px;
                stroke-dasharray: 357;
                stroke-dashoffset: 357;
              }

              /* Color cirle posiiton */
              svg {
                width: 120px;
                height: 120px;
                position: absolute;
                top: 0;
                left: 0;
              }

              .progressAnimationData {
                animation-duration: <?php echo ($data_delay / 1000); ?>s;
                animation-fill-mode: both;
              }

              .htmlProgressAnimation {
                animation-name: htmlProgressAnimation;
              }

              @keyframes htmlProgressAnimation {
                100% {
                  stroke-dashoffset: <?php echo $progress_bar_value_html; ?>;
                }
              }

              .cssProgressAnimation {
                animation-name: cssProgressAnimation;
              }

              @keyframes cssProgressAnimation {
                100% {
                  stroke-dashoffset: <?php echo $progress_bar_value_css; ?>;
                }
              }

              .jsProgressAnimation {
                animation-name: jsProgressAnimation;
              }

              @keyframes jsProgressAnimation {
                100% {
                  stroke-dashoffset: <?php echo $progress_bar_value_js; ?>;
                }
              }
            </style>
            <!-- Circular progress bar color css end -->

            <div id="page_skills" class="resume_menu_active_on_view resume_menu_items">

              <div class="resume_page_wrap">

                <h2 class="heading animation_on_scroll slideUp animation_duration_3 animation_delay_04">Skills</h2>

                <div class="row progress-circle mb-2">

                  <div class="col-lg-3 mb-4 animation_on_scroll slideUp animation_duration_3 animation_delay_01">

                    <div class="element_background_primary shadow border_radious_15 p-4">

                      <h2 class="small_heading mb-4 text-center">HTML</h2>

                      <div class="circular_progress_bar mx-auto">
                        <div class="outer">
                          <div class="inner">
                            <div id="number">
                              <span class="counter" data-val="<?php echo $data_value_html ?>" data-delay="<?php echo $data_delay ?>" isCounterDone="no">0</span>%
                            </div>
                          </div>
                        </div>

                        <svg version="1.1">
                          <!-- <defs>
                            <linearGradient id="GradientColor">
                              <?php /* use stop-color="<?php echo (variable/function name, that take the value from database which is set through CMS)" ?> */ ?>
                              <stop offset="0%" stop-color="#bd29f2" />
                              <stop offset="100%" stop-color="#0045ff" />
                            </linearGradient>
                          </defs> -->

                          <circle class="htmlProgress circle_progress_animation progressAnimationData" data-val="<?php echo $data_value_html ?>" data-delay="<?php echo $data_delay ?>" isProgressDone="no" cx="60" cy="60" r="57" stroke-linecap="round" />

                        </svg>

                      </div>

                      <div class="row text-center mt-4">

                        <div class="col-6 border-right">
                          <div class="percentage mb-0" id="last_week_work"><span class="counter" data-val="<?php echo $last_week_html_value ?>" data-delay="<?php echo $data_delay ?>" isCounterDone="no">0</span>%</div>
                          <div class="small_text text-gray">
                            Last week
                          </div>
                        </div>

                        <div class="col-6">

                          <div class="percentage mb-0" id="last_month_work"><span class="counter" data-val="<?php echo $last_month_html_value ?>" data-delay="<?php echo $data_delay ?>" isCounterDone="no">0</span>%</div>

                          <div class="small_text text-gray">
                            Last month
                          </div>

                        </div>

                      </div>
                    </div>

                  </div>

                  <div class="col-lg-3 mb-4 animation_on_scroll slideUp animation_duration_3 animation_delay_04">

                    <div class="element_background_primary shadow border_radious_15 p-4">

                      <h2 class="small_heading mb-4 text-center">CSS</h2>

                      <div class="circular_progress_bar mx-auto">
                        <div class="outer">
                          <div class="inner">
                            <div id="number">
                              <span class="counter" data-val="<?php echo $data_value_css ?>" data-delay="<?php echo $data_delay ?>" isCounterDone="no">0</span>%
                            </div>
                          </div>
                        </div>

                        <svg version="1.1">

                          <circle class="cssProgress circle_progress_animation progressAnimationData" data-val="<?php echo $data_value_css ?>" data-delay="<?php echo $data_delay ?>" isProgressDone="no" cx="60" cy="60" r="57" stroke-linecap="round" />

                        </svg>

                      </div>

                      <div class="row text-center mt-4">

                        <div class="col-6 border-right">
                          <div class="percentage mb-0" id="last_week_work"><span class="counter" data-val="<?php echo $last_week_css_value ?>" data-delay="<?php echo $data_delay ?>" isCounterDone="no">0</span>%</div>
                          <div class="small_text text-gray">
                            Last week
                          </div>
                        </div>

                        <div class="col-6">

                          <div class="percentage mb-0" id="last_month_work"><span class="counter" data-val="<?php echo $last_month_css_value ?>" data-delay="<?php echo $data_delay ?>" isCounterDone="no">0</span>%</div>

                          <div class="small_text text-gray">
                            Last month
                          </div>

                        </div>

                      </div>
                    </div>

                  </div>

                  <div class="col-lg-3 mb-4 animation_on_scroll slideUp animation_duration_3 animation_delay_07">

                    <div class="element_background_primary shadow border_radious_15 p-4">

                      <h2 class="small_heading mb-4 text-center">JavaScript</h2>

                      <div class="circular_progress_bar mx-auto">
                        <div class="outer">
                          <div class="inner">
                            <div id="number">
                              <span class="counter" data-val="<?php echo $data_value_js ?>" data-delay="<?php echo $data_delay ?>" isCounterDone="no">0</span>%
                            </div>
                          </div>
                        </div>

                        <svg version="1.1" width="120px" height="120px">

                          <circle class="jsProgress circle_progress_animation progressAnimationData" data-val="<?php echo $data_value_js ?>" data-delay="<?php echo $data_delay ?>" isProgressDone="no" cx="60" cy="60" r="57" stroke-linecap="round" />

                        </svg>

                      </div>

                      <div class="row text-center mt-4">

                        <div class="col-6 border-right">
                          <div class="percentage mb-0" id="last_week_work"><span class="counter" data-val="<?php echo $last_week_js_value ?>" data-delay="<?php echo $data_delay ?>" isCounterDone="no">0</span>%</div>
                          <div class="small_text text-gray">
                            Last week
                          </div>
                        </div>

                        <div class="col-6">

                          <div class="percentage mb-0" id="last_month_work"><span class="counter" data-val="<?php echo $last_month_js_value ?>" data-delay="<?php echo $data_delay ?>" isCounterDone="no">0</span>%</div>

                          <div class="small_text text-gray">
                            Last month
                          </div>

                        </div>

                      </div>
                    </div>

                  </div>

                  <div class="col-lg-3 mb-4 animation_on_scroll slideUp animation_duration_3 animation_delay_1">

                    <div class="element_background_primary shadow border_radious_15 p-4">

                      <h2 class="small_heading mb-4 text-center">PHP</h2>

                      <div class="circular_progress_bar mx-auto">
                        <div class="outer">
                          <div class="inner">
                            <div id="number">
                              <span class="counter" data-val="<?php echo $data_value_php ?>" data-delay="<?php echo $data_delay ?>" isCounterDone="no">0</span>%
                            </div>
                          </div>
                        </div>

                        <svg version="1.1" width="120px" height="120px">

                          <circle class="jsProgress circle_progress_animation progressAnimationData" data-val="<?php echo $data_value_php ?>" data-delay="<?php echo $data_delay ?>" isProgressDone="no" cx="60" cy="60" r="57" stroke-linecap="round" />

                        </svg>

                      </div>

                      <div class="row text-center mt-4">

                        <div class="col-6 border-right">
                          <div class="percentage mb-0" id="last_week_work"><span class="counter" data-val="<?php echo $last_week_php_value ?>" data-delay="<?php echo $data_delay ?>" isCounterDone="no">0</span>%</div>
                          <div class="small_text text-gray">
                            Last week
                          </div>
                        </div>

                        <div class="col-6">

                          <div class="percentage mb-0" id="last_month_work"><span class="counter" data-val="<?php echo $last_month_php_value ?>" data-delay="<?php echo $data_delay ?>" isCounterDone="no">0</span>%</div>

                          <div class="small_text text-gray">
                            Last month
                          </div>

                        </div>

                      </div>
                    </div>

                  </div>

                </div>

                <div class="row" style="overflow: hidden;">

                  <!-- Worpress Theme -->
                  <div class="col-md-6 animation_on_scroll slideFromLeft animation_duration_5 animation_delay_05">

                    <div class="linear_progress_wrap border-bottom">

                      <div class="linear_progress_heading_wrap">
                        <h2 class="small_subheading">WordPress Theme <span>(</span><span class="text">Development &#38; Customization</span><span>)</span></h2>
                        <p class="linear_progress_value"><span class="counter" data-val="<?php echo $wp_theme_progress_value ?>" data-delay="<?php echo $linear_data_delay ?>" isCounterDone="no">0</span>%</p>
                      </div>

                      <div class="progress element_background_primary" style="height: 10px;">
                        <div class="progress-bar linear_progress_bar linear_progress_animation" role="progressbar" style="height: 10px" aria-valuenow="<?php echo $wp_theme_progress_value ?>" aria-valuemin="0" aria-valuemax="100" data-val="<?php echo $wp_theme_progress_value ?>" data-delay="<?php echo $linear_data_delay ?>" isProgressDone="no"></div>
                      </div>

                    </div>

                  </div>

                  <!-- Worpress Plugin -->
                  <div class="col-md-6 animation_on_scroll slideFromRight animation_duration_5 animation_delay_05">

                    <div class="linear_progress_wrap border-bottom">

                      <div class="linear_progress_heading_wrap">
                        <h2 class="small_subheading">WordPress Plugin Development</h2>
                        <p class="linear_progress_value"><span class="counter" data-val="<?php echo $wp_plugin_progress_value ?>" data-delay="<?php echo $linear_data_delay ?>" isCounterDone="no">0</span>%</p>
                      </div>

                      <div class="progress element_background_primary" style="height: 10px;">
                        <div class="progress-bar linear_progress_bar linear_progress_animation" role="progressbar" style="height: 10px" aria-valuenow="<?php echo $wp_plugin_progress_value ?>" aria-valuemin="0" aria-valuemax="100" data-val="<?php echo $wp_plugin_progress_value ?>" data-delay="<?php echo $linear_data_delay ?>" isProgressDone="no"></div>
                      </div>

                    </div>

                  </div>

                  <!-- jQuery -->
                  <div class="col-md-6 animation_on_scroll slideFromRight animation_duration_5 animation_delay_07">

                    <div class="linear_progress_wrap border-bottom">

                      <div class="linear_progress_heading_wrap">
                        <h2 class="small_subheading">jQuery</h2>
                        <p class="linear_progress_value"><span class="counter" data-val="<?php echo $jQuery_progress_value ?>" data-delay="<?php echo $linear_data_delay ?>" isCounterDone="no">0</span>%</p>
                      </div>

                      <div class="progress element_background_primary" style="height: 10px;">
                        <div class="progress-bar linear_progress_bar linear_progress_animation" role="progressbar" style="height: 10px" aria-valuenow="<?php echo $jQuery_progress_value ?>" aria-valuemin="0" aria-valuemax="100" data-val="<?php echo $jQuery_progress_value ?>" data-delay="<?php echo $linear_data_delay ?>" isProgressDone="no"></div>
                      </div>

                    </div>

                  </div>

                  <!-- C -->
                  <div class="col-md-6 animation_on_scroll slideFromLeft animation_duration_5 animation_delay_07">

                    <div class="linear_progress_wrap border-bottom">

                      <div class="linear_progress_heading_wrap">
                        <h2 class="small_subheading">C</h2>
                        <p class="linear_progress_value"><span class="counter" data-val="<?php echo $c_progress_value ?>" data-delay="<?php echo $linear_data_delay ?>" isCounterDone="no">0</span>%</p>
                      </div>

                      <div class="progress element_background_primary" style="height: 10px;">
                        <div class="progress-bar linear_progress_bar linear_progress_animation" role="progressbar" style="height: 10px" aria-valuenow="<?php echo $c_progress_value ?>" aria-valuemin="0" aria-valuemax="100" data-val="<?php echo $c_progress_value ?>" data-delay="<?php echo $linear_data_delay ?>" isProgressDone="no"></div>
                      </div>

                    </div>

                  </div>

                  <!-- Java -->
                  <div class="col-md-6 animation_on_scroll slideFromRight animation_duration_5 animation_delay_09">

                    <div class="linear_progress_wrap border-bottom">

                      <div class="linear_progress_heading_wrap">
                        <h2 class="small_subheading">Java</h2>
                        <p class="linear_progress_value"><span class="counter" data-val="<?php echo $java_progress_value ?>" data-delay="<?php echo $linear_data_delay ?>" isCounterDone="no">0</span>%</p>
                      </div>

                      <div class="progress element_background_primary" style="height: 10px;">
                        <div class="progress-bar linear_progress_bar linear_progress_animation" role="progressbar" style="height: 10px" aria-valuenow="<?php echo $java_progress_value ?>" aria-valuemin="0" aria-valuemax="100" data-val="<?php echo $java_progress_value ?>" data-delay="<?php echo $linear_data_delay ?>" isProgressDone="no"></div>
                      </div>

                    </div>

                  </div>

                  <!-- Adndroid -->
                  <div class="col-md-6 animation_on_scroll slideFromLeft animation_duration_5 animation_delay_09">

                    <div class="linear_progress_wrap border-bottom">

                      <div class="linear_progress_heading_wrap">
                        <h2 class="small_subheading">Android App Development</h2>
                        <p class="linear_progress_value"><span class="counter" data-val="<?php echo $android_progress_value ?>" data-delay="<?php echo $linear_data_delay ?>" isCounterDone="no">0</span>%</p>
                      </div>

                      <div class="progress element_background_primary" style="height: 10px;">
                        <div class="progress-bar linear_progress_bar linear_progress_animation" role="progressbar" style="height: 10px" aria-valuenow="<?php echo $android_progress_value ?>" aria-valuemin="0" aria-valuemax="100" data-val="<?php echo $android_progress_value ?>" data-delay="<?php echo $linear_data_delay ?>" isProgressDone="no"></div>
                      </div>

                    </div>

                  </div>

                  <!-- Database -->
                  <div class="col-md-6 animation_on_scroll slideFromRight animation_duration_5 animation_delay_11">

                    <div class="linear_progress_wrap border-bottom">

                      <div class="linear_progress_heading_wrap">
                        <h2 class="small_subheading">Database <span>(</span><span class="text">Firebase, MySql, &#38; SQLite</span><span>)</span></h2>
                        <p class="linear_progress_value"><span class="counter" data-val="<?php echo $database_progress_value ?>" data-delay="<?php echo $linear_data_delay ?>" isCounterDone="no">0</span>%</p>
                      </div>

                      <div class="progress element_background_primary" style="height: 10px;">
                        <div class="progress-bar linear_progress_bar linear_progress_animation" role="progressbar" style="height: 10px" aria-valuenow="<?php echo $database_progress_value ?>" aria-valuemin="0" aria-valuemax="100" data-val="<?php echo $database_progress_value ?>" data-delay="<?php echo $linear_data_delay ?>" isProgressDone="no"></div>
                      </div>

                    </div>

                  </div>

                  <!-- Photoshop -->
                  <div class="col-md-6 animation_on_scroll slideFromLeft animation_duration_5 animation_delay_11">

                    <div class="linear_progress_wrap border-bottom">

                      <div class="linear_progress_heading_wrap">
                        <h2 class="small_subheading">Photoshop</h2>
                        <p class="linear_progress_value"><span class="counter" data-val="<?php echo $photoshop_progress_value ?>" data-delay="<?php echo $linear_data_delay ?>" isCounterDone="no">0</span>%</p>
                      </div>

                      <div class="progress element_background_primary" style="height: 10px;">
                        <div class="progress-bar linear_progress_bar linear_progress_animation" role="progressbar" style="height: 10px" aria-valuenow="<?php echo $photoshop_progress_value ?>" aria-valuemin="0" aria-valuemax="100" data-val="<?php echo $photoshop_progress_value ?>" data-delay="<?php echo $linear_data_delay ?>" isProgressDone="no"></div>
                      </div>

                    </div>

                  </div>

                </div>

              </div>

            </div>

            <!-- Certificate_Area -->
            <div id="page_certificates" class="resume_menu_active_on_view resume_menu_items" style="margin-bottom: 50px;">

              <div class="resume_page_wrap">

                <h2 class="heading animation_on_scroll slideUp animation_duration_3 animation_delay_01">Certificates</h2>

                <div class="certificates_list">

                  <div class="row justify-content-center align-self-center">

                    <!-- BSc Certificate -->
                    <div class="col-lg-4 col-sm-6 single_certificate_col animation_on_scroll slideUp animation_duration_2 animation_delay_01">

                      <div class="resume_wrap single_certificate d-flex">

                        <div class="certificate_content">

                          <img class="image_view_onclick" src="/portfolio/wp-content/themes/myportfolio/image/certificate/undergraduate_certificate.jpg" alt="B.Sc (Hons) in Computer Science &#38; Engineering (CSE)">

                          <div class="hover_effect_slide_up">
                            <div class="resume_icon d-flex justify-content-center align-items-center">
                              <i class="fas fa-award"></i>
                            </div>

                            <div class="resume_text">

                              <p class="date m-0"><span class="start_date">January, 2020<span class="end_date"></span></p>

                              <h3 class="position">B.Sc in CSE</h3>

                              <span class="name">Daffodil International University</span>

                              <div class="image_view_button">View</div>

                            </div>
                          </div>
                        </div>

                      </div>

                    </div>

                    <!-- BITM Certificate -->
                    <div class="col-lg-4 col-sm-6 single_certificate_col animation_on_scroll slideUp animation_duration_2 animation_delay_02">

                      <div class="resume_wrap single_certificate d-flex">

                        <div class="certificate_content">

                          <img class="image_view_onclick" src="/portfolio/wp-content/themes/myportfolio/image/certificate/basis_certificate.jpg" alt="Mobile App Development">

                          <div class="hover_effect_slide_up">
                            <div class="resume_icon d-flex justify-content-center align-items-center">
                              <i class="fas fa-award"></i>
                            </div>

                            <div class="resume_text">

                              <p class="date m-0"><span class="start_date">April, 2019<span class="end_date"></span></p>

                              <h3 class="position">Mobile App Development</h3>

                              <span class="name">B I T M</span>

                              <div class="image_view_button">View</div>

                            </div>
                          </div>
                        </div>

                      </div>

                    </div>

                    <!-- Blood Certificate -->
                    <div class="col-lg-4 col-sm-6 single_certificate_col animation_on_scroll slideUp animation_duration_2 animation_delay_03">

                      <div class="resume_wrap single_certificate d-flex">

                        <div class="certificate_content">

                          <img class="image_view_onclick" src="/portfolio/wp-content/themes/myportfolio/image/certificate/blood_donation.jpg" alt="Blood Donation">

                          <div class="hover_effect_slide_up">
                            <div class="resume_icon d-flex justify-content-center align-items-center">
                              <i class="fas fa-award"></i>
                            </div>

                            <div class="resume_text">

                              <p class="date m-0"><span class="start_date">October, 2015<span class="end_date"></span></p>

                              <h3 class="position">Blood Donation</h3>

                              <span class="name">Quantum Foundation</span>

                              <div class="image_view_button">View</div>

                            </div>
                          </div>
                        </div>

                      </div>

                    </div>

                    <!-- HSC Certificate -->
                    <div class="col-lg-4 col-sm-6 single_certificate_col animation_on_scroll slideUp animation_duration_2 animation_delay_04">

                      <div class="resume_wrap single_certificate d-flex">

                        <div class="certificate_content">

                          <img class="image_view_onclick" src="/portfolio/wp-content/themes/myportfolio/image/certificate/hsc.jpg" alt="Higher Secondary School Certificate">

                          <div class="hover_effect_slide_up">
                            <div class="resume_icon d-flex justify-content-center align-items-center">
                              <i class="fas fa-award"></i>
                            </div>

                            <div class="resume_text">

                              <p class="date m-0"><span class="start_date">May, 2012<span class="end_date"></span></p>

                              <h3 class="position">H S C</h3>

                              <span class="name">Nazipur Govt. College</span>

                              <div class="image_view_button">View</div>

                            </div>
                          </div>
                        </div>

                      </div>

                    </div>

                    <!-- Diploma Certificate -->
                    <div class="col-lg-4 col-sm-6 single_certificate_col animation_on_scroll slideUp animation_duration_2 animation_delay_05">

                      <div class="resume_wrap single_certificate d-flex">

                        <div class="certificate_content">

                          <img class="image_view_onclick" src="/portfolio/wp-content/themes/myportfolio/image/certificate/computer_diploma.jpg" alt="Diploma in Computer Science">

                          <div class="hover_effect_slide_up">
                            <div class="resume_icon d-flex justify-content-center align-items-center">
                              <i class="fas fa-award"></i>
                            </div>

                            <div class="resume_text">

                              <p class="date m-0"><span class="start_date">June, 2011<span class="end_date"></span></p>

                              <h3 class="position">Diploma in CS</h3>

                              <span class="name">Nurul Islam Judo Unnayan Society</span>

                              <div class="image_view_button">View</div>

                            </div>
                          </div>
                        </div>

                      </div>

                    </div>

                    <!-- Volleyball Certificate -->
                    <div class="col-lg-4 col-sm-6 single_certificate_col animation_on_scroll slideUp animation_duration_2 animation_delay_06">

                      <div class="resume_wrap single_certificate d-flex">

                        <div class="certificate_content">

                          <img class="image_view_onclick" src="/portfolio/wp-content/themes/myportfolio/image/certificate/volleyball.jpg" alt="Volleyball">

                          <div class="hover_effect_slide_up">
                            <div class="resume_icon d-flex justify-content-center align-items-center">
                              <i class="fas fa-award"></i>
                            </div>

                            <div class="resume_text">

                              <p class="date m-0"><span class="start_date">February, 2011<span class="end_date"></span></p>

                              <h3 class="position">Volleyball</h3>

                              <span class="name">Nazipur Govt. College</span>

                              <div class="image_view_button">View</div>

                            </div>
                          </div>
                        </div>

                      </div>

                    </div>

                    <!-- VDP Certificate -->
                    <div class="col-lg-4 col-sm-6 single_certificate_col animation_on_scroll slideUp animation_duration_2 animation_delay_07">

                      <div class="resume_wrap single_certificate d-flex">

                        <div class="certificate_content">

                          <img class="image_view_onclick" src="/portfolio/wp-content/themes/myportfolio/image/certificate/ansar_vdp_training.jpg" alt="Ansar &#38; VDP Force ">

                          <div class="hover_effect_slide_up">
                            <div class="resume_icon d-flex justify-content-center align-items-center">
                              <i class="fas fa-award"></i>
                            </div>

                            <div class="resume_text">

                              <p class="date m-0"><span class="start_date">January, 2011<span class="end_date"></span></p>

                              <h3 class="position">V D P</h3>

                              <span class="name">Ansar &#38; VDP Force</span>

                              <div class="image_view_button">View</div>

                            </div>
                          </div>
                        </div>

                      </div>

                    </div>

                    <!-- SSC Certificate -->
                    <div class="col-lg-4 col-sm-6 single_certificate_col animation_on_scroll slideUp animation_duration_2 animation_delay_08">

                      <div class="resume_wrap single_certificate d-flex">

                        <div class="certificate_content">

                          <img class="image_view_onclick" src="/portfolio/wp-content/themes/myportfolio/image/certificate/ssc.jpg" alt="Secondary School Certificate">

                          <div class="hover_effect_slide_up">
                            <div class="resume_icon d-flex justify-content-center align-items-center">
                              <i class="fas fa-award"></i>
                            </div>

                            <div class="resume_text">

                              <p class="date m-0"><span class="start_date">March, 2010<span class="end_date"></span></p>

                              <h3 class="position">S S C</h3>

                              <span class="name">Nazipur High School</span>

                              <div class="image_view_button">View</div>

                            </div>
                          </div>
                        </div>

                      </div>

                    </div>

                    <!-- scout Certificate -->
                    <div class="col-lg-4 col-sm-6 single_certificate_col animation_on_scroll slideUp animation_duration_2 animation_delay_09">

                      <div class="resume_wrap single_certificate d-flex">

                        <div class="certificate_content">

                          <img class="image_view_onclick" src="/portfolio/wp-content/themes/myportfolio/image/certificate/scout.jpg" alt="Scouts Health Camp">

                          <div class="hover_effect_slide_up">
                            <div class="resume_icon d-flex justify-content-center align-items-center">
                              <i class="fas fa-award"></i>
                            </div>

                            <div class="resume_text">

                              <p class="date m-0"><span class="start_date">December, 2009<span class="end_date"></span></p>

                              <h3 class="position">Health Camp</h3>

                              <span class="name">Scouts &#38; Rover Scouts</span>

                              <div class="image_view_button">View</div>

                            </div>
                          </div>
                        </div>

                      </div>

                    </div>

                  </div>
                </div>

              </div>

            </div>

          </div>
        </div>
  </section>
  <!-- Resume Section Area End -->


  <!-- Service Section Area start -->
  <section id="service_area" class="menu_active_on_view">
    
    <div class="container">

      <div class="row justify-content-center align-items-center text-center">
        
        <div class="margin-top-80"></div>

        <div class="section_heading">
          <div class="service_area_title">
            <h2 class="heading animation_on_scroll slideFromLeft animation_duration_3 animation_delay_03">My Services</h2>
          </div>

          <div class="service_area_subtitle">
            <p class="heading_subtitle animation_on_scroll slideFromRight animation_duration_3 animation_delay_03">As a professional web and WordPress developer, I offer a wide range of services to help businesses create a dynamic and engaging online presence. With a focus on quality and results, I work closely with clients to understand their unique business needs and deliver exceptional results that exceed expectations.</p>
          </div>
        </div>

        <!-- Web development -->
        <div class="col-lg-4 col-sm-6 col-md-6 animation_on_scroll slideUp animation_duration_2 animation_delay_04">

          <div class="single_service_wrap single_card_wrap single_card_box_shadow single_card_height d-flex align-items-center element_background_primary">
            <div class="service_icon d-flex justify-content-center align-items-center">
              <img src="/portfolio/wp-content/themes/myportfolio/image/icons/web_development.png" alt="">
            </div>
            <div class="single_card_title">Web Development</div>
            <div class="single_card_subtitle">I can develop custom websites using various programming languages such as HTML, CSS, JavaScript, PHP, and backend WordPress, Firebase. I will ensure that the website is mobile-friendly, user-friendly, and secure.
            </div>
          </div>

        </div>

        <!-- Website Maintenance -->
        <div class="col-lg-4 col-sm-6 col-md-6 animation_on_scroll slideUp animation_duration_2 animation_delay_05">

          <div class="single_service_wrap single_card_wrap single_card_box_shadow single_card_height d-flex align-items-center element_background_primary">
            <div class="service_icon d-flex justify-content-center align-items-center">
              <img src="/portfolio/wp-content/themes/myportfolio/image/icons/web_maintenance.png" alt="">
            </div>
            <div class="single_card_title">Website Maintenance</div>
            <div class="single_card_subtitle">I can provide ongoing maintenance and support for websites, including security updates, software upgrades, and troubleshooting issues that arise with the website.
            </div>
          </div>

        </div>

        <!-- E-commerce Development -->
        <div class="col-lg-4 col-sm-6 col-md-6 animation_on_scroll slideUp animation_duration_2 animation_delay_06">

          <div class="single_service_wrap single_card_wrap single_card_box_shadow single_card_height d-flex align-items-center element_background_primary">
            <div class="service_icon d-flex justify-content-center align-items-center">
              <img src="/portfolio/wp-content/themes/myportfolio/image/icons/e_commerce_development.png" alt="">
            </div>
            <div class="single_card_title">E-commerce Development</div>
            <div class="single_card_subtitle">I can create online stores and marketplaces for businesses, including integrating payment gateways, shipping APIs, and inventory management systems.
            </div>
          </div>

        </div>

        <!-- Content Management Systems -->
        <div class="col-lg-4 col-sm-6 col-md-6 animation_on_scroll slideUp animation_duration_2 animation_delay_07">

          <div class="single_service_wrap single_card_wrap single_card_box_shadow single_card_height d-flex align-items-center element_background_primary">
            <div class="service_icon d-flex justify-content-center align-items-center">
              <img src="/portfolio/wp-content/themes/myportfolio/image/icons/cms.png" alt="">
            </div>
            <div class="single_card_title">Content Management Systems</div>
            <div class="single_card_subtitle">I can work with CMS platforms like WordPress to create dynamic websites that can be easily managed and updated by non-technical users.
            </div>
          </div>

        </div>

        <!-- Custom Plugin Development -->
        <div class="col-lg-4 col-sm-6 col-md-6 animation_on_scroll slideUp animation_duration_2 animation_delay_08">

          <div class="single_service_wrap single_card_wrap single_card_box_shadow single_card_height d-flex align-items-center element_background_primary">
            <div class="service_icon d-flex justify-content-center align-items-center">
              <img src="/portfolio/wp-content/themes/myportfolio/image/icons/custom_plugin.png" alt="">
            </div>
            <div class="single_card_title">Custom Plugin Development</div>
            <div class="single_card_subtitle">I can develop custom WordPress plugins to meet the unique needs of my clients. This includes creating custom post types, custom fields, and other functionality specific to the client's business.
            </div>
          </div>

        </div>

        <!-- Theme Customization -->
        <div class="col-lg-4 col-sm-6 col-md-6 animation_on_scroll slideUp animation_duration_2 animation_delay_09">

          <div class="single_service_wrap single_card_wrap single_card_box_shadow single_card_height d-flex align-items-center element_background_primary">
            <div class="service_icon d-flex justify-content-center align-items-center">
              <img src="/portfolio/wp-content/themes/myportfolio/image/icons/theme_customization.png" alt="">
            </div>
            <div class="single_card_title">Theme Customization</div>
            <div class="single_card_subtitle">I can modify existing WordPress themes to meet the specific design requirements of my clients. This includes modifying CSS, HTML, and PHP code to achieve the desired look and feel of the website.
            </div>
          </div>

        </div>

        <!-- Mobile App Development -->
        <div class="col-lg-4 col-sm-6 col-md-6 animation_on_scroll slideUp animation_duration_2 animation_delay_1">

          <div class="single_service_wrap single_card_wrap single_card_box_shadow single_card_height d-flex align-items-center element_background_primary">
            <div class="service_icon d-flex justify-content-center align-items-center">
              <img src="/portfolio/wp-content/themes/myportfolio/image/icons/mobile_app_development.png" alt="">
            </div>
            <div class="single_card_title">Mobile App Development</div>
            <div class="single_card_subtitle">I can develop mobile applications that can run on iOS, Android, or other platforms.
            </div>
          </div>

        </div>

        <!-- Technical Support -->
        <div class="col-lg-4 col-sm-6 col-md-6 animation_on_scroll slideUp animation_duration_2 animation_delay_11">

          <div class="single_service_wrap single_card_wrap single_card_box_shadow single_card_height d-flex align-items-center element_background_primary">
            <div class="service_icon d-flex justify-content-center align-items-center">
              <img src="/portfolio/wp-content/themes/myportfolio/image/icons/technoical_support.png" alt="">
            </div>
            <div class="single_card_title">Technical Support</div>
            <div class="single_card_subtitle">I can provide technical support to clients, troubleshooting issues that arise with their websites or applications.
            </div>
          </div>

        </div>

        <div class="margin-bottom-50"></div>

      </div>
    
    </div>
  
  </section>
  <!-- Service Section Area End -->
  
  <!-- Project Sectoin Area Start -->
  <section id="project_area" class="menu_active_on_view">
    <div class="container">

      <div class="row justify-content-center align-items-center text-center">

        <div class="margin-top-80"></div>

        <!-- Project Heading -->
        <div class="section_heading">
          <div class="project_area_title">
            <h2 class="heading animation_on_scroll slideFromLeft animation_duration_3 animation_delay_03">My Projects</h2>
          </div>

          <div class="project_area_subtitle">
            <p class="heading_subtitle animation_on_scroll slideFromRight animation_duration_3 animation_delay_03">Discover a collection of my past and present projects, each highlighting my expertise and innovative approach. From web design and development to mobile apps and more, browse through my portfolio and get a glimpse into the creative solutions I've brought to life for clients and personal ventures alike.</p>
          </div>
        </div>

        <!-- Project Menu -->
        <div class="col-xl-12">
          <ul class="project_menu body_menu">
            <li data-filter="*" class="body_menu_link animation_on_scroll fadeIn animation_duration_4 animation_delay_06 current">All</li>
            <li data-filter=".web" class="body_menu_link animation_on_scroll fadeIn animation_duration_4 animation_delay_08">Web</li>
            <li data-filter=".mobile_app  " class="body_menu_link animation_on_scroll fadeIn animation_duration_4 animation_delay_1">Mobile App</li>
          </ul>
        </div>
      </div>

      <!-- Project Elements -->
      <div class="row animation_on_scroll_full slideUp animation_duration_2 animation_delay_01 project_items">
       
        <!-- Utech IT Maintenance -->
        <div class="col-lg-4 col-sm-6 col-md-6 web">
          <div class="single_project_wrap single_card_box_shadow d-flex align-items-center">
            <img class="element_background_secondary" src="/portfolio/wp-content/themes/myportfolio/image/projects/utechit.png" alt="">
            <div class="single_project_text d-flex single_card_wrap">
              <div class="single_card_title">Utech IT</div>
              <div class="single_card_subtitle">
                <p>
                  <span class="technologies_title">Technologies: </span>
                  <span class="technologies">HTML</span>
                  <span class="technologies">CSS</span>
                  <span class="technologies">JS</span>
                </p>
                <p>
                  <span class="tool_title">Tool: </span>
                  <span class="tool">VS Code</span>
                </p>
                <p>
                  <span class="project_buttons"><a href="https://github.com/ckhasan113/utechit" target="_blank">Code</a></span>
                  <span class="project_buttons"><a href="https://utechit.netlify.app/" target="_blank">Visit</a></span>
                </p>
              </div>
            </div>
          </div>
        </div>          
       
        <!-- Hodil Maintenance -->
        <div class="col-lg-4 col-sm-6 col-md-6 web">
          <div class="single_project_wrap single_card_box_shadow d-flex align-items-center">
            <img class="element_background_secondary" src="/portfolio/wp-content/themes/myportfolio/image/projects/hodil.png" alt="">
            <div class="single_project_text d-flex single_card_wrap">
              <div class="single_card_title">Hodil</div>
              <div class="single_card_subtitle">
                <p>
                  <span class="technologies_title">Technologies: </span>
                  <span class="technologies">HTML</span>
                  <span class="technologies">CSS</span>
                  <span class="technologies">JS</span>
                </p>
                <p>
                  <span class="tool_title">Tool: </span>
                  <span class="tool">VS Code</span>
                </p>
                <p>
                  <span class="project_buttons"><a href="https://github.com/ckhasan113/hodil" target="_blank">Code</a></span>
                  <span class="project_buttons"><a href="https://hodil.netlify.app/" target="_blank">Visit</a></span>
                </p>
              </div>
            </div>
          </div>
        </div>          
       
        <!-- Toure Mate Maintenance -->
        <div class="col-lg-4 col-sm-6 col-md-6 mobile_app">
          <div class="single_project_wrap single_card_box_shadow d-flex align-items-center">
            <img class="element_background_secondary" src="/portfolio/wp-content/themes/myportfolio/image/projects/toure_mate.png" alt="">
            <div class="single_project_text d-flex single_card_wrap">
              <div class="single_card_title">Toure Mate</div>
              <div class="single_card_subtitle">
                <p>
                  <span class="technologies_title">Technologies: </span>
                  <span class="technologies">Java</span>
                  <span class="technologies">XML</span>
                  <span class="technologies">Firebase</span>
                </p>
                <p>
                  <span class="tool_title">Tool: </span>
                  <span class="tool">Android Studio</span>
                </p>
                <p>
                  <span class="project_buttons"><a href="https://github.com/ckhasan113/TourMate" target="_blank">Code</a></span>
                </p>
              </div>
            </div>
          </div>
        </div>          
       
        <!-- Medilink Maintenance -->
        <div class="col-lg-4 col-sm-6 col-md-6 mobile_app">
          <div class="single_project_wrap single_card_box_shadow d-flex align-items-center">
            <img class="element_background_secondary" src="/portfolio/wp-content/themes/myportfolio/image/projects/medilink.png" alt="">
            <div class="single_project_text d-flex single_card_wrap">
              <div class="single_card_title">Medilink</div>
              <div class="single_card_subtitle">
                <p>
                  <span class="technologies_title">Technologies: </span>
                  <span class="technologies">Java</span>
                  <span class="technologies">XML</span>
                  <span class="technologies">Firebase</span>
                </p>
                <p>
                  <span class="tool_title">Tool: </span>
                  <span class="tool">Android Studio</span>
                </p>
                <p>
                  <span class="project_buttons"><a href="https://github.com/ckhasan113/Medilink" target="_blank">Code</a></span>
                </p>
              </div>
            </div>
          </div>
        </div>          
               
        <div class="margin-bottom-50"></div>

      </div>
    </div>
  </section>
  <!-- Project Sectoin Area End -->
  
  <!-- Contact Sectoin Area Start -->
  <section id="contact_area" class="menu_active_on_view">
    
    <div class="container">
      <div class="row justify-content-center align-items-center text-center">
        <div class="margin-top-80"></div>

        <!-- Contact Heading -->
        <div class="section_heading">
          <div class="contact_area_title">
            <h2 class="heading animation_on_scroll slideFromLeft animation_duration_3 animation_delay_03">Contact Me</h2>
          </div>

          <div class="contact_area_subtitle">
            <p class="heading_subtitle animation_on_scroll slideFromRight animation_duration_3 animation_delay_03">Whether you have a question, an idea, or just want to say hi, I'd love to hear from you. Drop me a message and let's start a conversation about how we can work together to achieve your goals and bring your vision to life.</p>
          </div>
        </div>

        <!-- Contact Information -->
        <div class="col-lg-6">
          <div class="row">

            <!-- Location -->
            <div class="col-sm-6 animation_on_scroll slideUp animation_duration_2 animation_delay_05">
              
              <div class="single_contact_wrap single_card_box_shadow d-flex align-items-center element_background_primary">
                <div class="resume_icon d-flex justify-content-center align-items-center">
                  <i class="fas fa-map"></i>
                </div>
                <div class="single_card_title">Address</div>
                <a href="https://goo.gl/maps/SchZDwwWBHMhwf7f7" target="_blank">NHA Garden City, Ring Rd, Mohammadpur, Dhaka-1207</a>
              </div>

            </div>

            <!-- Phone Number -->
            <div class="col-sm-6 animation_on_scroll slideUp animation_duration_2 animation_delay_06">
              <div class="single_contact_wrap single_card_box_shadow d-flex align-items-center element_background_primary">
                <div class="resume_icon d-flex justify-content-center align-items-center">
                  <i class="fas fa-mobile"></i>
                </div>
                <div class="single_card_title">Mobile Number</div>
                <p class="phone">+88 01734-184888</p>
                <p class="phone">+88 01845-592277</p>
              </div>
            </div>

            <!-- Email -->
            <div class="col-sm-6 animation_on_scroll slideUp animation_duration_2 animation_delay_07">
              
              <div class="single_contact_wrap single_card_box_shadow d-flex align-items-center element_background_primary">
                <div class="resume_icon d-flex justify-content-center align-items-center">
                  <i class="fas fa-at"></i>
                </div>
                <div class="single_card_title">Email</div>
                <a href="mailto:ck.hasan113@gmail.com" target="_blank">ck.hasan113@gmail.com</a>
              </div>

            </div>

            <!-- Website -->
            <div class="col-sm-6 animation_on_scroll slideUp animation_duration_2 animation_delay_08">
              
              <div class="single_contact_wrap single_card_box_shadow d-flex align-items-center element_background_primary">
                <div class="resume_icon d-flex justify-content-center align-items-center">
                  <i class="fas fa-link"></i>
                </div>
                <div class="single_card_title">Website</div>
                <a href="https://goo.gl/maps/SchZDwwWBHMhwf7f7" target="_blank">mehedi.com</a>
              </div>

            </div>
            
          </div>
        </div>

        <!-- Send Message -->
        <!-- <div class="col-lg-6"> -->


          <!-- <form id="contact-form" method="post">
            <label for="name">Name</label>
            <input type="text" name="name" required>
            <label for="email">Email</label>
            <input type="email" name="email" required>
            <label for="message">Message</label>
            <textarea name="message" required></textarea>
            <input type="submit" name="submit" value="Send">
          </form> -->

          <!-- <script>
            // Function to handle the form submission
            function handleFormSubmission(event) {
              event.preventDefault();

              // Collect the form data
              const form = event.target;
              const formData = new FormData(form);

              // Send the form data via AJAX
              const xhr = new XMLHttpRequest();
              xhr.open('POST', '<?php //echo esc_url( admin_url('admin-ajax.php') ); ?>');
              xhr.setRequestHeader('Accept', 'application/json');
              xhr.onreadystatechange = function() {
                if (xhr.readyState === 4) {
                  if (xhr.status === 200) {
                    // Display the result in an alert
                    const response = JSON.parse(xhr.responseText);
                    alert(response.message);
                  } else {
                    // Display an error message if the request fails
                    alert('An error occurred while submitting the form. Please try again later.');
                  }
                }
              };
              xhr.send(formData);
            }

            // Attach the form submission handler to the form submit event
            const contactForm = document.getElementById('contact-form');
            contactForm.addEventListener('submit', handleFormSubmission);
          </script> -->

        <!-- </div> -->
      </div>
    </div>

  </section>
  <!-- Contact Sectoin Area End -->

</div>


<?php

/**
 * Footer area is in "footer.php" file
 */
get_footer();
?>
