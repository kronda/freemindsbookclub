<?php
// Start the engine
require_once( get_template_directory() . '/lib/init.php' );

// Child theme (do not remove)
define( 'CHILD_THEME_NAME', 'Free Minds Book Club' );
define( 'CHILD_THEME_URL', 'http://karveldigital.com/' );

// Add Viewport meta tag for mobile browsers
add_action( 'genesis_meta', 'sample_viewport_meta_tag' );
function sample_viewport_meta_tag() {
	echo '<meta name="viewport" content="width=device-width, initial-scale=1.0"/>';
}

// Add support for custom background
add_theme_support( 'custom-background' );
add_theme_support( 'post-thumbnail');

// Add support for custom header
// add_theme_support( 'genesis-custom-header', array(
// 	'width' => 1152,
// 	'height' => 120
// ) );

// Add support for 3-column footer widgets
add_theme_support( 'genesis-footer-widgets', 3 );

// Add image size for home page featured image
add_image_size('home-featured', 600, 325, TRUE);

/**
 * Add Google fonts to the header
 */
function freeminds_google_fonts() {
  echo '<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Arvo:400,700,400italic,700italic|Montserrat:400,700" media="screen">';
}
add_action( 'wp_head', 'freeminds_google_fonts', 5);

/**
 * Filter the genesis_seo_site_title function to use an image for the logo instead of a background image
 * 
 * The genesis_seo_site_title function is located in genesis/lib/structure/header.php
 * @link http://blackhillswebworks.com/?p=4144
 *
 */
function freeminds_filter_genesis_seo_site_title( $title, $inside ){
 
  $child_inside = sprintf( '<a href="%s" title="%s"><img src="'. get_stylesheet_directory_uri() . '/images/fm_logo_small.png" title="%s" alt="%s"/></a>', trailingslashit( home_url() ), esc_attr( get_bloginfo( 'name' ) ), esc_attr( get_bloginfo( 'name' ) ), esc_attr( get_bloginfo( 'name' ) ) );
 
  $title = str_replace( $inside, $child_inside, $title );
 
  return $title;
}
add_filter( 'genesis_seo_title', 'freeminds_filter_genesis_seo_site_title', 10, 2 );

/**
 * Enqueue scripts and styles
 */
function freeminds_scripts() {
  wp_enqueue_script( 'freeminds_enquire', get_stylesheet_directory_uri() . '/js/vendor/enquire.min.js', array(), '1.0.2', false );
  wp_enqueue_script( 'freeminds', get_stylesheet_directory_uri() . '/js/freeminds.js', array('jquery', 'freeminds_enquire'));

}
add_action( 'wp_enqueue_scripts', 'freeminds_scripts' );

/**
 * Register widgetized area and update sidebar with default widgets
 */
function freeminds_widgets_init() {
  genesis_register_sidebar( array(
  'name'          => __( 'Featured Success Story', 'freeminds' ),
  'id'            => 'featured-success-story',
  'description'   => __( 'Featured success story on home page', 'freeminds' ),
  'before_widget' => '<div id="%1$s" class="%2$s">',
  'after_widget' => '</div>',
  'before_title' => '<h3 class="featured-success-story">',
  'after_title' => '</h3>',
) );

  register_sidebar( array(
    'name' => 'Featured Poetry Blog',
    'id'  => 'featured-poetry-blog',
    'description' => 'Use this area to add a featured poetry blog',
    'before_widget' => '<div id="%1$s" class="%2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="featured-poetry">',
    'after_title' => '</h3>',
  ));

  register_sidebar( array(
    'name' => 'Featured News Stories',
    'id'  => 'featured-news-stories',
    'description' => 'Use this area to add featured news stories',
    'before_widget' => '<div id="%1$s" class="%2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="featured-poetry">',
    'after_title' => '</h3>',
  ));
}
add_action( 'widgets_init', 'freeminds_widgets_init' );


/** Exclude Success Story & News / Events category from posts */
add_action( 'pre_get_posts', 'freeminds_exclude_category_from_blog' );
function freeminds_exclude_category_from_blog( $query ) {

    if( $query->is_main_query() && $query->is_home() ) {
        $query->set( 'cat', '-393, -394' );
    }
}