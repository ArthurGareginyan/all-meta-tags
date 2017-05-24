<?php

/**
 * Prevent Direct Access
 *
 * @since 0.1
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Load scripts and style sheet for settings page
 *
 * @since 4.1
 */
function allmetatags_load_scripts_admin( $hook ) {

    // Return if the page is not a settings page of this plugin
    $settings_page = 'settings_page_' . ALLMT_SLUG;
    if ( $settings_page != $hook ) {
        return;
    }

    // Style sheet
    wp_enqueue_style( ALLMT_PREFIX . '-admin-css', ALLMT_URL . 'inc/css/admin.css' );

    // JavaScript
    wp_enqueue_script( ALLMT_PREFIX . '-admin-js', ALLMT_URL . 'inc/js/admin.js', array(), false, true );

    // Bootstrap library
    wp_enqueue_style( ALLMT_PREFIX . '-bootstrap-css', ALLMT_URL . 'inc/lib/bootstrap/bootstrap.css' );
    wp_enqueue_style( ALLMT_PREFIX . '-bootstrap-theme-css', ALLMT_URL . 'inc/lib/bootstrap/bootstrap-theme.css' );
    wp_enqueue_script( ALLMT_PREFIX . '-bootstrap-js', ALLMT_URL . 'inc/lib/bootstrap/bootstrap.js' );

}
add_action( 'admin_enqueue_scripts', ALLMT_PREFIX . '_load_scripts_admin' );
