<!DOCTYPE html>
<html>
 <head>
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
    <link rel='stylesheet' type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/widthGreaterThan1400.css">
    <link rel='stylesheet' type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/width1300-1399.css" media='screen and (min-width: 1300px) and (max-width: 1399px)' >
    <link rel='stylesheet' type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/width1200-1299.css" media='screen and (min-width: 1200px) and (max-width: 1299px)' >
    <link rel='stylesheet' type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/width1100-1199.css" media='screen and (min-width: 1100px) and (max-width: 1199px)' >
    <link rel='stylesheet' type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/width1000-1099.css" media='screen and (min-width: 1000px) and (max-width: 1099px)' >
    <link rel='stylesheet' type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/width900-999.css" media='screen and (min-width: 900px) and (max-width: 999px)' >
    <link rel='stylesheet' type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/width800-899.css" media='screen and (min-width: 800px) and (max-width: 899px)' >
    <link rel='stylesheet' type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/width700-799.css" media='screen and (min-width: 700px) and (max-width: 799px)' >
    <link rel='stylesheet' type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/widthLessThan700.css" media='screen and (max-width: 699px)' >
    <title><?php is_home() ? bloginfo('description') : wp_title(''); ?> | <?php bloginfo('name'); ?></title>
    <?php wp_head(); ?> 
 </head>
 <body>
    <div id="allEncompassingDiv">
      <nav>
        <ul class="buttonlogical inlineBlock">
         <li><a href="<?php echo home_url()."/"; ?>"><?php bloginfo('name'); ?></a></li>
         <?php wp_list_pages('title_li='); ?>
        </ul>
      </nav>