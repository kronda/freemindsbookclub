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
  echo '<h5 class="page-quote">'; 
  echo the_field('quote');
  echo '</h5>';
  echo '<span class="quote-attr">'; 
  echo the_field('quote_attribution');
  echo '</span>';
}

genesis();