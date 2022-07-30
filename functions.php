<?php
/**
 * The theme's core file.
 *
 * @author  Marco Di Bella <mdb@marcodibella.de>
 * @package <PACKAGE-NAME>
 */


defined( 'ABSPATH' ) or exit;



/** Turn off notices */

error_reporting( E_ALL ^ E_NOTICE );



/** Include function library */

require_once( get_template_directory() . '/includes/setup.php' );
