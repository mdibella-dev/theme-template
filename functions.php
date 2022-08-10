<?php
/**
 * The theme's core file.
 *
 * @author  Marco Di Bella
 * @package <PACKAGE-NAME>
 */


/** Prevent direct access */

defined( 'ABSPATH' ) or exit;



/** Turn off notices */

error_reporting( E_ALL ^ E_NOTICE );



/** Include files */

require_once( get_template_directory() . '/includes/setup.php' );
