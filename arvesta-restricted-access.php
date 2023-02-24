<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://agrivirtual.eu
 * @since             1.0.0
 * @package           Arvesta_Restricted_Access
 *
 * @wordpress-plugin
 * Plugin Name:       Arvesta Restricted Access
 * Plugin URI:        https://agrivirtual.eu
 * Description:       NEED ARVESTA CORE TO WORK - Allow the restriction of the page the current user is not identified allong side the Arvesta Core Database
 * Version:           1.0.0
 * Author:            Remy Chauveau
 * Author URI:        https://agrivirtual.eu
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       arvesta-restricted-access
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
define( 'ARVESTA_RESTRICTED_ACCESS_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-arvesta-restricted-access-activator.php
 */
function activate_arvesta_restricted_access() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-arvesta-restricted-access-activator.php';
	Arvesta_Restricted_Access_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-arvesta-restricted-access-deactivator.php
 */
function deactivate_arvesta_restricted_access() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-arvesta-restricted-access-deactivator.php';
	Arvesta_Restricted_Access_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_arvesta_restricted_access' );
register_deactivation_hook( __FILE__, 'deactivate_arvesta_restricted_access' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-arvesta-restricted-access.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_arvesta_restricted_access() {

	$plugin = new Arvesta_Restricted_Access();
	$plugin->run();

}
run_arvesta_restricted_access();
