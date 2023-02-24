<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://agrivirtual.eu
 * @since      1.0.0
 *
 * @package    Arvesta_Restricted_Access
 * @subpackage Arvesta_Restricted_Access/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Arvesta_Restricted_Access
 * @subpackage Arvesta_Restricted_Access/includes
 * @author     Remy Chauveau <rem.chauveau@gmail.com>
 */
class Arvesta_Restricted_Access_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'arvesta-restricted-access',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
