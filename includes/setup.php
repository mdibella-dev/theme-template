<?php
/**
 * Main functions for setting up the theme.
 *
 * @author  Marco Di Bella
 * @package <THEME-PACKAGE>
 */

namespace THEME_NAMESPACE;


/** Prevent direct access */

defined( 'ABSPATH' ) or exit;



if( ! function_exists( 'theme_after_setup_theme' ) ) :

    /**
     * Performs basic settings for the theme.
     *
     * @since  1.0.0
     */

     function theme__after_setup_theme()
     {
        // Enables internationalization.
        load_theme_textdomain( '<THEME-TEXTDOMAIN>', THEME_URI . 'languages' );


        // Adds 'wide' support for the block editor (Gutenberg).
        add_theme_support( 'align-wide' );


        // Enables responsive embedding of media embeds.
        add_theme_support( 'responsive-embeds' );


        // Adds editor styles.
        add_theme_support( 'editor-styles' );
        add_editor_style( 'assets/build/css/style-editor.min.css' );        // change path/name if necessary
    }

    add_action( 'after_setup_theme', 'THEME_NAMESPACE\theme_after_setup_theme' );

endif;



/**
 * Loads a set of necessary JS scripts and stylesheets.
 *
 * @since  1.0.0
 */

function theme_enqueue_scripts()
{
    /**
     * Registers and loads the theme's own styles and scripts.
     *
     * Note: The style.css in the main directory is only used for theme identification and versioning.
     * Actually the (compressed) style information can be found in frontend(.min).css.
     */

    wp_enqueue_style(
        'mdb-frontend-style',
        THEME_URI . 'assets/build/css/style-frontend.min.css',  // change path/name if necessary
        array(),
        THEME_VERSION
    );


    wp_enqueue_script(
        'mdb-frontend-script',
        THEME_URI . 'assets/build/js/frontend.min.js',          // change path/name if necessary
        array( 'jquery' ),
        THEME_VERSION,
        true
    );
}

add_action( 'wp_enqueue_scripts', 'THEME_NAMESPACE\theme_enqueue_scripts', 9999 );
