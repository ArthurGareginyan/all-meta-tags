<?php

/**
 * Prevent Direct Access
 *
 * @since 0.1
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Delete options on uninstall
 *
 * @since 4.1
 */
function allmetatags_uninstall() {
    delete_option( ALLMT_SETTINGS . '_settings' );
}
register_uninstall_hook( __FILE__, ALLMT_PREFIX . '_uninstall' );
