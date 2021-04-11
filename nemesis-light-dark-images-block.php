<?php
/**
 * Nemesis Light Dark Images Gutenberg
 *
 * Plugin Name: Nemesis Light Dark Images
 * Plugin URI: https://nemesisweb.dev/
 * Description: A Gutenberg block to show one image or another depending on the media query: prefers-color-scheme.
 * Version: 1.0.0
 *
 * Author:      Aleix Martí
 * Author URI:  https://nemesisweb.dev
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 *
 * @package    Nemesis_Block
 * @subpackage Root
 * @author     Aleix Martí <aleix.marti@gmail.com>
 * @since      1.0.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}//end if

/**
 * BLOCK: Nemesis Light Dark Images Block.
 */
require_once( WP_PLUGIN_DIR . '/' . dirname( plugin_basename( __FILE__ ) ) . '/block/light-dark-images/index.php' );
