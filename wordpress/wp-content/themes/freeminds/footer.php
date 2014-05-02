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
      <a href="http://www.guidestar.org/partners/networkforgood/donate.jsp?ein=43-2066514" target"_blank"><img class="one-sixth first" src="/wp-content/themes/freeminds/images/logo_donate_btn.png" alt="Donate Now" width="auto" /></a>
      <a href="http://www.globalgiving.org/donate/1275/free-minds-book-club-and-writing-workshop/"><img class="one-sixth" src="/wp-content/themes/freeminds/images/logo_global_giving.jpg" alt="Donate Now" width="auto" /></a>
      <img class="one-sixth" src="/wp-content/themes/freeminds/images/logo_innovations_reading.jpg" alt="Donate Now" width="auto" />
      <img class="one-sixth" src="/wp-content/themes/freeminds/images/logo_mayors_arts.jpg" alt="Donate Now" width="auto" />
      <a href="http://www.catalogueforphilanthropy-dc.org/cfpdc/nonprofit-detail.php?id=94820"><img class="one-sixth" src="/wp-content/themes/freeminds/images/logo_philanthropy.jpg" alt="Donate Now" width="auto" /></a>
      <img class="one-sixth" src="/wp-content/themes/freeminds/images/logo_united_way.jpg" alt="Donate Now" width="auto" />
    </div> <!-- end sponsor logos -->
</div> <!-- end .site-container or #wrap -->


<?php wp_footer();  ?> <!-- we need this for plugins -->

</body>
</html>
