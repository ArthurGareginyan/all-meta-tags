<?php

/**
 * Prevent Direct Access
 *
 * @since 0.1
 */
defined('ABSPATH') or die("Restricted access!");

/**
 * Register text domain
 *
 * @since 2.0
 */
function allmetatags_textdomain() {
    load_plugin_textdomain( ALLMT_TEXT, false, ALLMT_DIR . '/languages/' );
}
add_action( 'init', 'allmetatags_textdomain' );

/**
 * Print direct link to plugin admin page
 *
 * Fetches array of links generated by WP Plugin admin page ( Deactivate | Edit )
 * and inserts a link to the plugin admin page
 *
 * @since  2.0
 * @param  array $links Array of links generated by WP in Plugin Admin page.
 * @return array        Array of links to be output on Plugin Admin page.
 */
function allmetatags_settings_link( $links ) {
    $page = '<a href="' . admin_url( 'options-general.php?page=all-meta-tags.php' ) .'">' . __( 'Settings', ALLMT_TEXT ) . '</a>';
    array_unshift( $links, $page );
    return $links;
}
add_filter( 'plugin_action_links_'.ALLMT_BASE, 'allmetatags_settings_link' );

/**
 * Print additional links to plugin meta row
 *
 * @since 4.0
 */
function allmetatags_plugin_row_meta( $links, $file ) {

    if ( strpos( $file, 'all-meta-tags.php' ) !== false ) {

        $new_links = array(
                           'donate' => '<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=8A88KC7TFF6CS" target="_blank"><span class="dashicons dashicons-heart"></span> ' . __( 'Donate', ALLMT_TEXT ) . '</a>'
                           );
        $links = array_merge( $links, $new_links );
    }

    return $links;
}
add_filter( 'plugin_row_meta', 'allmetatags_plugin_row_meta', 10, 2 );

/**
 * Register plugin's submenu in the "Settings" Admin Menu
 *
 * @since 4.0
 */
function allmetatags_register_submenu_page() {
    add_options_page( __( 'All Meta Tags', ALLMT_TEXT ), __( 'All Meta Tags', ALLMT_TEXT ), 'manage_options', 'all-meta-tags', 'allmetatags_render_submenu_page' );
}
add_action( 'admin_menu', 'allmetatags_register_submenu_page' );

/**
 * Register settings
 *
 * @since 4.0
 */
function allmetatags_register_settings() {
    register_setting( 'allmetatags_settings_group', 'allmetatags_settings' );
    register_setting( 'allmetatags_settings_group', 'allmetatags_service_info' );
}
add_action( 'admin_init', 'allmetatags_register_settings' );