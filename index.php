<?php

/*
Plugin Name: WP Admin Theme
Plugin URI: http://wpadminthemes.net
Description: WP Admin Theme
Author: Jessica K
Version: 1.0
Author URI: http://wpadminthemes.net
*/

// Add Custom CSS
function load_custom_wp_admin_style() {
        wp_register_style( 'custom_wp_admin_css', plugins_url( 'style.css' , __FILE__ ) );
        wp_enqueue_style( 'custom_wp_admin_css' );
}
add_action( 'admin_enqueue_scripts', 'load_custom_wp_admin_style' );
add_action( 'login_head', 'load_custom_wp_admin_style' );

?>