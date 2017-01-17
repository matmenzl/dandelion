<?php
/**
 * The sidebar containing the faq sidebar widget area.
 *
 */

if ( ! is_active_sidebar( 'faq' ) ) {
  return;
}
?>
  <div>
      <!-- <div id="secondary" class="widget-area col-md-3 col-lg-3" role="complementary">
    -->  <div class="col-md-3 sidebarcontact"><!-- class sidebarcontact makes widget not schräg -->
            <?php dynamic_sidebar( 'faq' ); ?>
    </div>
  </div> 
