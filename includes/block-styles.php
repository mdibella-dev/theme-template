<?php
/**
 * Additional setup for the block styles.
 *
 * @author  Marco Di Bella
 * @package <THEME-PACKAGE>
 */

namespace THEME_NAMESPACE;


/** Prevent direct access */

defined( 'ABSPATH' ) or exit;



/**
 * Script and style modifications for the block editor.
 *
 * @since 1.0.0
 */

function theme_register_block_styles()
{
    wp_enqueue_script(
        '<THEME-PREFIX>-block-styles',
        get_template_directory_uri() . '/assets/src/js/block-styles.js',    // maybe add a 'build' version?
        array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ),
        THEME_VERSION,
        true
    );
}

add_action( 'enqueue_block_editor_assets', 'THEME_NAMESPACE\theme_register_block_styles' );
