<?php
/**
 * The functions file for Child of Twentyseventeen theme.
 *
 * @package WordPress
 * @subpackage child_of_twentyseventeen
 * @since 1.0
 * @version 1.0
 */
/**
 * Since 1.0.
 */

function childtheme_enqueue_styles() {
  wp_enqueue_style( 'parent-style', 
    get_template_directory_uri() . '/style.css' );

  wp_enqueue_style( 'child-style',
    get_stylesheet_directory_uri() . '/style.css',
    array( 'parent-style' ),
    wp_get_theme()->get('Version')
  );
}
function elbaron_front_page_sections() {
  return 6;
}
add_filter( 'twentyseventeen_front_page_sections', 'elbaron_front_page_sections' );
add_action( 'wp_enqueue_scripts', 'childtheme_enqueue_styles' );