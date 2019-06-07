<?php

/**
 * Prevent Direct Access
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Generate the custom meta tags
 */
function spacexchimp_p004_prepare() {

    // Put value of plugin constants into an array for easier access
    $plugin = spacexchimp_p004_plugin();

    // Retrieve options from database
    $options = get_option( $plugin['settings'] . '_settings' );

    // Sanitize data and declare variables
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

    $array = array();

    // Web Master Tools
    if ( ! empty( $google ) ) {
        $array[] = "<meta name='google-site-verification' content='$google' />";
    }
    if ( ! empty( $yandex ) ) {
        $array[] = "<meta name='yandex-verification' content='$yandex' />";
    }
    if ( ! empty( $bing ) ) {
        $array[] = "<meta name='msvalidate.01' content='$bing' />";
    }

    // Website Verification Services
    if ( ! empty( $pinterest ) ) {
        $array[] = "<meta name='p:domain_verify' content='$pinterest' />";
    }
    if ( ! empty( $google_author ) ) {
        $array[] = "<link rel='author' href='$google_author'>";
    }
    if ( ! empty( $facebook ) ) {
        $array[] = "<meta name='article:publisher' content='$facebook' />";
    }
    if ( ! empty( $twitter ) ) {
        $array[] = "<meta name='twitter:site' content='$twitter' />";
        $array[] = "<meta name='twitter:creator' content='$twitter' />";
    }
    if ( ! empty( $alexa ) ) {
        $array[] = "<meta name='alexaVerifyID' content='$alexa' />";
    }
    if ( ! empty( $norton ) ) {
        $array[] = "<meta name='norton-safeweb-site-verification' content='$norton' />";
    }
    if ( ! empty( $wot ) ) {
        $array[] = "<meta name='wot-verification' content='$wot' />";
    }
    if ( ! empty( $specificfeeds ) ) {
        $array[] = "<meta name='specificfeeds-verification-code' content='$specificfeeds' />";
    }
    if ( ! empty( $custom_meta ) ) {
        $array[] = $custom_meta;
    }

    // Custom meta tags for specific pages
    if ( is_front_page() && is_home() ) {
        // Default Home Page
        if ( ! empty( $home_description ) ) {
            $array[] = "<meta name='description' content='$blog_description' />";
        }
        if ( ! empty( $home_keywords ) ) {
            $array[] = "<meta name='keywords' content='$blog_keywords' />";
        }
    } elseif ( is_front_page() ) {
        // Static Home Page
        if ( ! empty( $home_description ) ) {
            $array[] = "<meta name='description' content='$home_description' />";
        }
        if ( ! empty( $home_keywords ) ) {
            $array[] = "<meta name='keywords' content='$home_keywords' />";
        }
    } elseif ( is_home() ) {
        // Blog Page
        if ( ! empty( $home_description ) ) {
            $array[] = "<meta name='description' content='$blog_description' />";
        }
        if ( ! empty( $home_keywords ) ) {
            $array[] = "<meta name='keywords' content='$blog_keywords' />";
        }
    }

    // Custom meta tags for the entire website
    if ( ! empty( $author ) ) {
        $array[] = "<meta name='author' content='$author' />";
    }
    if ( ! empty( $designer ) ) {
        $array[] = "<meta name='designer' content='$designer' />";
    }
    if ( ! empty( $contact ) ) {
        $array[] = "<meta name='contact' content='$contact' />";
    }
    if ( ! empty( $copyright ) ) {
        $array[] = "<meta name='copyright' content='$copyright' />";
    }
    if ( ! empty( $keywords ) ) {
        $array[] = "<meta name='keywords' content='$keywords' />";
    }

    // WooCommerce & Google Shopping (Merchant Center)
    if ( class_exists( 'WooCommerce' ) ) {

        if ( is_product() ) {

            // Get product data
            $name = str_replace( "'", "’", strip_tags( get_the_title() ) );
            $description = str_replace( "'", "’", strip_tags( get_the_excerpt() ) );
            $image = simplexml_load_string( get_the_post_thumbnail() );
            if ( ! empty( $image ) ) {
                $imagesrc = $image->attributes()->src;
            } else {
                $imagesrc = "";
            }
            $price = get_post_meta( get_the_ID(), '_price', true );
            $currency = get_woocommerce_currency();

            // Generate output code with product data
            $google_shopping = "<div itemtype='http://schema.org/Product' itemscope>
                        <meta itemprop='name' content='$name' />
                        <meta itemprop='description' content='$description' />
                        <meta itemprop='image' content='$imagesrc' />
                        <div itemprop='offers' itemscope itemtype='http://schema.org/Offer'>
                            <meta itemprop='price' content='$price' />
                            <meta itemprop='priceCurrency' content='$currency' />
                        </div>
                    </div>";
            $array[] = $google_shopping;
        }

    }

    // Add comment
    if ( count( $array ) > 0 ) {
        array_unshift( $array, "<!-- [BEGIN] Metadata added via All-Meta-Tags plugin by Space X-Chimp ( https://www.spacexchimp.com ) -->" );
        array_push( $array, "<!-- [END] Metadata added via All-Meta-Tags plugin by Space X-Chimp ( https://www.spacexchimp.com ) -->" );
    }

    // Return the content of array
    return $array;
}

/**
 * Process the custom meta tags
 */
function spacexchimp_p004_exec() {
    echo    PHP_EOL,
            implode(PHP_EOL, spacexchimp_p004_prepare()),
            PHP_EOL,
            PHP_EOL;
}

/**
 * Inject the custom meta tags into the website's frontend
 */
add_action( 'wp_head', 'spacexchimp_p004_exec', 0 );

/**
 * Preview the custom meta tags
 */
function spacexchimp_p004_preview() {
    $array = spacexchimp_p004_prepare();

    if ( ! empty( $array ) ) {
        if ( is_array( $array ) ) {
            if ( count( $array ) > 0 ) {
                array_shift( $array );
            }
            if ( count( $array ) > 0 ) {
                array_pop( $array );
            }
            if ( count( $array ) > 0 ) {
                $array = implode( PHP_EOL, $array );
            }
        }
    }

    // Return the string
    echo $array;
}
