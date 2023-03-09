<?php

/**
 * This file hase header part
 */
?>

<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>" class="no-js">

<head>
  <meta charset="<?php bloginfo('charset') ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php wp_head() ?>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body <?php body_class() ?>>

  <header id="header_area" class="<?php echo get_theme_mod('mh_menu_position'); ?>">
    <div class="container">
      <div class="header_area_wraper">
        <label id="check" class="checkBtn">
          <i class="fas fa-bars"></i>
        </label>

        <div class="row">
          <div class="col-md-3 logo_area">
            <a href="<?php echo home_url(); ?>"><span class="logo_first_letter">M</span><span class="logo_last_part">hasan</span></a>
          </div>
          <div class="col-md-9 menu_area" id="nav_menu_bar">
            <ul class="nav-menu" id="header_menu">
              <li><a class="menu_link active" href="#home_area"><span>Home</span></a></li>
              <li><a class="menu_link" href="#about_area"><span>About</span></a></li>
              <li><a class="menu_link" href="#resume_area"><span>Resume</span></a></li>
              <li><a class="menu_link" href="#service_area"><span>Service</span></a></li>
              <li><a class="menu_link" href="#project_area"><span>Projects</span></a></li>
              <li><a class="menu_link" href="#"><span>Contact</span></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Pre Loader -->
  <div class="preloader">
    <div class="pre">
      <div class="dash uno"></div>
      <div class="dash dos"></div>
      <div class="dash tres"></div>
      <div class="dash cuatro"></div>
    </div>
  </div>
