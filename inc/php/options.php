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
        'hidden_scrollto' => '0',
        'google' => '',
        'bing' => '',
        'yandex' => '',
        'alexa' => '',
        'pinterest' => '',
        'google_author' => '',
        'facebook' => '',
        'twitter' => '',
        'norton' => '',
        'wot' => '',
        'specificfeeds' => '',
        'custom_meta' => '',
        'home_description' => '',
        'home_keywords' => '',
        'blog_description' => '',
        'blog_keywords' => '',
        'author' => '',
        'designer' => '',
        'contact' => '',
        'copyright' => '',
        'keywords' => '',
    );
    foreach ( $list as $name => $default ) {
        $array[$name] = !empty( $options[$name] ) ? $options[$name] : $default;
    }

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
