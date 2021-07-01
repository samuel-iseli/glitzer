<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>

<div class="top-bar" id="top-bar-menu">
	<div class="top-bar-left">
		<div class="logo">
			<a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
		</div>
	</div>
	<div class="top-bar-right">
		<div class="menu-toggle">
			<!-- <button class="menu-icon" type="button" data-toggle="off-canvas"></button>-->
			<a data-toggle="off-canvas"><?php _e( 'Menu', 'jointswp' ); ?></a>
		</div>
	</div>
</div>