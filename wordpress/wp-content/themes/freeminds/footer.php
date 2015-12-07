<?php
/**
 * Genesis Framework.
 *
 * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
 * Please do all modifications in the form of a child theme.
 *
 * @package Genesis\Templates
 * @author  StudioPress
 * @license GPL-2.0+
 * @link    http://my.studiopress.com/themes/genesis/
 */
?>

<?php genesis_structural_wrap( 'footer', 'close' ); ?>
</div> <!-- end .site-inner or #inner --> 

<div id="footer" class="footer">
  <?php genesis_structural_wrap( 'footer-widgets', 'open' ); ?>
  <div class="footer-1 two-thirds first">
    <?php if ( dynamic_sidebar('Footer 1') ) : ?> 
    <?php endif; ?>
  </div>

  <div class="footer-2 one-third">
    <?php if ( dynamic_sidebar('Footer 2') ) : ?> 
    <?php endif; ?>
  </div>

</div> <!-- end footer -->


  <?php genesis_structural_wrap('footer-widgets', 'open'); ?>
    <div id="sponsor-logos" class="">
      <div class="footer-1 one-sixth first">
        <?php if ( dynamic_sidebar('Sponsor Logos') ) : ?>
        <?php endif; ?>
      </div>
    </div> <!-- end sponsor logos -->
</div> <!-- end .site-container or #wrap -->


<?php wp_footer();  ?> <!-- we need this for plugins -->

</body>
</html>
