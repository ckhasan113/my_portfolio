<?php
/**
 * This file hase header part
 */
?>

<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>" class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ) ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php wp_head( ) ?>
</head>
<body <?php body_class() ?>>
  
<header id="header_area" class="<?php echo get_theme_mod('mh_menu_position'); ?>">
    <div class="container">
      <div class="header_area_wraper">
      <div class="row">
        <div class="col-md-3 logo_area">
          <a href="<?php echo home_url(); ?>"><span class="logo_first_letter">M</span><span class="logo_last_part">hasan</span></a>
        </div>
        <div class="col-md-9 menu_area">
        <!-- <?php wp_nav_menu(array('theme_location' => 'main_menu', 'menu_id' => 'nav')); ?> -->
          <ul class="nav-menu">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Resume</a></li>
            <li><a href="#">Service</a></li>
            <li><a href="#">Projects</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>
      </div>
      </div>
    </div>
  </header>
