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
  <section id="about_area" class="menu_active_on_view mt-5">
    <div class="about_area_wrap">
      <div class="container">
        <div class="row justify-content-center align-items-center">

          <div class="slideFromLeft col-md-5 about_me_image animation_duration_3 animation_delay_01 animation_on_scroll">
            <img src="/portfolio/wp-content/themes/myportfolio/image/about_me_2.png" alt="">
          </div>
          <div class="col-md-7">

            <h1 class="slideFromRight animation_duration_5 animation_delay_01 animation_on_scroll">About Me</h1>

            <p class="slideFromRight about_me_text animation_duration_5 animation_delay_02 animation_on_scroll" align="justify">Hi, I&#39;m Hasan! I&#39;m a front-end web developer specializing in WordPress. As a web developer, I have extensive experience in building and maintaining responsive and user-friendly websites as well as web applications. I am proficient in HTML, CSS, Bootstrap, PHP, and have developed custom WordPress themes and plugins to meet the unique needs of clients.</p>

            <table class="about_me_tbl">
              <tr class="slideFromRight animation_duration_6 animation_delay_03 animation_on_scroll">
                <th>Name:</th>
                <td>Md Al Mehedi Hasan</td>
              </tr>
              <tr class="slideFromRight animation_duration_6 animation_delay_04 animation_on_scroll">
                <th>Date of birth:</th>
                <td>January 03, 1995</td>
              </tr>
              <tr class="slideFromRight animation_duration_6 animation_delay_05 animation_on_scroll">
                <th>Address:</th>
                <td>15C, 5th Building, NHA Garden City, Ring Rd, Mohammadpur, Dhaka-1207</td>
              </tr>
              <tr class="slideFromRight no_space animation_duration_6 animation_delay_06 animation_on_scroll">
                <th>Email:</th>
                <td>ck.hasan113@gmail.com</td>
              </tr>
              <tr class="slideFromRight animation_duration_6 animation_delay_065 animation_on_scroll">
                <th></th>
                <td>hasan15-7970@diu.edu.bd</td>
              </tr>
              <tr class="slideFromRight no_space animation_duration_6 animation_delay_07 animation_on_scroll">
                <th>Phone:</th>
                <td>+88 01734-184888</td>
              </tr>
              <tr class="slideFromRight no_space animation_duration_6 animation_delay_075 animation_on_scroll">
                <th></th>
                <td>+88 01845-592277</td>
              </tr>
            </table>

            <p class="slideFromRight about_problem_solving animation_duration_6 animation_delay_08 animation_on_scroll"><span class="counter" data-val="250" data-delay="7000" isCounterDone="no">0</span><span>+</span> problems have been solved on various online platforms</p>

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
            <nav class="resume_nav element_background animation_on_scroll slideFromLeft animation_duration_2 animation_delay_01">
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
                    <h3 class="position">B.Sc (Hons) in Computer Science & Engineering (CSE)</h3>
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
                    <ol>
                      <li class="outcome">Communication with project team members, and clients.</li>
                      <li class="outcome">Resource allocation.</li>
                      <li class="outcome">Quality control.</li>
                      <li class="outcome">Technical support for software applications.</li>
                      <li class="outcome">HR support.</li>
                    </ol>
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
                    <ol>
                      <li class="outcome">IT consultant.</li>
                      <li class="outcome">HR support.</li>
                      <li class="outcome">Client management.</li>
                      <li class="outcome">Managing service center.</li>
                    </ol>
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
                    <ol>
                      <li class="outcome">Creating mobile applications.</li>
                      <li class="outcome">Debugging problems.</li>
                      <li class="outcome">Helping to create, update, and debug API.</li>
                      <li class="outcome">Publishing mobile app.</li>
                    </ol>
                    </p>
                  </div>
                </div>

              </div>

            </div>

            <!-- Skills_Area -->
            <?php
              $data_delay = 3000;
              $linear_data_delay = 7000;

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

                    <div class="element_backgrount shadow border_radious_15 p-4">

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

                    <div class="element_backgrount shadow border_radious_15 p-4">

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

                    <div class="element_backgrount shadow border_radious_15 p-4">

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

                    <div class="element_backgrount shadow border_radious_15 p-4">

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

                      <div class="progress" style="height: 7px;">
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

                      <div class="progress" style="height: 7px;">
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

                      <div class="progress" style="height: 7px;">
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

                      <div class="progress" style="height: 7px;">
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

                      <div class="progress" style="height: 7px;">
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

                      <div class="progress" style="height: 7px;">
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

                      <div class="progress" style="height: 7px;">
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

                      <div class="progress" style="height: 7px;">
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

                  <div class="row">

                    <!-- BSc Certificate -->
                    <div class="col-md-6 single_certificate_col">

                      <div class="resume_wrap single_certificate d-flex animation_on_scroll slideUp animation_duration_2 animation_delay_03">

                        <div class="certificate_content">

                          <img id="" src="/portfolio/wp-content/themes/myportfolio/image/certificate/undergraduate_certificate.jpg" alt="">

                          <div class="hover_effect_slide_up">
                            <div class="resume_icon d-flex justify-content-center align-items-center">
                              <i class="fas fa-award"></i>
                            </div>

                            <div class="resume_text hover_effect_slide_up_padding">

                              <p class="date m-0"><span class="start_date">January, 2020<span class="end_date"></span></p>

                              <h3 class="position">B.Sc in CSE</h3>

                              <span class="name">Daffodil International University</span>

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

  <section id="service_area" class="menu_active_on_view" style="height: 900px; background: #f00;">
    <span class="counter" data-val="150" data-delay="5000" isCounterDone="no">0</span>
    <!-- <div class="container_test">
      <div class="newsletter"><p>weee!</p></div>
    </div> -->
  </section>
</div>


<?php wp_footer() ?>
</body>

</html>
