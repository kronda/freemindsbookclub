<?php
/**
 * Template Name: Front Page
 * 
 * The template file for the Front page
 *
 *
 * @package freeminds
 * 
 */

//remove_action( 'genesis_loop', 'genesis_do_loop');
remove_action( 'genesis_sidebar', 'genesis_do_sidebar' );

genesis();
