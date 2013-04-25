<!DOCTYPE html>
<head>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-1.9.1.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
  <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
 <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="amalgamatedWrapper">
  <header>
    <nav>
      <div class="logoDiv floatLeft">
        <a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a><br/>
        <?php bloginfo('description'); ?>
      </div> <!--logoDiv -->
      <?php if ( wp_is_mobile() ) { ?>
      <?php } else {?>
        <div class="bannerDiv floatRight">
          <?php if ( dynamic_sidebar('banner_area') ) : else :  endif; ?>
        </div>
      <?php } ?>
        <?php if ( wp_is_mobile() ) { ?>
          <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/mobile.css">
          <button class="menuButton">Menu</button> 
        <?php } else {?>
          <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/desktop.css">
        <?php } ?>
      <div class="rootClearFloat"></div>
      <ul>
        <?php wp_list_pages('title_li='); ?>
      </ul>
    </nav>
  </header>
</div> <!-- .amalgamatedWrapper -->