<?php
/**
 *
 * This is the root file of the ASD Iframe Tags wp_kses WordPress plugin
 *
 * @package ASD_wp_kses_Iframe_Tags
 * Plugin Name:    ASD wp_kses Iframe Tags
 * Plugin URI:     https://artisansitedesigns.com/
 * Deiframeion:
 * Author:         Michael H Fahey
 * Author URI:     https://artisansitedesigns.com/staff/michael-h-fahey/
 * Text Domain:    asd_iframe_tags_wpkses
 * License:        GPL3
 * Version:        1.201904141
 *
 * ASD Iframe Tags wp_kses is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * any later version.
 *
 * ASD Iframe Tags wp_kses is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with ASD Iframe Tags wp_kses. If not, see
 * https://www.gnu.org/licenses/gpl.html
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '' );
}

if ( ! defined( 'ASD_IFRAME_TAGS_WPKSES_DIR' ) ) {
	define( 'ASD_IFRAME_TAGS_WPKSES_DIR', plugin_dir_path( __FILE__ ) );
}

if ( ! defined( 'ASD_IFRAME_TAGS_WPKSES_URL' ) ) {
	define( 'ASD_IFRAME_TAGS_WPKSES_URL', plugin_dir_url( __FILE__ ) );
}

require_once 'includes/asd-admin-menu/asd-admin-menu.php';

global $allowedposttags;
$allowedposttags['iframe'] = array(
	'src' => array(),
	'width' => array(),
	'height' => array(),
	'frameborder' => array(),
);


/** ----------------------------------------------------------------------------
 *   Function asd_iframe_tags_wpkses_plugin_action_links()
 *   Adds links to the Dashboard Plugin page for this plugin.
 *   Hooks to admin_menu action.
 *  ----------------------------------------------------------------------------
 *
 *   @param Array $actions -  Returned as an array of html links.
 */
function asd_iframe_tags_wpkses_plugin_action_links( $actions ) {
	if ( is_plugin_active( plugin_basename( __FILE__ ) ) ) {
		$actions[0] = '<a target="_blank" href="https://artisansitedesigns.com/">Help</a>';
		/* $actions[1] = '<a href="' . admin_url()   . '">' .  'Settings'  . '</a>';  */
	}
		return apply_filters( 'iframe_tags_wpksess_actions', $actions );
}
add_filter( 'plugin_action_links_' . plugin_basename( __FILE__ ), 'asd_iframe_tags_wpkses_plugin_action_links' );



