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
add_action( 'genesis_loop', 'freeminds_do_success_loop');

function freeminds_do_success_loop() {
  global $paged;
  global $query_args;
  $args = array(
    'cat' => 393,
    'posts_per_page' => 5
  );

  genesis_custom_loop( wp_parse_args($query_args, $args) );
}


genesis();