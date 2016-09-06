<?php
/**
 * Plugin Name: All Meta Tags
 * Plugin URI: https://github.com/ArthurGareginyan/all-meta-tags
 * Description: Easily and safely add your custom Meta Tags to WordPress website's header.
 * Author: Arthur Gareginyan
 * Author URI: http://www.arthurgareginyan.com
 * Version: 3.3
 * License: GPL3
 * Text Domain: all-meta-tags
 * Domain Path: /languages/
 *
 * Copyright 2015-2016 Arthur Gareginyan (email : arthurgareginyan@gmail.com)
 *
 * This file is part of "All Meta Tags".
 *
 * "All Meta Tags" is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * "All Meta Tags" is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with "All Meta Tags".  If not, see <http://www.gnu.org/licenses/>.
 *
 */


/**
 * Prevent Direct Access
 *
 * @since 0.1
 */
defined('ABSPATH') or die("Restricted access!");

/**
 * Define global constants
 *
 * @since 3.1
 */
defined('ALLMT_DIR') or define('ALLMT_DIR', dirname(plugin_basename(__FILE__)));
defined('ALLMT_BASE') or define('ALLMT_BASE', plugin_basename(__FILE__));
defined('ALLMT_URL') or define('ALLMT_URL', plugin_dir_url(__FILE__));
defined('ALLMT_PATH') or define('ALLMT_PATH', plugin_dir_path(__FILE__));
defined('ALLMT_VERSION') or define('ALLMT_VERSION', '3.3');

/**
 * Register text domain
 *
 * @since 2.0
 */
function allmetatags_textdomain() {
	load_plugin_textdomain( 'all-meta-tags', false, ALLMT_DIR . '/languages/' );
}
add_action( 'init', 'allmetatags_textdomain' );

/**
 * Print direct link to All Meta Tags admin page
 *
 * Fetches array of links generated by WP Plugin admin page ( Deactivate | Edit )
 * and inserts a link to the All Meta Tags admin page
 *
 * @since  2.0
 * @param  array $links Array of links generated by WP in Plugin Admin page.
 * @return array        Array of links to be output on Plugin Admin page.
 */
function allmetatags_settings_link( $links ) {
	$settings_page = '<a href="' . admin_url( 'options-general.php?page=all-meta-tags.php' ) .'">' . __( 'Settings', 'all-meta-tags' ) . '</a>';
	array_unshift( $links, $settings_page );
	return $links;
}
add_filter( "plugin_action_links_".ALLMT_BASE, 'allmetatags_settings_link' );

/**
 * Register "All Meta Tags" submenu in "Settings" Admin Menu
 *
 * @since 2.0
 */
function allmetatags_register_submenu_page() {
	add_options_page( __( 'All Meta Tags', 'all-meta-tags' ), __( 'All Meta Tags', 'all-meta-tags' ), 'manage_options', basename( __FILE__ ), 'allmetatags_render_submenu_page' );
}
add_action( 'admin_menu', 'allmetatags_register_submenu_page' );

/**
 * Attach Settings Page
 *
 * @since 3.0
 */
require_once( ALLMT_PATH . 'inc/php/settings_page.php' );

/**
 *  Load scripts and style sheet for settings page
 *
 * @since 3.1
 */
function allmetatags_load_scripts($hook) {

    // Return if the page is not a settings page of this plugin
    if ( 'settings_page_all-meta-tags' != $hook ) {
        return;
    }

    // Style sheet
    wp_enqueue_style( 'allmetatags-admin-css', ALLMT_URL . 'inc/css/admin.css' );

    // JavaScript
    wp_enqueue_script( 'allmetatags-admin-js', ALLMT_URL . 'inc/js/admin.js', array(), false, true );

}
add_action( 'admin_enqueue_scripts', 'allmetatags_load_scripts' );

/**
 * Register settings
 *
 * @since 0.1
 */
function allmetatags_register_settings() {
	register_setting( 'allmetatags_settings_group', 'allmetatags_settings' );
}
add_action( 'admin_init', 'allmetatags_register_settings' );

