<?php
/**
 * Template Name: Home Page
 * 
 * The template file for the home page
 *
 *
 * @package freeminds
 * 
 */

remove_action( 'genesis_loop', 'genesis_do_loop');
add_action( 'genesis_loop', 'freeminds_success_loop');

function freeminds_success_loop() {

  if ( dynamic_sidebar('Featured Success Story') ) : 
  endif;

  echo '<div class="one-half first">';
  if ( dynamic_sidebar('Featured Poetry Blog') ) : 
  endif;
  echo '</div>';

  echo '<div class="one-half">';
    if ( dynamic_sidebar('Featured News Stories') ) : 
    endif;
  echo '</div>';

  echo '<h5>' . the_field('quote') . '</h5>';
  echo '<span>' . the_field('quote_attribution') . '</span>';
}


genesis();
