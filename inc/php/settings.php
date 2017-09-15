<?php

/**
 * Prevent Direct Access
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Render Settings Tab Content
 */
?>
    <div class="has-sidebar sm-padded">
        <div id="post-body-content" class="has-sidebar-content">
            <div class="meta-box-sortabless">

                <form action="options.php" method="post" enctype="multipart/form-data">
                    <?php settings_fields( SPACEXCHIMP_P004_SETTINGS . '_settings_group' ); ?>

                    <button type="submit" name="submit" id="submit" class="btn btn-info btn-lg button-save-top">
                        <i class="fa fa-save" aria-hidden="true"></i>
                        <span><?php _e( 'Save changes', $text ); ?></span>
                    </button>

                    <div class="postbox" id="webmastertools">
                        <h3 class="title"><?php _e( 'Web Master Tools', $text ); ?></h3>
                        <div class="inside">
                            <p class="note"><?php _e( 'Webmaster Tools require you to verify your domain. This makes sure that you are the correct owner of your blog or store before they provide their services to you. You can use the options below to verify your domain. If your domain is already verified, you can just forget about these.', $text ); ?></p>
                            <table class="form-table">
                                <?php
                                    spacexchimp_p004_control_field( 'google',
                                                                    'Google Webmaster Tools',
                                                                    '1234567890',
                                                                    __( 'Enter your meta key “content” value from your verification code to verify your website. <br>Example: &lt;meta name="google-site-verification" content=“<b>1234567890</b>” /&gt;', $text ),
                                                                    'https://www.google.com/webmasters/verification/'
                                                                  );
                                    spacexchimp_p004_control_field( 'bing',
                                                                    'Bing Webmaster Tools',
                                                                    '1234567890',
                                                                    __( 'Enter your meta key “content” value from your verification code to verify your website. <br>Example: &lt;meta name="msvalidate.01" content=“<b>1234567890</b>” /&gt;', $text ),
                                                                    'http://www.bing.com/webmaster/'
                                                                  );
                                    spacexchimp_p004_control_field( 'yandex',
                                                                    'Yandex Webmaster Tools',
                                                                    '1234567890',
                                                                    __( 'Enter your meta key “content” value from your verification code to verify your website. <br>Example: &lt;meta name="yandex-verification" content=“<b>1234567890</b>” /&gt;', $text ),
                                                                    'https://webmaster.yandex.com'
                                                                  );
                                ?>
                            </table>
                        </div>
                    </div>

                    <div class="postbox" id="domainverification">
                        <h3 class="title"><?php _e( 'Domain Verification', $text ); ?></h3>
                        <div class="inside">
                            <p class="note"><?php _e( 'Third-party services like Alexa, Pinterest and Google-Plus require you to verify your domain. This makes sure that you are the correct owner of your blog or store before they provide their services to you. You can use the options below to verify your domain. If your domain is already verified, you can just forget about these.', $text ); ?></p>
                            <table class="form-table">
                                <?php
                                    spacexchimp_p004_control_field( 'pinterest',
                                                                    'Pinterest',
                                                                    '1234567890',
                                                                    __( 'Enter your meta key “content” value from your verification code to verify your website. <br>Example: &lt;meta name="p:domain_verify" content=“<b>1234567890</b>” /&gt;', $text ),
                                                                    'https://help.pinterest.com/en/articles/confirm-your-website'
                                                                  );
                                    spacexchimp_p004_control_field( 'google_author',
                                                                    'Google+',
                                                                    'https://plus.google.com/+ArthurGareginyan/',
                                                                    __( 'Enter an absolute URL to the Google+ profile of the publisher. <br>Example: https://plus.google.com/+ArthurGareginyan/', $text ),
                                                                    'https://plus.google.com/'
                                                                  );
                                    spacexchimp_p004_control_field( 'facebook',
                                                                    'Facebook',
                                                                    'https://www.facebook.com/arthur.gareginyan',
                                                                    __( 'Enter an absolute URL to the Facebook profile of the publisher. <br>Example: https://www.facebook.com/arthur.gareginyan', $text ),
                                                                    'https://www.facebook.com/'
                                                                  );
                                    spacexchimp_p004_control_field( 'twitter',
                                                                    'Twitter',
                                                                    '@AGareginyan',
                                                                    __( 'Enter the Twitter username of the publisher. <br>Example: @AGareginyan', $text ),
                                                                    'https://twitter.com/'
                                                                  );
                                    spacexchimp_p004_control_field( 'alexa',
                                                                    'Alexa',
                                                                    '1234567890',
                                                                    __( 'Enter your meta key “content” value from your verification code to verify your website. <br>Example: &lt;meta name="alexaVerifyID" content=“<b>1234567890</b>” /&gt;', $text ),
                                                                    'http://www.alexa.com/siteowners/claim'
                                                                  );
                                    spacexchimp_p004_control_field( 'norton',
                                                                    'Norton Safe Web',
                                                                    '1234567890',
                                                                    __( 'Enter your meta key “content” value from your verification code to verify your website. <br>Example: &lt;meta name="norton-safeweb-site-verification" content=“<b>1234567890</b>” /&gt;', $text ),
                                                                    'https://safeweb.norton.com/help/site_owners'
                                                                  );
                                    spacexchimp_p004_control_field( 'wot',
                                                                    'Web of Trust (WOT)',
                                                                    '1234567890',
                                                                    __( 'Enter your meta key “content” value from your verification code to verify your website. <br>Example: &lt;meta name="wot-verification" content=“<b>1234567890</b>” /&gt;', $text ),
                                                                    'https://www.mywot.com/wiki/Verify_your_website'
                                                                   );
                                     spacexchimp_p004_control_field( 'specificfeeds',
                                                                     'SpecificFeeds',
                                                                     '1234567890',
                                                                     __( 'Enter your meta key “content” value from your verification code to verify your website. <br>Example: &lt;meta name="specificfeeds-verification-code" content=“<b>1234567890</b>” /&gt;', $text ),
                                                                     'https://www.specificfeeds.com/rss?pub=2jcpuERsm61dbHbp2czf9A'
                                                                   );
                                     spacexchimp_p004_control_textarea( 'custom_meta',
                                                                        __( 'Custom Meta Tags', $text ),
                                                                        '&lt;meta name="google-site-verification" content=“1234567890” /&gt;',
                                                                        __( 'If you can\'t find a field to enter your required meta tag then you can add it here. In this field you can add multiple meta tags.', $text )
                                                                      );
                                ?>
                            </table>
                        </div>
                    </div>

                    <div class="postbox" id="home">
                        <h3 class="title"><?php _e( 'Meta Tags for Static Home Page only', $text ); ?></h3>
                        <div class="inside">
                            <p class="note"><?php _e( 'You can use the options below to add meta tags such as Description and Keywords only in Static Home Page of your website.', $text ); ?></p>
                            <table class="form-table">
                                <?php
                                    spacexchimp_p004_control_textarea( 'home_description',
                                                                       __( 'Home Description', $text ),
                                                                       'My website is about plants, nature, the sea and everything I love',
                                                                       __( 'Enter a short description of your website (150-250 characters). Most search engines use a maximum of 160 chars for the home description.', $text )
                                                                     );
                                    spacexchimp_p004_control_textarea( 'home_keywords',
                                                                       __( 'Home Keyword(s)', $text ),
                                                                       'blog, awesome, handmade, books, theater',
                                                                       __( 'Enter a comma-delimited list of keywords for only Static Home Page of your website.', $text )
                                                                     );
                                ?>
                            </table>
                        </div>
                    </div>

                    <div class="postbox" id="blog">
                        <h3 class="title"><?php _e( 'Meta Tags for Default Home Page and Blog Page only', $text ); ?></h3>
                        <div class="inside">
                            <p class="note"><?php _e( 'You can use the options below to add meta tags such as Description and Keywords only in Default Home Page and Blog Page of your website.', $text ); ?></p>
                            <table class="form-table">
                                <?php
                                    spacexchimp_p004_control_textarea( 'blog_description',
                                                                       __( 'Blog Description', $text ),
                                                                       'My blog is about plants, nature, the sea and everything I love',
                                                                       __( 'Enter a short description of your website (150-250 characters). Most search engines use a maximum of 160 chars for the home description.', $text )
                                                                     );
                                    spacexchimp_p004_control_textarea( 'blog_keywords',
                                                                       __( 'Blog Keyword(s)', $text ),
                                                                       'blog, awesome, handmade, books, theater',
                                                                       __( 'Enter a comma-delimited list of keywords for only Blog Page of your website.', $text )
                                                                     );
                                ?>
                            </table>
                        </div>
                    </div>

                    <div class="postbox" id="everywhere">
                        <h3 class="title"><?php _e( 'Meta Tags for all website (Global)', $text ); ?></h3>
                        <div class="inside">
                            <p class="note"><?php _e( 'You can use the options below to add meta tags such as Author, Copyright and Keywords in everywhere on your website.', $text ); ?></p>
                            <table class="form-table">
                                <?php
                                    spacexchimp_p004_control_field( 'author',
                                                                    __( 'Author', $text ),
                                                                    'Arthur Gareginyan',
                                                                    ''
                                                                  );
                                    spacexchimp_p004_control_field( 'designer',
                                                                    __( 'Designer', $text ),
                                                                    'Arthur Gareginyan',
                                                                    ''
                                                                  );
                                     spacexchimp_p004_control_field( 'contact',
                                                                     __( 'Contact', $text ),
                                                                     'user@gmail.com',
                                                                     ''
                                                                   );
                                     spacexchimp_p004_control_field( 'copyright',
                                                                     __( 'Copyright', $text ),
                                                                     'Copyright (c) 2013-2017 Space X-Chimp Studio. All Rights Reserved.',
                                                                     ''
                                                                   );
                                     spacexchimp_p004_control_textarea( 'keywords',
                                                                        __( 'Keyword(s)', $text ),
                                                                        'blog, awesome, handmade, books, theater',
                                                                        __( 'Enter a comma-delimited list of global keywords for your website.', $text )
                                                                      );
                                ?>
                            </table>
                        </div>
                    </div>

                    <input type="submit" name="submit" id="submit" class="btn btn-default btn-lg button-save-main" value="<?php _e( 'Save changes', $text ); ?>">

                    <div class="postbox" id="woocommerce">
                        <h3 class="title"><?php _e( 'WooCommerce & Google Shopping', $text ); ?></h3>
                        <div class="inside">
                            <p><?php _e( 'This plugin automatically adds the necessary Google Shopping (Merchant Center) structured data on all WooCommerce product pages on your website. Here is the markup for women\'s T-shirt that sells for 16 dollars and 80 cents of US.', $text ); ?></p>
