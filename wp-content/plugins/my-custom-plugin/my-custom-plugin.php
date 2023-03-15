<?php
/*
Plugin Name: My Custom Plugin
Description: Adds an input to the database
Version: 1.0
Author: Your Name
Author URI: Your Website
*/

// Define the database table name
define( 'MY_CUSTOM_TABLE', $wpdb->prefix . 'my_custom_table' );

// Register the plugin activation hook
register_activation_hook( __FILE__, 'my_custom_plugin_activate' );

// Create the database table on plugin activation
function my_custom_plugin_activate() {
    global $wpdb;

    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE " . MY_CUSTOM_TABLE . " (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        input varchar(255) NOT NULL,
        PRIMARY KEY (id)
    ) $charset_collate;";

    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta( $sql );
}

// Add the input to the database
function my_custom_plugin_add_input( $input ) {
    global $wpdb;

    $wpdb->insert( MY_CUSTOM_TABLE, array(
        'input' => $input
    ) );
}
my_custom_plugin_add_input( 'Hello, world!' );

?>