<?php
/**
 * Template Name: Page Template
 * 
 * The template file for single pages
 *
 * @package freeminds
 * 
 */

add_action( 'genesis_loop', 'freeminds_page_quote');

function freeminds_page_quote() {
  echo '<h5>' . the_field('quote') . '</h5>';
  echo '<span>' . the_field('quote_attribution') . '</span>';
}

genesis();