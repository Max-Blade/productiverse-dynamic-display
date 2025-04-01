<?php

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'PDD_VERSION', '1.0.0' );

define('PDD_INCLUDES', PDD_DIR_PATH . 'includes/');

define('PDD_LANGUAGE_DIR', PDD_DIR_PATH . 'languages/');

define('PDD_ADMIN', PDD_DIR_PATH . 'admin/');
define('PDD_ADMIN_STYLE_URL', plugin_dir_url( __FILE__ ) . 'admin/css/');
define('PDD_ADMIN_SCRIPT_URL', plugin_dir_url( __FILE__ ) . 'admin/js/');

define('PDD_PUBLIC', PDD_DIR_PATH . 'public/');