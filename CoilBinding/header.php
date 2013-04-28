<DOCTYPE! html>
<html>
<head>
 <title><?php bloginfo('name'); ?> | <?php is_home() ? bloginfo('description') : wp_title(''); ?></title>
 <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
 <?php wp_head(); ?>
</head>
<body>
 <header>
  <p id="companyNameAndSlogan">
    <a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a>
    <br/>
    <?php bloginfo('description'); ?> 
  </p>
  <nav>
   <ul>
    <?php wp_list_pages('title_li='); ?>
   </ul>
  </nav>
 </header>