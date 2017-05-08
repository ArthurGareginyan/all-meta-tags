<?php

/**
 * Prevent Direct Access
 *
 * @since 0.1
 */
defined('ABSPATH') or die("Restricted access!");

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
        $help_out = "<tr>
                        <td></td>
                        <td class='help-text'>
                            $help
                        </td>
                     </tr>";
    else :
        $help_out = "";
    endif;

    // Put table to the variable
    $out = "<tr>
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
 * @since 3.8
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
    $specificfeeds = esc_textarea( $options['specificfeeds'] );
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
    if (!empty($specificfeeds)) {
        $metatags_arr[] = "<meta name='specificfeeds-verification-code' content='$specificfeeds' />";
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
            if ( !empty($image) ) {
                $imagesrc = $image->attributes()->src;
            } else {
                $imagesrc = "";
            }
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
        array_unshift( $metatags_arr, "<!-- [BEGIN] Metadata added via 'All Meta Tags' plugin by Arthur Gareginyan (https://www.arthurgareginyan.com) -->" );
        array_push( $metatags_arr, "<!-- [END] Metadata added via 'All Meta Tags' plugin by Arthur Gareginyan (https://www.arthurgareginyan.com) -->" );
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
