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
    $array['google'] = !empty( $options['google'] ) ? $options['google'] : '';
    $array['bing'] = !empty( $options['bing'] ) ? $options['bing'] : '';
    $array['yandex'] = !empty( $options['yandex'] ) ? $options['yandex'] : '';
    $array['alexa'] = !empty( $options['alexa'] ) ? $options['alexa'] : '';
    $array['pinterest'] = !empty( $options['pinterest'] ) ? $options['pinterest'] : '';
    $array['google_author'] = !empty( $options['google_author'] ) ? $options['google_author'] : '';
    $array['facebook'] = !empty( $options['facebook'] ) ? $options['facebook'] : '';
    $array['twitter'] = !empty( $options['twitter'] ) ? $options['twitter'] : '';
    $array['norton'] = !empty( $options['norton'] ) ? $options['norton'] : '';
    $array['wot'] = !empty( $options['wot'] ) ? $options['wot'] : '';
    $array['specificfeeds'] = !empty( $options['specificfeeds'] ) ? $options['specificfeeds'] : '';
    $array['custom_meta'] = !empty( $options['custom_meta'] ) ? $options['custom_meta'] : '';
    $array['home_description'] = !empty( $options['home_description'] ) ? $options['home_description'] : '';
    $array['home_keywords'] = !empty( $options['home_keywords'] ) ? $options['home_keywords'] : '';
    $array['blog_description'] = !empty( $options['blog_description'] ) ? $options['blog_description'] : '';
    $array['blog_keywords'] = !empty( $options['blog_keywords'] ) ? $options['blog_keywords'] : '';
    $array['author'] = !empty( $options['author'] ) ? $options['author'] : '';
    $array['designer'] = !empty( $options['designer'] ) ? $options['designer'] : '';
    $array['contact'] = !empty( $options['contact'] ) ? $options['contact'] : '';
    $array['copyright'] = !empty( $options['copyright'] ) ? $options['copyright'] : '';
    $array['keywords'] = !empty( $options['keywords'] ) ? $options['keywords'] : '';

    // Sanitize data
    $array['google'] = esc_textarea( $array['google'] );
    $array['bing'] = esc_textarea( $array['bing'] );
    $array['yandex'] = esc_textarea( $array['yandex'] );
    $array['alexa'] = esc_textarea( $array['alexa'] );
    $array['pinterest'] = esc_textarea( $array['pinterest'] );
    $array['google_author'] = esc_textarea( $array['google_author'] );
    $array['facebook'] = esc_textarea( $array['facebook'] );
    $array['twitter'] = esc_textarea( $array['twitter'] );
    $array['norton'] = esc_textarea( $array['norton'] );
    $array['wot'] = esc_textarea( $array['wot'] );
    $array['specificfeeds'] = esc_textarea( $array['specificfeeds'] );
    $array['home_description'] = esc_textarea( $array['home_description'] );
    $array['home_keywords'] = esc_textarea( $array['home_keywords'] );
    $array['blog_description'] = esc_textarea( $array['blog_description'] );
    $array['blog_keywords'] = esc_textarea( $array['blog_keywords'] );
    $array['author'] = esc_textarea( $array['author'] );
    $array['designer'] = esc_textarea( $array['designer'] );
    $array['contact'] = esc_textarea( $array['contact'] );
    $array['copyright'] = esc_textarea( $array['copyright'] );
    $array['keywords'] = esc_textarea( $array['keywords'] );

    // Modify data


    // Return the processed data
    return $array;
}
