<?php
/**
 * The sidebar containing the contact sidebar widget area.
 *
 */
 
if ( ! is_active_sidebar( 'contact' ) ) {
	return;
}
?>
<div>
<!-- <div id="secondary" class="widget-area col-md-3 col-lg-3" role="complementary">
 -->	<div class="col-md-3 sidebarcontact">
		<?php dynamic_sidebar( 'contact' ); ?>
	</div>
</div> 
</div> <!-- .row -->
