<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>

<div class="top-bar" id="top-bar-menu">
	<div class="top-bar-left float-left">
		<div class="logo">
			<li><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></li>
		</div>
	</div>
	<div class="top-bar-right show-for-medium">
		<?php joints_top_nav(); ?>	
	</div>
	<div class="top-bar-right float-right show-for-small-only">
		<div class="mobileTrigger">			
		<!-- <button class="menu-icon" type="button" data-toggle="off-canvas"></button>< -->
			<a data-toggle="off-canvas"><?php _e( 'Menu', 'jointswp' ); ?></a>
		</div>
	</div>
</div>