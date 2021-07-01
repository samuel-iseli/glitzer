<?php
/** 
 * For more info: https://developer.wordpress.org/themes/basics/theme-functions/
 *
 */			
	
// Theme support options
require_once(get_template_directory().'/functions/theme-support.php'); 

// WP Head and other cleanup functions
require_once(get_template_directory().'/functions/cleanup.php'); 

// Register scripts and stylesheets
require_once(get_template_directory().'/functions/enqueue-scripts.php'); 

// Register custom menus and menu walkers
require_once(get_template_directory().'/functions/menu.php'); 

// Register sidebars/widget areas
require_once(get_template_directory().'/functions/sidebar.php'); 

// Makes WordPress comments suck less
// require_once(get_template_directory().'/functions/comments.php'); 

// Replace 'older/newer' post links with numbered navigation
require_once(get_template_directory().'/functions/page-navi.php'); 

// Adds support for multiple languages
require_once(get_template_directory().'/functions/translation/translation.php'); 

// Gutenberg Special
require_once(get_template_directory().'/functions/gutenberg.php'); 

// Customize the WordPress admin/dashboard
 require_once(get_template_directory().'/functions/admin.php'); 

// Remove Emoji Support
 require_once(get_template_directory().'/functions/disable-emoji.php'); 

// Adds site styles to the Gutenberg editor
	function site_block_editor_styles() {
	  wp_enqueue_style( 'site-block-editor-styles', get_theme_file_uri( 'assets/styles/gutenberg.css' ), false, '1.0', 'all' );
	}
	add_action( 'enqueue_block_editor_assets', 'site_block_editor_styles' );

// Related post function - no need to rely on plugins
// require_once(get_template_directory().'/functions/related-posts.php'); 

// Use this as a template for custom post types
// require_once(get_template_directory().'/functions/custom-post-type.php');

// Customize the WordPress login menu
// require_once(get_template_directory().'/functions/login.php'); 

// webundso diverse Funktionen
 require_once(get_template_directory().'/functions/webundso.php'); 
