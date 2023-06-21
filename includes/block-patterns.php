<?php
/**
 * Additional setup for the block patterns.
 *
 * @author  Marco Di Bella
 * @package ph_THEME-PACKAGE
 */

namespace ph_THEME_NAMESPACE;


/** Prevent direct access */

defined( 'ABSPATH' ) or exit;



/**
 * Registers block patterns and categories.
 *
 * @since  1.0.0
 */

function register_block_patterns()
{
    /**
     * Filters the theme block pattern categories.
     */

    $block_pattern_categories = array(
        'featured' => array( 'label' => __( 'Featured', 'ph_THEME-TEXTDOMAIN' ) ),
        'footer'   => array( 'label' => __( 'Footers', 'ph_THEME-TEXTDOMAIN' ) ),
        'header'   => array( 'label' => __( 'Headers', 'ph_THEME-TEXTDOMAIN' ) ),
        'query'    => array( 'label' => __( 'Query', 'ph_THEME-TEXTDOMAIN' ) ),
        'pages'    => array( 'label' => __( 'Pages', 'ph_THEME-TEXTDOMAIN' ) ),
    );

    foreach( $block_pattern_categories as $name => $properties ) :
        if( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) :
            register_block_pattern_category(
                $name,
                $properties
            );
        endif;
    endforeach;


    /**
     * Filters the theme block patterns.
     */

    $block_patterns = array(
        // add here (STRING), (STRING), ....
    );

    foreach( $block_patterns as $block_pattern ) :
        $pattern_file = THEME_DIR . 'includes/patterns/' . $block_pattern . '.php';

        register_block_pattern(
            'ph_THEME-PREFIX' . '/' . $block_pattern,
            require $pattern_file
        );
    endforeach;
}

add_action( 'init', __NAMESPACE__ . '\register_block_patterns', 9 );
