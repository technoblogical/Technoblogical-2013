<div class="amalgamatedWrapper">
  <footer>
   <small class="buttonlogical">Copyright 
    <script type="text/javascript">
     var technoblogicalCopyrightDate=new Date();
     document.write(technoblogicalCopyrightDate.getFullYear());
    </script>
    by <a href="<?php echo home_url()."/"; ?>"><?php bloginfo('name'); ?></a></small>
    <?php wp_footer(); ?> 
  </footer>
</div> <!-- .amalgamatedWrapper -->
</body>
 <?php if ( wp_is_mobile() ) { ?>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/mobile.js"></script>
 <?php } else {?>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/dropdown.js"></script>
 <?php } ?>
</html>