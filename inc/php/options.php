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
    $array['alexa'] = esc_textarea( $array['alexa'] );
    $array['author'] = esc_textarea( $array['author'] );
    $array['bing'] = esc_textarea( $array['bing'] );
    $array['blog_description'] = esc_textarea( $array['blog_description'] );
    $array['blog_keywords'] = esc_textarea( $array['blog_keywords'] );
    $array['contact'] = esc_textarea( $array['contact'] );
    $array['copyright'] = esc_textarea( $array['copyright'] );
    $array['designer'] = esc_textarea( $array['designer'] );
    $array['facebook'] = esc_textarea( $array['facebook'] );
    $array['google_author'] = esc_textarea( $array['google_author'] );
    $array['google'] = esc_textarea( $array['google'] );
    $array['home_description'] = esc_textarea( $array['home_description'] );
    $array['home_keywords'] = esc_textarea( $array['home_keywords'] );
    $array['keywords'] = esc_textarea( $array['keywords'] );
    $array['norton'] = esc_textarea( $array['norton'] );
    $array['pinterest'] = esc_textarea( $array['pinterest'] );
    $array['specificfeeds'] = esc_textarea( $array['specificfeeds'] );
    $array['twitter'] = esc_textarea( $array['twitter'] );
    $array['wot'] = esc_textarea( $array['wot'] );
    $array['yandex'] = esc_textarea( $array['yandex'] );

    // Modify data


    // Return the processed data
    return $array;
}
