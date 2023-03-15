<?php
/**
 * Plugin Name: My Form Plugin
 * Description: This plugin adds a form to your website.
 * Version: 1.0
 */

function my_form_shortcode() {
    // Your form code goes here
    $form = '<form>';
    $form .= '<input type="text" name="name" placeholder="Your Name">';
    $form .= '<input type="email" name="email" placeholder="Your Email">';
    $form .= '<input type="submit" value="Submit">';
    $form .= '</form>';

    return $form;
}

add_shortcode( 'my-form', 'my_form_shortcode' );
