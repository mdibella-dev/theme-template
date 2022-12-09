<?php
/**
 * The theme's core file.
 *
 * @author   Marco Di Bella
 * @package  <THEME-PACKAGE>
 */


/** Prevent direct access */

defined( 'ABSPATH' ) or exit;



/** Turn off notices */

error_reporting( E_ALL ^ E_NOTICE );



/** Variables and definitions **/

const THEME_VERSION = '<THEME-VERSION>';
const THEME_DOMAIN  = '<THEME-TEXTDOMAIN>';


/** Include files */

require_once( get_template_directory() . '/includes/setup.php' );
require_once( get_template_directory() . '/includes/block-patterns.php' );
require_once( get_template_directory() . '/includes/block-styles.php' );
