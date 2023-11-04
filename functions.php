<?php
/**
 * The theme's core file.
 *
 * @author  Marco Di Bella
 * @package ph_THEME-PACKAGE
 */

namespace ph_THEME_NAMESPACE;


/** Prevent direct access */

defined( 'ABSPATH' ) or exit;



/** Turn off notices */

error_reporting( E_ALL ^ E_NOTICE );



/** Variables and definitions **/

define( __NAMESPACE__ . "\THEME_VERSION", 'ph_THEME-VERSION' );                // The theme's version
define( __NAMESPACE__ . "\THEME_DIR", get_template_directory() . '/' );       // The theme's directory
define( __NAMESPACE__ . "\THEME_URI", get_template_directory_uri() .'/' );    // The theme's uri



/** Include files */

require_once THEME_DIR . 'includes/setup.php';
require_once THEME_DIR . 'includes/block-patterns.php';
require_once THEME_DIR . 'includes/block-styles.php';
