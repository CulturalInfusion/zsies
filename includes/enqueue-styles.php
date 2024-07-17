<?php
function enqueue_custom_styles() {
    // Get the excluded pages from the settings
    $excluded_pages = get_option('excluded_pages', '');

    if (!empty($excluded_pages)) {
        $excluded_pages_array = array_map('trim', explode(',', $excluded_pages));
        
        // Check if the current page is in the excluded pages array
        if (!is_page($excluded_pages_array)) {
            wp_enqueue_style('custom-styles', plugin_dir_url(__FILE__) . '../assets/css/styles.css');
        }
    } else {
        // If no pages are set to be excluded, enqueue the style on all pages
        wp_enqueue_style('custom-styles', plugin_dir_url(__FILE__) . '../assets/css/styles.css');
    }
}
add_action('wp_enqueue_scripts', 'enqueue_custom_styles');
