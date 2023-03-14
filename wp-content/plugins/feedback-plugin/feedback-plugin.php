<?php
/*
Plugin Name: plugin de feedback
Description: ajouter une fonctionalité de feedback à votre page 
Version: 1.0
Author: EL HAKIK Amina
Author URL: http://localhost/Wordpress/Workshop_CMS
*/

// Create table on plugin activation
function feedback_plugin_activate()
{
    global $wpdb;
    $table_name = $wpdb->prefix . 'feedback_data';
    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        note tinyint(1) NOT NULL,
        remark text NOT NULL,
        post_id mediumint(9) NOT NULL,
        PRIMARY KEY  (id)
    ) $charset_collate;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}
register_activation_hook(__FILE__, 'feedback_plugin_activate');


// Make plugin visible in admin menu
function feedback_plugin_menu()
{
    add_menu_page(
        'Feedback Plugin',
        'Feedback Plugin',
        'manage_options',
        'feedback-plugin',
        'feedback_plugin_options_page'
    );
}

// Load options page for plugin
function feedback_plugin_options_page()
{
    // Code for options page here
    // Load CSS file
    wp_enqueue_style( 'feedback-plugin-styles', plugin_dir_url( __FILE__ ) . '../css/feedback-plugin.css' );

    // Check if form has been submitted
    if (isset($_POST['feedback_submit'])) {
        // Process form data here
        $note = $_POST['feedback_note'];
        $remark = $_POST['feedback_remark'];
        $post_id = $_POST['feedback_post_id'];

        // Save data to database here
        global $wpdb;
        $table_name = $wpdb->prefix . 'feedback_data';
        $wpdb->insert(
            $table_name,
            array(
                'note' => $note,
                'remark' => $remark,
                'post_id' => $post_id
            )
        );

        // Display success message
        echo '<div class="feedback-success">Thank you for your feedback!</div>';
    }

    // Output form HTML
    echo '
    <div class="feedback-form">
      <form method="post">
        <label for="feedback_note">Note (0-5): *</label>
        <input type="number" name="feedback_note" id="feedback_note" min="0" max="5" required>
        
        <label for="feedback_remark">Remark: *</label>
        <textarea name="feedback_remark" id="feedback_remark" required></textarea>
        
        <label for="feedback_post_id">Post/Page ID: *</label>
        <input type="number" name="feedback_post_id" id="feedback_post_id" required>
        
        <input type="submit" name="feedback_submit" value="Submit Feedback">
      </form>
    </div>
  ';
}


add_action('admin_menu', 'feedback_plugin_menu');



// Add shortcode for feedback form
function feedback_form_shortcode() {
  ob_start();
  feedback_plugin_options_page();
  $output = ob_get_contents();
  ob_end_clean();
  return $output;
}

add_shortcode('feedback_form', 'feedback_form_shortcode');