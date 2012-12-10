<?php
/**
 * Plugin Name: Plugin Boilerplate
 * Plugin URI:  https://github.com/ericmann/wp-plugin-boilerplate
 * Description: WordPress plugin boilerplate framework.
 * Version:     1.0
 * Author:      Eric Mann
 * Author URI:  http://eamann.com
 * License:     GPLv2+
 */

/**
 * Copyright 2012  Eric Mann
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License, version 2 or, at
 * your discretion, any later version, as published by the Free
 * Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */

// Useful global constants
define( 'PREFIX_VERSION', '1.0' );
define( 'PREFIX_URL',     plugin_dir_url( __FILE__ ) );
define( 'PREFIX_PATH',    plugin_dir_path( __FILE__ ) );

/**
 * Default initialization for the plugin:
 * - Registers the default textdomain.
 */
function prefix_init() {
	load_plugin_textdomain( 'prefix_translate', false, dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/lang' );
}

/**
 * Activate the plugin
 */
function prefix_activate() {
	// First load the init scripts in case any rewrite functionality is being loaded
	prefix_init();
}
register_activation_hook( __FILE__, 'prefix_deactivate' );

/**
 * Deactivate the plugin
 */
function prefix_deactivate() {

}
register_deactivation_hook( __FILE__, 'prefix_deactivate' );

// Wireup actions
add_action( 'init', 'prefix_init' );

// Wireup filters

// Wireup shortcodes

?>