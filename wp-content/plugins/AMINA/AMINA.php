<?php
/*
Plugin Name: AMINA
Description: AMINA
Version: 1.0
Author: EL HAKIK Amina
Author URL: http://localhost/Wordpress/Workshop_CMS
*/
function hello_world() {
    echo "<p>Hello, world! hiiii</p>";
}

add_action('wp_footer', 'hello_world');
?>

