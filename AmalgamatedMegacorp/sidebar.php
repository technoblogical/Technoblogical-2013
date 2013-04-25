<?php if ( wp_is_mobile() ) { ?>
 <?php if ( dynamic_sidebar('mobile_banner') ) : else :  endif; ?>
<?php } else {?>
  <aside class="floatLeft">
   <?php if ( dynamic_sidebar('left_sidebar') ) : else :  endif; ?>
  </aside>
<?php } ?>