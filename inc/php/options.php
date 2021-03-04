<?php

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
    $array['hidden_scrollto'] = !empty( $options['hidden_scrollto'] ) ? $options['hidden_scrollto'] : '0';
    $array['google'] = !empty( $options['google'] ) ? esc_textarea( $options['google'] ) : '';
    $array['bing'] = !empty( $options['bing'] ) ? esc_textarea( $options['bing'] ) : '';
    $array['yandex'] = !empty( $options['yandex'] ) ? esc_textarea( $options['yandex'] ) : '';
    $array['alexa'] = !empty( $options['alexa'] ) ? esc_textarea( $options['alexa'] ) : '';
    $array['pinterest'] = !empty( $options['pinterest'] ) ? esc_textarea( $options['pinterest'] ) : '';
    $array['google_author'] = !empty( $options['google_author'] ) ? esc_textarea( $options['google_author'] ) : '';
    $array['facebook'] = !empty( $options['facebook'] ) ? esc_textarea( $options['facebook'] ) : '';
    $array['twitter'] = !empty( $options['twitter'] ) ? esc_textarea( $options['twitter'] ) : '';
    $array['norton'] = !empty( $options['norton'] ) ? esc_textarea( $options['norton'] ) : '';
    $array['wot'] = !empty( $options['wot'] ) ? esc_textarea( $options['wot'] ) : '';
    $array['specificfeeds'] = !empty( $options['specificfeeds'] ) ? esc_textarea( $options['specificfeeds'] ) : '';
    $array['custom_meta'] = !empty( $options['custom_meta'] ) ? $options['custom_meta'] : '';
    $array['home_description'] = !empty( $options['home_description'] ) ? esc_textarea( $options['home_description'] ) : '';
    $array['home_keywords'] = !empty( $options['home_keywords'] ) ? esc_textarea( $options['home_keywords'] ) : '';
    $array['blog_description'] = !empty( $options['blog_description'] ) ? esc_textarea( $options['blog_description'] ) : '';
    $array['blog_keywords'] = !empty( $options['blog_keywords'] ) ? esc_textarea( $options['blog_keywords'] ) : '';
    $array['author'] = !empty( $options['author'] ) ? esc_textarea( $options['author'] ) : '';
    $array['designer'] = !empty( $options['designer'] ) ? esc_textarea( $options['designer'] ) : '';
    $array['contact'] = !empty( $options['contact'] ) ? esc_textarea( $options['contact'] ) : '';
    $array['copyright'] = !empty( $options['copyright'] ) ? esc_textarea( $options['copyright'] ) : '';
    $array['keywords'] = !empty( $options['keywords'] ) ? esc_textarea( $options['keywords'] ) : '';

    // Return the processed data
    return $array;
}
