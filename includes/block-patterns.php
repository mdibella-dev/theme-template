<?php
/**
 * Additional setup for the block patterns.
 *
 * @author   Marco Di Bella
 * @package  <THEME-PACKAGE>
 */

namespace THEME_NAMESPACE;


/** Prevent direct access */

defined( 'ABSPATH' ) or exit;



/**
 * Registers block patterns and categories.
 *
 * @since  1.0.0
 */

function theme_register_block_patterns()
{
    /**
     * Filters the theme block pattern categories.
     */

    $block_pattern_categories = array(
        'featured' => array( 'label' => __( 'Featured', 'mdb' ) ),
        'footer'   => array( 'label' => __( 'Footers', 'mdb' ) ),
        'header'   => array( 'label' => __( 'Headers', 'mdb' ) ),
        'query'    => array( 'label' => __( 'Query', 'mdb' ) ),
        'pages'    => array( 'label' => __( 'Pages', 'mdb' ) ),
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
        $pattern_file = get_theme_file_path( '/includes/patterns/' . $block_pattern . '.php' );

        register_block_pattern(
            '<THEME-PREFIX>' . '/' . $block_pattern,
            require $pattern_file
        );
    endforeach;
}

add_action( 'init', 'THEME_NAMESPACE\theme_register_block_patterns', 9 );