<pre>&lt;div itemtype=&quot;http://schema.org/Product&quot; itemscope=&quot;&quot;&gt;
    &lt;meta itemprop=&quot;name&quot; content=&quot;Womens T-shirt&quot;&gt;
    &lt;meta itemprop=&quot;description&quot; content=&quot;Constructed in cotton sweat fabric, this lovely piece...&quot;&gt;
    &lt;meta itemprop=&quot;image&quot; content=&quot;http://example.com/wp-content/uploads/2015/09/product-1.jpg&quot;&gt;
    &lt;div itemprop=&quot;offers&quot; itemscope=&quot;&quot; itemtype=&quot;http://schema.org/Offer&quot;&gt;
        &lt;meta itemprop=&quot;price&quot; content=&quot;16.80&quot;&gt;
        &lt;meta itemprop=&quot;priceCurrency&quot; content=&quot;USD&quot;&gt;
    &lt;/div&gt;
&lt;/div&gt;</pre>
                            <p><?php _e( 'Check these data generated on the pages of your website you can <a href="https://search.google.com/structured-data/testing-tool" target="_blank">here</a>.', $text ); ?></p>
                        </div>
                    </div>

                    <div class="postbox" id="support-addition">
                        <h3 class="title"><?php _e( 'Support', $text ); ?></h3>
                        <div class="inside">
                            <p><?php _e( 'I\'m an independent developer, without a regular income, so every little contribution helps cover my costs and lets me spend more time building things for people like you to enjoy.', $text ); ?></p>
                            <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=8A88KC7TFF6CS" target="_blank" class="btn btn-default button-labeled">
                                                        <span class="btn-label">
                                                            <img src="<?php echo SPACEXCHIMP_P004_URL . 'inc/img/paypal.svg'; ?>" alt="PayPal">
                                                        </span>
                                                        <?php _e( 'Donate with PayPal', $text ); ?>
                                                </a>
                            <p><?php _e( 'Thanks for your support!', $text ); ?></p>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
<?php
