<?php

/**
 * Prevent Direct Access
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Generate the custom meta tags
 * @return array
 */
function spacexchimp_p004_generator() {

    // Put value of plugin constants into an array for easier access
    $plugin = spacexchimp_p004_plugin();

    // Put the value of the plugin options into an array for easier access
    $options = spacexchimp_p004_options();

    $array = array();

    // Web Master Tools
    if ( ! empty( $options['google'] ) ) {
        $array[] = "<meta name='google-site-verification' content='" . $options['google'] . "' />";
    }
    if ( ! empty( $options['yandex'] ) ) {
        $array[] = "<meta name='yandex-verification' content='" . $options['yandex'] . "' />";
    }
    if ( ! empty( $options['bing'] ) ) {
        $array[] = "<meta name='msvalidate.01' content='" . $options['bing'] . "' />";
    }

    // Website Verification Services
    if ( ! empty( $options['pinterest'] ) ) {
        $array[] = "<meta name='p:domain_verify' content='" . $options['pinterest'] . "' />";
    }
    if ( ! empty( $options['google_author'] ) ) {
        $array[] = "<link rel='author' href='" . $options['google_author'] . "'>";
    }
    if ( ! empty( $options['facebook'] ) ) {
        $array[] = "<meta name='article:publisher' content='" . $options['facebook'] . "' />";
    }
    if ( ! empty( $options['twitter'] ) ) {
        $array[] = "<meta name='twitter:site' content='" . $options['twitter'] . "' />";
        $array[] = "<meta name='twitter:creator' content='" . $options['twitter'] . "' />";
    }
    if ( ! empty( $options['alexa'] ) ) {
        $array[] = "<meta name='alexaVerifyID' content='" . $options['alexa'] . "' />";
    }
    if ( ! empty( $options['norton'] ) ) {
        $array[] = "<meta name='norton-safeweb-site-verification' content='" . $options['norton'] . "' />";
    }
    if ( ! empty( $options['wot'] ) ) {
        $array[] = "<meta name='wot-verification' content='" . $options['wot'] . "' />";
    }
    if ( ! empty( $options['specificfeeds'] ) ) {
        $array[] = "<meta name='specificfeeds-verification-code' content='" . $options['specificfeeds'] . "' />";
    }
    if ( ! empty( $options['custom_meta'] ) ) {
        $array[] = $options['custom_meta'];
    }

    // Custom meta tags for specific pages
    if ( is_front_page() && is_home() ) {
        // Default Home Page
        if ( ! empty( $options['blog_description'] ) ) {
            $array[] = "<meta name='description' content='" . $options['blog_description'] . "' />";
        }
        if ( ! empty( $options['blog_keywords'] ) ) {
            $array[] = "<meta name='keywords' content='" . $options['blog_keywords'] . "' />";
        }
    } elseif ( is_front_page() ) {
        // Static Home Page
        if ( ! empty( $options['home_description'] ) ) {
            $array[] = "<meta name='description' content='" . $options['home_description'] . "' />";
        }
        if ( ! empty( $options['home_keywords'] ) ) {
            $array[] = "<meta name='keywords' content='" . $options['home_keywords'] . "' />";
        }
    } elseif ( is_home() ) {
        // Blog Page
        if ( ! empty( $options['blog_description'] ) ) {
            $array[] = "<meta name='description' content='" . $options['blog_description'] . "' />";
        }
        if ( ! empty( $options['blog_keywords'] ) ) {
            $array[] = "<meta name='keywords' content='" . $options['blog_keywords'] . "' />";
        }
    }

    // Custom meta tags for the entire website
    if ( ! empty( $options['author'] ) ) {
        $array[] = "<meta name='author' content='" . $options['author'] . "' />";
    }
    if ( ! empty( $options['designer'] ) ) {
        $array[] = "<meta name='designer' content='" . $options['designer'] . "' />";
    }
    if ( ! empty( $options['contact'] ) ) {
        $array[] = "<meta name='contact' content='" . $options['contact'] . "' />";
    }
    if ( ! empty( $options['copyright'] ) ) {
        $array[] = "<meta name='copyright' content='" . $options['copyright'] . "' />";
    }
    if ( ! empty( $options['keywords'] ) ) {
        $array[] = "<meta name='keywords' content='" . $options['keywords'] . "' />";
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

    // Return the processed data
    return $array;
}

/**
 * Process the custom meta tags
 * @return string by using "echo"
 */
function spacexchimp_p004_exec() {
    echo    PHP_EOL,
            implode(PHP_EOL, spacexchimp_p004_generator()),
            PHP_EOL,
            PHP_EOL;
}

/**
 * Inject the custom meta tags into the website's frontend (head section)
 */
add_action( 'wp_head', 'spacexchimp_p004_exec', 0 );

/**
 * Preview the custom meta tags
 * @return string by using "echo"
 */
function spacexchimp_p004_preview() {
    $array = spacexchimp_p004_generator();

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

    // Return the processed data
    echo $array;
}
