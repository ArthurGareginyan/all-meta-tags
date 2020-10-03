<?php

/**
 * Prevent Direct Access
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Generator of the help text under options
 */
function spacexchimp_p004_control_help( $help=null ) {

    // Return if help text not defined
    if ( empty( $help ) ) {
        return;
    }

    // Generate a part of table
    $out = "<tr>
                <td></td>
                <td class='help-text'>
                    $help
                </td>
            </tr>";

    // Print the generated part of table
    echo $out;
}

/**
 * Generator of the field option for saving plugin settings to database
 */
function spacexchimp_p004_control_field( $name, $label, $placeholder, $help=null, $link=null ) {

    // Put value of plugin constants into an array for easier access
    $plugin = spacexchimp_p004_plugin();

    // Retrieve options from database and declare variables
    $options = get_option( $plugin['settings'] . '_settings' );
    $value = !empty( $options[$name] ) ? esc_attr( $options[$name] ) : '';
    $label_link = !empty( $link ) ? "<a href='$link' target='_blank'>$label</a>" : "$label";

    // Generate a part of table
    $out = "<tr>
                <th scope='row'>
                    $label_link
                </th>
                <td>
                    <input
                        type='text'
                        name='" . $plugin['settings'] . "_settings[$name]'
                        id='" . $plugin['settings'] . "_settings[$name]'
                        value='$value'
                        placeholder='$placeholder'
                        class='control-field $name'
                    >
                </td>
            </tr>";

    // Print the generated part of table
    echo $out;

    // Print a help text
    spacexchimp_p004_control_help( $help );
}

/**
 * Generator of the textarea option for saving plugin settings to database
 */
function spacexchimp_p004_control_textarea( $name, $label, $placeholder, $help=null ) {

    // Put value of plugin constants into an array for easier access
    $plugin = spacexchimp_p004_plugin();

    // Retrieve options from database and declare variables
    $options = get_option( $plugin['settings'] . '_settings' );
    $value = !empty( $options[$name] ) ? esc_attr( $options[$name] ) : '';

    // Generate a part of table
    $out = "<tr>
                <th scope='row'>
                    $label
                </th>
                <td>
                    <textarea
                        cols='50'
                        rows='3'
                        name='" . $plugin['settings'] . "_settings[$name]'
                        id='" . $plugin['settings'] . "_settings[$name]'
                        placeholder='$placeholder'
                        class='control-textarea $name'
                    >$value</textarea>
                </td>
            </tr>";

    // Print the generated part of table
    echo $out;

    // Print a help text
    spacexchimp_p004_control_help( $help );
}

/**
 * Generator of the hidden option for saving plugin settings to database
 */
function spacexchimp_p004_control_hidden( $name, $value ) {

    // Put value of plugin constants into an array for easier access
    $plugin = spacexchimp_p004_plugin();

    // Generate a part of table
    $out = "<input
                type='hidden'
                name='" . $plugin['settings'] . "_settings[$name]'
                id='" . $plugin['settings'] . "_settings[$name]'
                value='$value'
                class='control-hidden $name'
            >";

    // Print the generated part of table
    echo $out;
}
