<?php
/*
Plugin Name: Wordpress-plugin-demo
Plugin URI: https://github.com/Wordpress-plugin-demo
Description: A simple plugin for demonstration.
Version: 1.0.0
Author: Yinkhwin0o
Author URI: https://github.com/Yinkhwin0o
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: my-plugin
Domain Path: /languages
*/

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Include other files.
require_once plugin_dir_path( __FILE__ ) . 'includes/class-my-plugin.php';

// Initialize the plugin.
function my_plugin_init() {
    My_Plugin::init();
}
add_action( 'plugins_loaded', 'my_plugin_init' );
