<?php
// Add settings menu under WordPress Settings
function custom_settings_menu() {
    add_options_page(
        'Zoho SalesIQ', // Page title
        'Zoho SalesIQ', // Menu title
        'manage_options', // Capability
        'exclude-pages', // Menu slug
        'exclude_pages_callback' // Callback function
    );
}
add_action('admin_menu', 'custom_settings_menu');

// Callback function to display settings page
function exclude_pages_callback() {
    include plugin_dir_path( __FILE__ ) . 'views/settings-page.php';
}

// Register setting, section, and field
function custom_settings_init() {
    register_setting('exclude_pages_group', 'excluded_pages');

    add_settings_section(
        'exclude_pages_section',
        'Pages to Exclude',
        'exclude_pages_section_callback',
        'exclude-pages'
    );

    add_settings_field(
        'excluded_pages_field',
        'Page IDs',
        'excluded_pages_field_callback',
        'exclude-pages',
        'exclude_pages_section'
    );
}
add_action('admin_init', 'custom_settings_init');

function exclude_pages_section_callback() {
    echo 'Enter the IDs of the pages to exclude, separated by commas.';
}

function excluded_pages_field_callback() {
    $excluded_pages = get_option('excluded_pages', '');
    echo '<input type="text" name="excluded_pages" value="' . esc_attr($excluded_pages) . '" class="regular-text">';
}
