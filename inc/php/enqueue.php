<?php

/**
 * Prevent Direct Access
 *
 * @since 0.1
 */
defined('ABSPATH') or die("Restricted access!");

/**
 * Load scripts and style sheet for settings page
 *
 * @since 4.0
 */
function allmetatags_load_scripts_admin($hook) {

    // Return if the page is not a settings page of this plugin
    if ( 'settings_page_all-meta-tags' != $hook ) {
        return;
    }

    // Style sheet
    wp_enqueue_style( 'allmetatags-admin-css', ALLMT_URL . 'inc/css/admin.css' );

    // JavaScript
    wp_enqueue_script( 'allmetatags-admin-js', ALLMT_URL . 'inc/js/admin.js', array(), false, true );

    // Bootstrap library
    wp_enqueue_style( 'allmetatags-bootstrap-css', ALLMT_URL . 'inc/lib/bootstrap/bootstrap.css' );
    wp_enqueue_style( 'allmetatags-bootstrap-theme-css', ALLMT_URL . 'inc/lib/bootstrap/bootstrap-theme.css' );
    wp_enqueue_script( 'allmetatags-bootstrap-js', ALLMT_URL . 'inc/lib/bootstrap/bootstrap.js' );

}
add_action( 'admin_enqueue_scripts', 'allmetatags_load_scripts_admin' );
