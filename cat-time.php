<?php
/**
 * Plugin Name: Cat Time
 * Version: 1.0.0
 * Plugin URI: http://www.sheikhmizan.com/
 * Description: A plugin that generates a cat image speaking the time.
 * Author: Sheikh MiZan
 * Author URI: http://www.sheikhmizan.com/
 * Tested up to: 6.2.2
 * Text Domain: cat-time
 * Domain Path: /lang/
 * @package WordPress
 * @author Sheikh MiZan
 * @since 1.0.0
 */

// // Enqueue the necessary scripts
// function cat_time_enqueue_scripts() {
//     wp_enqueue_script('jquery');
//     wp_enqueue_script('cat-time-script', plugins_url('js/cat-time-script.js', __FILE__), array('jquery'), '1.0', true);
    
//     wp_localize_script('cat-time-script', 'ajax_object', array('ajax_url' => admin_url('admin-ajax.php')));
// }

// // Add the shortcode
// function cat_time_shortcode() {
//     $cat_image_url = plugins_url('cat.png', __FILE__);
//     return '<h1>Cat Time</h1><img class="cat" src="' . $cat_image_url . '" alt="Cat">';
// }

// // Register the shortcode
// add_shortcode('cat-time', 'cat_time_shortcode');

// // Hook the script enqueueing function to the appropriate action
// add_action('wp_enqueue_scripts', 'cat_time_enqueue_scripts');

// // Ajax endpoint to retrieve the current time
// function cat_time_get_time() {
//     $current_time = current_time('H:i:s');
//     wp_send_json_success(array('time' => $current_time));
// }
// add_action('wp_ajax_get_time', 'cat_time_get_time');
// add_action('wp_ajax_nopriv_get_time', 'cat_time_get_time');



// Enqueue the necessary scripts and stylesheets
function cat_speak_enqueue_scripts() {
    wp_enqueue_script('responsivevoice', 'https://code.responsivevoice.org/responsivevoice.js?key=9XUZfrWN');
  wp_enqueue_script('cat-time-script', plugins_url('js/cat-time-script.js', __FILE__), array('jquery'), '1.0', true);

}
add_action('wp_enqueue_scripts', 'cat_speak_enqueue_scripts');

// Add a shortcode for displaying the cat image and time
function cat_speak_shortcode() {
    date_default_timezone_set('Asia/Dhaka'); // Set the timezone to Bangladesh (GMT+6)
    $current_time = date('g:i A');
    $output = '<div id="cat-speak">';
    $output .= '<img id="cat-image" src="' . plugin_dir_url(__FILE__) . 'cat.png" alt="Cat Image">';
    $output .= '<div id="cat-time" style="display:none">' . $current_time . '</div>';
    $output .= '</div>';
    return $output;
}

add_shortcode('cat-time', 'cat_speak_shortcode');