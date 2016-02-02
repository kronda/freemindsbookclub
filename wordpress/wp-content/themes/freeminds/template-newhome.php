<?php
/*
  Template Name: New home
 */
?>
<?php get_header(); ?>

<div id="inner-1" class="inner-wrap">
    <div class="wrap">
      <div id="content-sidebar-wrap">
      <div id="left-sidebar">
       <div id="featured-post-teaser" class="new-featured">
                  <div class="featured-post-inner">
                    <?php dynamic_sidebar( 'home-page-givingtuesday' ); ?>
                  </div>
                </div>
      
<!--      poetry blog start-->
      
    <div class="one-third first poetry-teaser new-poetry">
            <?php dynamic_sidebar( 'Featured Poetry Blog' ); ?>
          </div>  
      
 <!--   signup section start --> 
 
 <div class="one-third first poetry-teaser new-signup">
            <div id="featured-post-3" class="featured-content featuredpost">
              <h2 class="featured-poetry">Newsletter sign up</h2>
              <form id="n-input">
              <input type="text" value="" class="n-input" placeholder="Email">
              <input type="submit" class="sub-btn" value="SUBSCRIBE">
              </form>
            </div>
          </div>
      
      </div><!--left-sidebar-->
      
       <div id="right-sidebar">
      <div id="featured-post-4" class="featured-content featuredpost \">
              <div class="img-main"><a href="http://staging.freemindsbookclub.org/giving-tuesday" title="Giving Tuesday" class="alignright new-right"><img src="http://staging.freemindsbookclub.org/wp-content/uploads/2015/11/Journal-Flyer-for-WEBSITE.jpg" class="entry-image attachment-post" alt="Journal Flyer for WEBSITE" itemprop="image" height="325" width="600"></a>
                
              </div>
            </div>
      
<!--      event section start-->

<div class="two-thirds news-teaser event">
<h1>Upcoming Events</h1>
            
             <?php dynamic_sidebar( 'upcoming-event' ); ?>
            </div>
            
 <!--  press  wrap start  -->       
   <div class="press-wrap">  
      <div class="press-iner">
	     <h1 class="entry-title">In The Press</h1> 
		 <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			      $limit = 4;
			      $args = array( 'post_type' => 'press','posts_per_page' => $limit,'paged' => $paged,'order' => 'asc' );
                 query_posts($args);
			     while ( have_posts() ) : the_post();
			     $count_posts = wp_count_posts();
		         ?>
		 
          <p><a target="_blank" href="<?php echo get_post_meta($post->ID, 'place', true)?>"><?php the_title();?></a><br>
		  <?php the_content();?></p>
<?php  endwhile;?>  
          
</div>
</div>         
      
      </div><!--right-sidebar-->
    
          
          <div class="home-feature-quote">
         <?php dynamic_sidebar( 'Home Page Quote' ); ?>
          </div>
        </div>
      </div>
    </div>

  <!-- end .site-inner or #inner -->

<?php get_footer(); ?>