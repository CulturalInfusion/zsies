<?php
/**
 * Plugin Name:         Zoho SalesIQ Extended Setting
 * Plugin URI:          https://apos37.com/wordpress-addon-for-ms-teams-gravity-forms/
 * Description:         Exclude specific pages from loading Zoho SalesIQ widget.
 * Version:             1.0.0
 * Requires at least:   6.6.0
 * Tested up to:        6.6.0
 * Author:              Abdolnabi Zameni
 * Author URI:          http://www.zameni.us
 * Text Domain:         zameni-us
 * License:             GPLv2 or later
 * License URI:         http://www.gnu.org/licenses/gpl-2.0.txt
 */
/*
Plugin Name: Zoho SalesIQ Extended Setting
Description: Exclude specific pages from loading Zoho SalesIQ widget.
Version: 1.0
Author: Abdolnabi Zameni
Website: http://www.zameni.us
Email: Abdolnabi@zameni.us
*/

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Include admin settings and frontend functions
include_once plugin_dir_path( __FILE__ ) . 'admin/settings.php';
include_once plugin_dir_path( __FILE__ ) . 'includes/enqueue-styles.php';
