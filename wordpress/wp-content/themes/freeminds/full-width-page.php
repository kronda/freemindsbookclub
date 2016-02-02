<?php
/**
 * Template Name: Full Width
 * 
 * The template file for full width pages
 *
 *
 * @package freeminds
 * 
 */

//remove_action( 'genesis_loop', 'genesis_do_loop');
remove_action( 'genesis_sidebar', 'genesis_do_sidebar' );

genesis();