/**
 * Render fields
 *
 * @since 3.2
 */
function allmetatags_field($name, $label, $placeholder, $help=null, $link=null, $textarea=null) {

    // Declare variables
    $options = get_option( 'allmetatags_settings' );

    if ( !empty($options[$name]) ) :
        $value = esc_attr( $options[$name] );
    else :
        $value = "";
    endif;

    // Generate the table
    if ( !empty($link) ) :
        $link_out = "<a href='$link' target='_blank'>$label</a>";
    else :
        $link_out = "$label";
    endif;

    if ( !empty($textarea) ) :
        $field_out = "<textarea cols='50' rows='3' name='allmetatags_settings[$name]' placeholder='$placeholder'>$value</textarea>";
    else :
        $field_out = "<input type='text' name='allmetatags_settings[$name]' size='50' value='$value' placeholder='$placeholder'>";
    endif;

    if ( !empty($help) ) :
        $help_out = "<tr valign='top'>
                        <td></td>
                        <td class='help-text'>
                            $help
                        </td>
                     </tr>";
    else :
        $help_out = "";
    endif;

    // Put table to the variable
    $out = "<tr valign='top'>
                <th scope='row'>
                    $link_out
                </th>
                <td>
                    $field_out
                </td>
            </tr>
            $help_out";

    // Print the generated table
    echo $out;
}

/**
 * Generate the Meta Tags
 *
 * @since 3.3
 */
