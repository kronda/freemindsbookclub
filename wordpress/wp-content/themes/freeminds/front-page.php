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
  echo '<div class="home-feature-wrap">';
    if ( dynamic_sidebar('Featured Success Story') ) : 
    endif;
  echo '</div>';

  echo '<div class="one-third first poetry-teaser">';
    if ( dynamic_sidebar('Featured Poetry Blog') ) : 
    endif;
  echo '</div>';

  echo '<div class="two-thirds news-teaser">';
    if ( dynamic_sidebar('Featured News Stories') ) : 
    endif;
  echo '</div>';

  echo '<div class="home-feature-quote">';
    if ( dynamic_sidebar('Home Page Quote') ) : 
    endif;
  echo '</div>';
}


genesis();
