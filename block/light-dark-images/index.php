<?php
/**
 * BLOCK: Light Dark Images
 *
 * Gutenberg Custom Light Dark Images Block assets.
 *
 * @since   1.0.0
 * @package Nemesis_Block
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}//end if

/**
 * Enqueue the block's assets for the editor.
 *
 * `wp-blocks`: Includes block type registration and related functions.
 * `wp-element`: Includes the WordPress Element abstraction for describing the structure of your blocks.
 * `wp-i18n`: To internationalize the block's text.
 *
 * @since 1.0.0
 */
function nemesis_light_dark_images_block_editor_assets() {

	wp_enqueue_script(
		'nemesis-light-dark-images-block', // Handle.
		plugins_url( 'block.js', __FILE__ ), // Block.js: We register the block here.
		array( 'wp-blocks', 'wp-i18n', 'wp-element', 'wp-editor' ), // Dependencies, defined above.
		filemtime( plugin_dir_path( __FILE__ ) . 'block.js' ) // filemtime — Gets file modification time.
	);

	wp_enqueue_style(
		'nemesis-light-dark-images-block-editor', // Handle.
		plugins_url( 'editor.css', __FILE__ ), // Block editor CSS.
		array( 'wp-edit-blocks' ), // Dependency to include the CSS after it.
		filemtime( plugin_dir_path( __FILE__ ) . 'editor.css' ) // filemtime — Gets file modification time.
	);

}//end nemesis_images_block_editor_assets()
add_action( 'enqueue_block_editor_assets', 'nemesis_light_dark_images_block_editor_assets' );

/**
 * Enqueue the block's assets for the frontend.
 *
 * @since 1.0.0
 */
function nemesis_light_dark_images_block_front_assets() {

	wp_enqueue_style(
		'nemesis-light-dark-imagesq-block-frontend', // Handle.
		plugins_url( 'style.css', __FILE__ ), // Block frontend CSS.
		array( 'wp-editor' ), // Dependency to include the CSS after it.
		filemtime( plugin_dir_path( __FILE__ ) . 'style.css' ) // filemtime — Gets file modification time.
	);

}//end nemesis_light_dark_images_block_front_assets()
add_action( 'enqueue_block_assets', 'nemesis_light_dark_images_block_front_assets' );