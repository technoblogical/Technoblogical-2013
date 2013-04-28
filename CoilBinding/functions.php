<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

 register_sidebar( array(
  'name' => 'LEFT SIDEBAR',
  'id' => 'left_sidebar',
  'before_widget' => '<div>',
  'after_widget' => '</div>',
  'before_title' => '<h3 class="rounded">',
  'after_title' => '</h3>',
 ) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );
?>