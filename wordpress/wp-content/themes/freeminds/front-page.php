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
}


genesis();
