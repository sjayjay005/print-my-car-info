<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              www.smudge.co.za
 * @since             1.0.0
 * @package           Print_My_Car_Info
 *
 * @wordpress-plugin
 * Plugin Name:       Print my car info
 * Plugin URI:        https://github.com/sjayjay005/print-my-car-info
 * Description:       Generate a QR Code page for a car product, print it and stick it to a car window. Smart, simple.
 * Version:           1.0.0
 * Author:            Jayjay Ntshwenyese
 * Author URI:        www.smudge.co.za
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       print-my-car-info
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'PLUGIN_NAME_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-print-my-car-info-activator.php
 */
function activate_print_my_car_info() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-print-my-car-info-activator.php';
	Print_My_Car_Info_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-print-my-car-info-deactivator.php
 */
function deactivate_print_my_car_info() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-print-my-car-info-deactivator.php';
	Print_My_Car_Info_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_print_my_car_info' );
register_deactivation_hook( __FILE__, 'deactivate_print_my_car_info' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-print-my-car-info.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_print_my_car_info() {

	$plugin = new Print_My_Car_Info();
	$plugin->run();

}
run_print_my_car_info();
