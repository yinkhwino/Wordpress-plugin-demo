<?php

class My_Plugin {

    public static function init() {
        add_action( 'wp_enqueue_scripts', [ __CLASS__, 'enqueue_scripts' ] );
    }

    public static function enqueue_scripts() {
        wp_enqueue_style( 'my-plugin-style', plugin_dir_url( __FILE__ ) . '../css/style.css', [], '1.0.0' );
        wp_enqueue_script( 'my-plugin-script', plugin_dir_url( __FILE__ ) . '../js/script.js', [ 'jquery' ], '1.0.0', true );
    }
}