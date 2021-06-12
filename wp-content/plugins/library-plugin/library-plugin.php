<?php
/**
 * Plugin Name:     Library Plugin
 * Plugin URI:      PLUGIN SITE HERE
 * Description:     This is library book search plugin for interview purpose
 * Author:          YOUR NAME HERE
 * Author URI:      YOUR SITE HERE
 * Text Domain:     library-plugin
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Library_Plugin
 */

// Your code starts here.

define('PLUGIN_BASE_DIR', plugin_dir_path(__FILE__));
define('PLUGIN_DIR_URL', plugin_dir_url(__FILE__));

require PLUGIN_BASE_DIR.'classes/traits.php';
require PLUGIN_BASE_DIR.'classes/book-cpt.php';

function libary_book_activate() {
	new BookBase();
	flush_rewrite_rules();
}

add_action( 'plugins_loaded', 'libary_book_activate' );

register_uninstall_hook( __FILE__, 'libary_book_uninstall' );
function libary_book_uninstall() {
	unregister_post_type( 'book' );
}