function allmetatags_add_meta_tags() {

    // Read options from BD, sanitiz data and declare variables
    $options = get_option( 'allmetatags_settings' );

    $google = esc_textarea( $options['google'] );
    $bing = esc_textarea( $options['bing'] );
    $yandex = esc_textarea( $options['yandex'] );

    $alexa = esc_textarea( $options['alexa'] );
    $pinterest = esc_textarea( $options['pinterest'] );
    $google_author = esc_textarea( $options['google_author'] );
    $facebook = esc_textarea( $options['facebook'] );
    $twitter = esc_textarea( $options['twitter'] );
    $norton = esc_textarea( $options['norton'] );
    $wot = esc_textarea( $options['wot'] );
    $custom_meta = $options['custom_meta'];

    $home_description = esc_textarea( $options['home_description'] );
    $home_keywords = esc_textarea( $options['home_keywords'] );

    $blog_description = esc_textarea( $options['blog_description'] );
    $blog_keywords = esc_textarea( $options['blog_keywords'] );

    $author = esc_textarea( $options['author'] );
    $designer = esc_textarea( $options['designer'] );
    $contact = esc_textarea( $options['contact'] );
    $copyright = esc_textarea( $options['copyright'] );
    $keywords = esc_textarea( $options['keywords'] );

    $metatags_arr[] = "";

    // Web Master Tools
    if (!empty($google)) {
        $metatags_arr[] = "<meta name='google-site-verification' content='$google' />";
    }
    if (!empty($yandex)) {
        $metatags_arr[] = "<meta name='yandex-verification' content='$yandex' />";
    }
    if (!empty($bing)) {
        $metatags_arr[] = "<meta name='msvalidate.01' content='$bing' />";
    }

    // Website Verification Services
    if (!empty($pinterest)) {
        $metatags_arr[] = "<meta name='p:domain_verify' content='$pinterest' />";
    }
    if (!empty($google_author)) {
        $metatags_arr[] = "<link rel='author' href='$google_author'>";
    }
    if (!empty($facebook)) {
        $metatags_arr[] = "<meta name='article:publisher' content='$facebook' />";
    }
    if (!empty($twitter)) {
        $metatags_arr[] = "<meta name='twitter:site' content='$twitter' />";
        $metatags_arr[] = "<meta name='twitter:creator' content='$twitter' />";
    }
    if (!empty($alexa)) {
        $metatags_arr[] = "<meta name='alexaVerifyID' content='$alexa' />";
    }
    if (!empty($norton)) {
        $metatags_arr[] = "<meta name='norton-safeweb-site-verification' content='$norton' />";
    }
    if (!empty($wot)) {
        $metatags_arr[] = "<meta name='wot-verification' content='$wot' />";
    }
    if (!empty($custom_meta)) {
        $metatags_arr[] = $custom_meta;
    }

    // Meta Tags for specific pages
    if ( is_front_page() && is_home() ) {
        // Default Home Page
        if (!empty($home_description)) {
            $metatags_arr[] = "<meta name='description' content='$blog_description' />";
        }
        if (!empty($home_keywords)) {
            $metatags_arr[] = "<meta name='keywords' content='$blog_keywords' />";
        }
    } elseif ( is_front_page() ) {
        // Static Home Page
        if (!empty($home_description)) {
            $metatags_arr[] = "<meta name='description' content='$home_description' />";
        }
        if (!empty($home_keywords)) {
            $metatags_arr[] = "<meta name='keywords' content='$home_keywords' />";
        }
    } elseif ( is_home() ) {
        // Blog Page
        if (!empty($home_description)) {
            $metatags_arr[] = "<meta name='description' content='$blog_description' />";
        }
        if (!empty($home_keywords)) {
            $metatags_arr[] = "<meta name='keywords' content='$blog_keywords' />";
        }
    }

    // Meta Tags for all website
    if (!empty($author)) {
        $metatags_arr[] = "<meta name='author' content='$author' />";
    }
    if (!empty($designer)) {
        $metatags_arr[] = "<meta name='designer' content='$designer' />";
    }
    if (!empty($contact)) {
        $metatags_arr[] = "<meta name='contact' content='$contact' />";
    }
    if (!empty($copyright)) {
        $metatags_arr[] = "<meta name='copyright' content='$copyright' />";
    }
    if (!empty($keywords)) {
        $metatags_arr[] = "<meta name='keywords' content='$keywords' />";
    }

    // WooCommerce & Google Shopping (Merchant Center)
    if ( class_exists( 'WooCommerce' ) ) {

        if ( is_product() ) {
            
            $name = get_the_title();
            $description = get_the_excerpt();
            $image = simplexml_load_string(get_the_post_thumbnail());
            $imagesrc = $image->attributes()->src;
            $price = get_post_meta( get_the_ID(), '_price', true);
            $currency = get_woocommerce_currency();

            $google_shopping = "<div itemtype='http://schema.org/Product' itemscope>
                        <meta itemprop='name' content='$name'>
                        <meta itemprop='description' content='$description'>
                        <meta itemprop='image' content='$imagesrc'>
                        <div itemprop='offers' itemscope itemtype='http://schema.org/Offer'>
                            <meta itemprop='price' content='$price' />
                            <meta itemprop='priceCurrency' content='$currency' />
                        </div>
                    </div>";
            $metatags_arr[] = $google_shopping;
        }

    }

    // Add comment
    if ( count( $metatags_arr ) > 0 ) {
        array_unshift( $metatags_arr, "<!-- [BEGIN] Metadata added via 'All Meta Tags' plugin by Arthur Gareginyan. -->" );
        array_push( $metatags_arr, "<!-- [END] Metadata added via 'All Meta Tags' plugin by Arthur Gareginyan. -->" );
    }

    // Return the content of array
    return $metatags_arr;
}

/**
 * Include the Meta Tags in head area
 *
 * @since 1.0
 */
function allmetatags_add_metadata_head() {
    echo    PHP_EOL,
            implode(PHP_EOL, allmetatags_add_meta_tags()),
            PHP_EOL,
            PHP_EOL;
}
add_action( 'wp_head', 'allmetatags_add_metadata_head', 0 );

/**
 * Delete options on uninstall
 *
 * @since 0.1
 */
function allmetatags_uninstall() {
    delete_option( 'allmetatags_settings' );
}
register_uninstall_hook( __FILE__, 'allmetatags_uninstall' );

?>