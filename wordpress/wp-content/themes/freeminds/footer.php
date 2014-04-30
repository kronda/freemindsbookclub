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

genesis_structural_wrap( 'footer', 'close' );
echo '</div>'; //* end .site-inner or #inner

echo '<footer class="site-footer">';

  echo '<div class="footer-1 two-thirds first">';
    if ( dynamic_sidebar('Footer 1') ) : 
    endif;
  echo '</div>';

  echo '<div class="footer-2 one-third">';
    if ( dynamic_sidebar('Footer 2') ) : 
    endif;
  echo '</div>';

echo '</footer>';

echo '</div>'; //* end .site-container or #wrap


wp_footer(); //* we need this for plugins
?>
</body>
</html>
