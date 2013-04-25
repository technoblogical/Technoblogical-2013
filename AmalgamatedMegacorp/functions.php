<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

register_sidebar( array(
  'name' => 'Banner Area',
  'id' => 'banner_area',
  'before_widget' => '<div class="bannerDiv">',
  'after_widget' => '</div> <!-- bannerDiv -->',
  'before_title' => '<strong>',
  'after_title' => '</strong>',
 ) );

register_sidebar( array(
  'name' => 'Mobile Banner',
  'id' => 'mobile_banner',
  'before_widget' => '<div class="mobileBannerDiv">',
  'after_widget' => '</div> <!-- mobileBannerDiv -->',
  'before_title' => '<strong>',
  'after_title' => '</strong>',
 ) );

 register_sidebar( array(
  'name' => 'Left Sidebar',
  'id' => 'left_sidebar',
  'before_widget' => '<div class="widgetDiv">',
  'after_widget' => '</div> <!-- widgetDiv -->',
  'before_title' => '<strong>',
  'after_title' => '</strong>',
 ) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );
?>