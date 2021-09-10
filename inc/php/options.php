<?php

/**
 * Prevent Direct Access
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Callback function that returns an array with the value of the plugin options
 * @return array
 */
function spacexchimp_p004_options() {

    // Put value of plugin constants into an array for easier access
    $plugin = spacexchimp_p004_plugin();

    // Retrieve options from database
    $options = get_option( $plugin['settings'] . '_settings' );

    // Make the "$options" array if the plugin options data in the database is not exist
    if ( ! is_array( $options ) ) {
        $options = array();
    }

    // Create an array with options
    $array = $options;

    // Set default value if option is empty
    $list = array(
        'alexa' => '',
        'author' => '',
        'bing' => '',
        'blog_description' => '',
        'blog_keywords' => '',
        'contact' => '',
        'copyright' => '',
        'custom_meta' => '',
        'designer' => '',
        'facebook' => '',
        'google_author' => '',
        'google' => '',
        'hidden_scrollto' => '0',
        'home_description' => '',
        'home_keywords' => '',
        'keywords' => '',
        'norton' => '',
        'pinterest' => '',
        'specificfeeds' => '',
        'twitter' => '',
        'wot' => '',
        'yandex' => '',
    );
    foreach ( $list as $name => $default ) {
        $array[$name] = !empty( $options[$name] ) ? $options[$name] : $default;
    }

    // Sanitize data
    $array['alexa'] = esc_attr( $array['alexa'] );
    $array['author'] = esc_attr( $array['author'] );
    $array['bing'] = esc_attr( $array['bing'] );
    $array['blog_description'] = esc_attr( $array['blog_description'] );
    $array['blog_keywords'] = esc_attr( $array['blog_keywords'] );
    $array['contact'] = esc_attr( $array['contact'] );
    $array['copyright'] = esc_attr( $array['copyright'] );
    //$array['custom_meta'] = esc_textarea( $array['custom_meta'] );
    $array['designer'] = esc_attr( $array['designer'] );
    $array['facebook'] = esc_attr( $array['facebook'] );
    $array['google_author'] = esc_attr( $array['google_author'] );
    $array['google'] = esc_attr( $array['google'] );
    //$array['hidden_scrollto'] = esc_textarea()( $array['hidden_scrollto'] );
    $array['home_description'] = esc_attr( $array['home_description'] );
    $array['home_keywords'] = esc_attr( $array['home_keywords'] );
    $array['keywords'] = esc_attr( $array['keywords'] );
    $array['norton'] = esc_attr( $array['norton'] );
    $array['pinterest'] = esc_attr( $array['pinterest'] );
    $array['specificfeeds'] = esc_attr( $array['specificfeeds'] );
    $array['twitter'] = esc_attr( $array['twitter'] );
    $array['wot'] = esc_attr( $array['wot'] );
    $array['yandex'] = esc_attr( $array['yandex'] );

    // Modify data


    // Return the processed data
    return $array;
}
