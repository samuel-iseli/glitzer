<?php 
/**
 *  webundso Funktionen 
 *  
 * 
 */
 
 
/** Hide Adminbar **/
add_filter('show_admin_bar', '__return_false');

// editor darf menüs
$role_object = get_role( 'editor' );
$role_object->add_cap( 'edit_theme_options' );

/** standard template Name **/
add_filter('default_page_template_title', function() {
    return __('Standard Template', 'jointswp');
});

/** Image Orientation **/
// adds class img-landscape or img-portrait to the image

function wus_single_image_filter($size){
  $tn_id = get_post_thumbnail_id( $post->ID );
  $img = wp_get_attachment_image_src( $tn_id, $size );
  $width = $img[1];
  $height = $img[2];
    if (has_post_thumbnail($post->ID )){
        if ($width > $height){  ?>
            <?php the_post_thumbnail($size, array( 'class'  => "attachment-".$size." size-".$size." img-landscape") ); 
        }else{ ?>
            <?php the_post_thumbnail($size, array( 'class'  => "attachment-".$size." size-".$size." img-portrait") ); 
        }
    } 
}

/** No fullscreen in Gutenberg **/

if (is_admin()) { 
  function jba_disable_editor_fullscreen_by_default() {
      $script = "jQuery( window ).load(function() { const isFullscreenMode = wp.data.select( 'core/edit-post' ).isFeatureActive( 'fullscreenMode' ); if ( isFullscreenMode ) { wp.data.dispatch( 'core/edit-post' ).toggleFeature( 'fullscreenMode' ); } });";
      wp_add_inline_script( 'wp-blocks', $script );
  }
  add_action( 'enqueue_block_editor_assets', 'jba_disable_editor_fullscreen_by_default' );
}

/** Allow SVG Upload **/
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

/** Remove colors and font-size in Backend **/
// Disable colors
add_theme_support( 'disable-custom-colors' );
add_theme_support( 'editor-color-palette' );
add_theme_support( 'editor-gradient-presets', [] );
add_theme_support( 'disable-custom-gradients' );

//Disable font sizes
add_theme_support( 'editor-font-sizes', [] );
add_theme_support( 'disable-custom-font-sizes' );

// remove initial Buchstabe
function disable_drop_cap_editor_settings_5_7(array $editor_settings): array {
  $editor_settings['__experimentalFeatures']['defaults']['typography']['dropCap'] = false;
  return $editor_settings;
}
add_filter('block_editor_settings', 'disable_drop_cap_editor_settings_5_7');

/** Remove Block Styles in Editor (adds JS-File) **/
// https://soderlind.no/hide-block-styles-in-gutenberg/
// https://wordpress.stackexchange.com/questions/339436/removing-panels-meta-boxes-in-the-block-editor  
add_action( 'init', 'remove_block_style' );

function remove_block_style() {
  // Register the block editor script.
  wp_register_script( 'remove-block-style', get_stylesheet_directory_uri() . '/assets/scripts/remove-block-styles.js', [ 'wp-blocks', 'wp-edit-post' ] );
  // register block editor script.
  register_block_type( 'remove/block-style', [
    'editor_script' => 'remove-block-style',
  ] );
}
