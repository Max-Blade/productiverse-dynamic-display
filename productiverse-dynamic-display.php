<?php

/**
 * @package           Productiverse Dynamic Display
 *
 * Plugin Name:       Productiverse Dynamic Display
 * Plugin URI:        https://github.com/Max-Blade/productiverse-dynamic-display
 * Description:       Productiverse Dynamic Display is the ultimate plugin to take your e-commerce store customization to the next level.
 * Version:           1.0.0
 * Author:            Samuel Ramos
 * Author URI:        https://github.com/Max-Blade/
 * Author Mail:		  samm.blackmail@gmail.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       productiverse-dynamic-display
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define('PDD_DIR_PATH', plugin_dir_path( __FILE__ ));

require_once PDD_DIR_PATH . 'options.php';


/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-pdd-activator.php
 */
function activate_plugin_name() {
	require_once PDD_INCLUDES . 'class-pdd-activator.php';
	Productiverse_Dynamic_Display_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-pdd-deactivator.php
 */
function deactivate_plugin_name() {
	require_once PDD_INCLUDES . 'class-pdd-deactivator.php';
	Productiverse_Dynamic_Display_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_plugin_name' );
register_deactivation_hook( __FILE__, 'deactivate_plugin_name' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require PDD_INCLUDES . 'class-pdd.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_plugin_name() {

	$plugin = new Productiverse_Dynamic_Display();
	$plugin->run();

}
run_plugin_name();
