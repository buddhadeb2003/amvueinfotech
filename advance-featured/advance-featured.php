<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://buddhadeb.com
 * @since             1.0.0
 * @package           Advance_Featured
 *
 * @wordpress-plugin
 * Plugin Name:       Advance Featured
 * Plugin URI:        https://advance-featured.com
 * Description:       This is a description of the plugin.
 * Version:           1.0.0
 * Author:            Buddhadeb Roy 
 * Author URI:        https://buddhadeb.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       advance-featured
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
define( 'ADVANCE_FEATURED_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-advance-featured-activator.php
 */
function activate_advance_featured() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-advance-featured-activator.php';
	Advance_Featured_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-advance-featured-deactivator.php
 */
function deactivate_advance_featured() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-advance-featured-deactivator.php';
	Advance_Featured_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_advance_featured' );
register_deactivation_hook( __FILE__, 'deactivate_advance_featured' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-advance-featured.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_advance_featured() {

	$plugin = new Advance_Featured();
	$plugin->run();

}
run_advance_featured();
