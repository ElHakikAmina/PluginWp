<?php
/*
Plugin Name: My Image Plugin Amina
Description: Adds an image to your website.
Version: 1.0
*/

function add_my_image() {
  echo '<img src="' . plugin_dir_url( __FILE__ ) . 'my-image.jpg" alt="My Image" />';
}

add_action( 'wp_footer', 'add_my_image' );
?>
