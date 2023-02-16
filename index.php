<?php
/*
*Header area is in "header.php" file
*/
get_header();
?>

<section id="home_area">
  <div class="container">
    <div class="row justify-content-center align-items-center set_max_height_for_home">
      <div class="col-md-6 collg-8">
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
            <!-- Codepen end -->
            </div>

        </div>
      </div>
    </div>
  </div>    
</section>


<?php wp_footer() ?>
</body>
</html>
