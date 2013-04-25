<?php
function arphabet_widgets_init() {

 register_sidebar( array(
  'name' => 'left sidebar',
  'id' => 'left_sidebar',
  'before_widget' => '<div>',
  'after_widget' => '</div>',
  'before_title' => '<h2 class="rounded">',
  'after_title' => '</h2>',
 ) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );
?>