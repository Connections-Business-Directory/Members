<?php
/**
 * Template for the Connections Business Directory plugin.
 *
 * @package   Connections Business Directory Template - Members
 * @category  Template
 * @author    Steven A. Zahm
 * @license   GPL-2.0+
 * @link      https://connections-pro.com
 * @copyright 2023 Steven A. Zahm
 *
 * @wordpress-plugin
 * Plugin Name:       Connections Business Directory Template - Members
 * Plugin URI:        https://connections-pro.com
 * Description:       Template for the Connections Business Directory
 * Version:           1.0
 * Requires at least: 5.6
 * Requires PHP:      7.0
 * Author:            Steven A. Zahm
 * Author URI:        https://connections-pro.com
 * License:           GPL-2.0+
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       cnt_members
 * Domain Path:       /languages
 */

add_action(
	'Connections_Directory/Loaded',
	static function() {

		add_action(
			'cn_register_template',
			static function() {

				$atts = array(
					'name'        => 'Members',
					'type'        => 'family',
					'slug'        => 'members',
					'version'     => '1.0',
					'author'      => 'Phill Pafford',
					'authorURL'   => 'https://llihp.blogspot.com',
					'description' => 'Shows popup with a Google Map.',
					'path'        => plugin_dir_path( __FILE__ ) . 'template',
					'url'         => plugin_dir_url( __FILE__ ) . 'template',
				);

				cnTemplateFactory::register( $atts );
			}
		);
	}
);
