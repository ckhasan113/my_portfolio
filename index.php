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
            <img src="/portfolio/wp-content/themes/myportfolio/image/about_me.png" alt="">
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

            <p class="slideFromRight about_problem_solving animation_duration_6 animation_delay_08 animation_on_scroll">More than <span class="counter" data-val="250" data-delay="7000" isCounterDone="no">0</span><span>+</span> problems have been solved on various online platforms</p>

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

                <div class="resume_wrap d-flex animation_on_scroll slideUp animation_duration_2 animation_delay_01">
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

                <div class="resume_wrap d-flex animation_on_scroll slideUp animation_duration_2 animation_delay_02">
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

                <div class="resume_wrap d-flex animation_on_scroll slideUp animation_duration_2 animation_delay_03">
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

                <div class="resume_wrap d-flex animation_on_scroll slideUp animation_duration_2 animation_delay_01">
                  <div class="resume_icon d-flex justify-content-center align-items-center">
                    <i class="fas fa-laptop"></i>
                  </div>
                  <div class="resume_text ps-4">
                    <p class="date m-0"><span class="start_date">September, 2021</span> &#8211; &#8211; <span class="end_date"></span></p>
                    <h3 class="position">Project co-ordinator &#38; Admin Manager</h3>
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

                <div class="resume_wrap d-flex animation_on_scroll slideUp animation_duration_2 animation_delay_02">
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

                <div class="resume_wrap d-flex animation_on_scroll slideUp animation_duration_2 animation_delay_03">
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
            <div id="page_skills" class="resume_menu_active_on_view resume_menu_items">

              <div class="resume_page_wrap">

                <h2 class="heading animation_on_scroll slideUp animation_duration_3 animation_delay_04">Skills</h2>

                <div class="row progress-circle mb-5">
                  <div class="col-lg-4 mb-4 animation_on_scroll slideUp animation_duration_4 animation_delay_06">hi</div>
                  <div class="col-lg-4 mb-4 animation_on_scroll slideUp animation_duration_4 animation_delay_08">hi</div>
                  <div class="col-lg-4 mb-4 animation_on_scroll slideUp animation_duration_4 animation_delay_1">hi</div>
                </div>

                <div class="resume_wrap d-flex animation_on_scroll slideUp animation_duration_2 animation_delay_03">
                  <!-- <div class="resume_icon d-flex justify-content-center align-items-center">
                    <i class="fas fa-laptop"></i>
                  </div> -->
                  <div class="resume_text ps-4">
                    <p class="date m-0"><span class="start_date">September, 2021</span> &#8211; &#8211; <span class="end_date"></span></p>
                    <h3 class="position">Project co-ordinator &#38; Admin Manager</h3>
                    <span class="name">WeTech Digital</span>
                    <p class="address m-0">44 F/7(Rongon Tower), West Panthapath, Dhaka.</p>
                    <p class="outcomes">
                    <ol>
                      <li class="outcome">Communication with project team members, and clients.</li>
                      <li class="outcome">Resource allocation.</li>
                      <li class="outcome">Quality control.</li>
                      <li class="outcome">Technical support for software applications.</li>
                    </ol>
                    </p>
                  </div>
                </div>

                <div class="resume_page_wrap">
                  <h2 class="heading">Education</h2>
                  <div class="resume_wrap">
                    <div class="resume_icon">
                      <i class="fas fa-book"></i>
                    </div>
                  </div>
                </div>

                <div class="resume_page_wrap">
                  <h2 class="heading">Education</h2>
                  <div class="resume_wrap">
                    <div class="resume_icon">
                      <i class="fas fa-book"></i>
                    </div>
                  </div>
                </div>

                <div class="resume_page_wrap">
                  <h2 class="heading">Education</h2>
                  <div class="resume_wrap">
                    <div class="resume_icon">
                      <i class="fas fa-book"></i>
                    </div>
                  </div>
                </div>

                <div class="resume_page_wrap">
                  <h2 class="heading">Education</h2>
                  <div class="resume_wrap">
                    <div class="resume_icon">
                      <i class="fas fa-book"></i>
                    </div>
                  </div>
                </div>

                <div class="resume_page_wrap">
                  <h2 class="heading">Education</h2>
                  <div class="resume_wrap">
                    <div class="resume_icon">
                      <i class="fas fa-book"></i>
                    </div>
                  </div>
                </div>

              </div>

              <!-- Certificate_Area -->
              <div id="page_certificates" class="resume_menu_active_on_view resume_menu_items">

                <div class="resume_page_wrap">

                  <h2 class="heading animation_on_scroll slideUp animation_duration_3 animation_delay_01">Certificates</h2>

                  <div class="resume_wrap d-flex animation_on_scroll slideUp animation_duration_2 animation_delay_03">
                    <div class="resume_icon d-flex justify-content-center align-items-center">
                      <i class="fas fa-award"></i>
                    </div>
                    <div class="resume_text ps-4">
                      <p class="date m-0"><span class="start_date">September, 2021</span> &#8211; &#8211; <span class="end_date"></span></p>
                      <h3 class="position">Project co-ordinator &#38; Admin Manager</h3>
                      <span class="name">WeTech Digital</span>
                      <p class="address m-0">44 F/7(Rongon Tower), West Panthapath, Dhaka.</p>
                      <p class="outcomes">
                      <ol>
                        <li class="outcome">Communication with project team members, and clients.</li>
                        <li class="outcome">Resource allocation.</li>
                        <li class="outcome">Quality control.</li>
                        <li class="outcome">Technical support for software applications.</li>
                      </ol>
                      </p>
                    </div>
                  </div>

                  <div class="resume_page_wrap">
                    <h2 class="heading">Education</h2>
                    <div class="resume_wrap">
                      <div class="resume_icon">
                        <i class="fas fa-book"></i>
                      </div>
                    </div>
                  </div>

                  <div class="resume_page_wrap">
                    <h2 class="heading">Education</h2>
                    <div class="resume_wrap">
                      <div class="resume_icon">
                        <i class="fas fa-book"></i>
                      </div>
                    </div>
                  </div>

                  <div class="resume_page_wrap">
                    <h2 class="heading">Education</h2>
                    <div class="resume_wrap">
                      <div class="resume_icon">
                        <i class="fas fa-book"></i>
                      </div>
                    </div>
                  </div>

                  <div class="resume_page_wrap">
                    <h2 class="heading">Education</h2>
                    <div class="resume_wrap">
                      <div class="resume_icon">
                        <i class="fas fa-book"></i>
                      </div>
                    </div>
                  </div>

                  <div class="resume_page_wrap">
                    <h2 class="heading">Education</h2>
                    <div class="resume_wrap">
                      <div class="resume_icon">
                        <i class="fas fa-book"></i>
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

  <section class="menu_active_on_view" style="height: 900px; background: #f00;">
    <span class="counter" data-val="150" data-delay="5000" isCounterDone="no">0</span>
  </section>
</div>


<?php wp_footer() ?>
</body>

</html>
