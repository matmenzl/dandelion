<?php
/**
 * The sidebar containing the contact sidebar widget area.
 *
 */
 
if ( ! is_active_sidebar( 'application' ) ) {
  return;
}
?>
 
<div id="secondary" class="widget-area col-md-3 col-lg-3" role="complementary">
  <div class="well">
    <?php dynamic_sidebar( 'application' ); ?>
  </div>
</div><!-- #secondary -->
 
</div> <!-- .row -->
</div> <!-- .container -->