<?php

/**
 * Prevent Direct Access
 *
 * @since 0.1
 */
defined('ABSPATH') or die("Restricted access!");

/**
 * Render Settings Tab
 *
 * @since 4.0
 */
?>
    <!-- SIDEBAR -->
    <div class="inner-sidebar">
        <div id="side-sortables" class="meta-box-sortabless ui-sortable">

            <div id="about" class="postbox">
                <h3 class="title"><?php _e( 'About', ALLMT_TEXT ); ?></h3>
                <div class="inside">
                    <p><?php _e( 'This plugin allows you to easily add Meta Tags to your website.', ALLMT_TEXT ); ?></p>
                </div>
            </div>

            <div id="support" class="postbox">
                <h3 class="title"><?php _e( 'Support', ALLMT_TEXT ); ?></h3>
                <div class="inside">
                    <p><?php _e( 'I\'m an independent developer, without a regular income, so every little contribution helps cover my costs and lets me spend more time building things for people like you to enjoy.', ALLMT_TEXT ); ?></p>
                    <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=8A88KC7TFF6CS" target="_blank" class="additional-button paypal"><?php _e( 'Donate with PayPal', ALLMT_TEXT ); ?></a>
                    <p><?php _e( 'Thanks for your support!', ALLMT_TEXT ); ?></p>
                </div>
            </div>

            <div id="help" class="postbox">
                <h3 class="title"><?php _e( 'Help', ALLMT_TEXT ); ?></h3>
                <div class="inside">
                    <p><?php _e( 'Got something to say? Need help?', ALLMT_TEXT ); ?></p>
                    <p><a href="mailto:arthurgareginyan@gmail.com?subject=All Meta Tags">arthurgareginyan@gmail.com</a></p>
                </div>
            </div>

        </div>
    </div>
    <!-- END-SIDEBAR -->

    <!-- FORM -->
    <div class="has-sidebar sm-padded">
        <div id="post-body-content" class="has-sidebar-content">
            <div class="meta-box-sortabless">

                <form name="allmetatags-form" action="options.php" method="post" enctype="multipart/form-data">
                    <?php settings_fields( 'allmetatags_settings_group' ); ?>

                    <?php
                        // Get options from the BD
                        $options = get_option( 'allmetatags_settings' );
                    ?>

                    <div class="postbox" id="WebMasterTools">
                        <h3 class="title"><?php _e( 'Web Master Tools', ALLMT_TEXT ); ?></h3>
                        <div class="inside">
                            <p class="note"><?php _e( 'Webmaster Tools require you to verify your domain. This makes sure that you are the correct owner of your blog or store before they provide their services to you. You can use the options below to verify your domain. If your domain is already verified, you can just forget about these.', ALLMT_TEXT ); ?></p>
                            <table class="form-table">
                                <?php allmetatags_field('google',
                                                        'Google Webmaster Tools',
                                                        '1234567890',
                                                        __( 'Enter your meta key “content” value from your verification code to verify your website. <br>Example: &lt;meta name="google-site-verification" content=“<b>1234567890</b>” /&gt;', ALLMT_TEXT ),
                                                        'https://www.google.com/webmasters/verification/'); ?>
                                <?php allmetatags_field('bing',
                                                        'Bing Webmaster Tools',
                                                        '1234567890',
                                                        __( 'Enter your meta key “content” value from your verification code to verify your website. <br>Example: &lt;meta name="msvalidate.01" content=“<b>1234567890</b>” /&gt;', ALLMT_TEXT ),
                                                        'http://www.bing.com/webmaster/'); ?>
                                <?php allmetatags_field('yandex',
                                                        'Yandex Webmaster Tools',
                                                        '1234567890',
                                                        __( 'Enter your meta key “content” value from your verification code to verify your website. <br>Example: &lt;meta name="yandex-verification" content=“<b>1234567890</b>” /&gt;', ALLMT_TEXT ),
                                                        'https://webmaster.yandex.com'); ?>
                            </table>
                            <?php submit_button( __( 'Save Changes', ALLMT_TEXT ), 'primary', 'submit', true ); ?>
                        </div>
                    </div>

                    <div class="postbox" id="DomainVerification">
                        <h3 class="title"><?php _e( 'Domain Verification', ALLMT_TEXT ); ?></h3>
                        <div class="inside">
                            <p class="note"><?php _e( 'Third-party services like Alexa, Pinterest and Google-Plus require you to verify your domain. This makes sure that you are the correct owner of your blog or store before they provide their services to you. You can use the options below to verify your domain. If your domain is already verified, you can just forget about these.', ALLMT_TEXT ); ?></p>
                            <table class="form-table">
                                <?php allmetatags_field('pinterest',
                                                        'Pinterest',
                                                        '1234567890',
                                                        __( 'Enter your meta key “content” value from your verification code to verify your website. <br>Example: &lt;meta name="p:domain_verify" content=“<b>1234567890</b>” /&gt;', ALLMT_TEXT ),
                                                        'https://help.pinterest.com/en/articles/confirm-your-website'); ?>
                                <?php allmetatags_field('google_author',
                                                        'Google+',
                                                        'https://plus.google.com/+ArthurGareginyan/',
                                                        __( 'Enter an absolute URL to the Google+ profile of the publisher. <br>Example: https://plus.google.com/+ArthurGareginyan/', ALLMT_TEXT ),
                                                        'https://plus.google.com/'); ?>
                                <?php allmetatags_field('facebook',
                                                        'Facebook',
                                                        'https://www.facebook.com/arthur.gareginyan',
                                                        __( 'Enter an absolute URL to the Facebook profile of the publisher. <br>Example: https://www.facebook.com/arthur.gareginyan', ALLMT_TEXT ),
                                                        'https://www.facebook.com/'); ?>
                                <?php allmetatags_field('twitter',
                                                        'Twitter',
                                                        '@AGareginyan',
                                                        __( 'Enter the Twitter username of the publisher. <br>Example: @AGareginyan', ALLMT_TEXT ),
                                                        'https://twitter.com/'); ?>
                                <?php allmetatags_field('alexa',
                                                        'Alexa',
                                                        '1234567890',
                                                        __( 'Enter your meta key “content” value from your verification code to verify your website. <br>Example: &lt;meta name="alexaVerifyID" content=“<b>1234567890</b>” /&gt;', ALLMT_TEXT ),
                                                        'http://www.alexa.com/siteowners/claim'); ?>
                                <?php allmetatags_field('norton',
                                                        'Norton Safe Web',
                                                        '1234567890',
                                                        __( 'Enter your meta key “content” value from your verification code to verify your website. <br>Example: &lt;meta name="norton-safeweb-site-verification" content=“<b>1234567890</b>” /&gt;', ALLMT_TEXT ),
                                                        'https://safeweb.norton.com/help/site_owners'); ?>
                                <?php allmetatags_field('wot',
                                                        'Web of Trust (WOT)',
                                                        '1234567890',
                                                        __( 'Enter your meta key “content” value from your verification code to verify your website. <br>Example: &lt;meta name="wot-verification" content=“<b>1234567890</b>” /&gt;', ALLMT_TEXT ),
                                                        'https://www.mywot.com/wiki/Verify_your_website'); ?>
                                <?php allmetatags_field('specificfeeds',
                                                        'SpecificFeeds',
                                                        '1234567890',
                                                        __( 'Enter your meta key “content” value from your verification code to verify your website. <br>Example: &lt;meta name="specificfeeds-verification-code" content=“<b>1234567890</b>” /&gt;', ALLMT_TEXT ),
                                                        'https://www.specificfeeds.com/rss?pub=2jcpuERsm61dbHbp2czf9A'); ?>
                                <?php allmetatags_field('custom_meta',
                                                        __( 'Custom Meta Tags', ALLMT_TEXT ),
                                                        '&lt;meta name="google-site-verification" content=“1234567890” /&gt;',
                                                        __( 'If you can\'t find a field to enter your required meta tag then you can add it here. In this field you can add multiple meta tags.', ALLMT_TEXT ),
                                                        '',
                                                        'textarea'); ?>
                            </table>
                            <?php submit_button( __( 'Save Changes', ALLMT_TEXT ), 'primary', 'submit', true ); ?>
                        </div>
                    </div>

                    <div class="postbox" id="Home">
                        <h3 class="title"><?php _e( 'Meta Tags for Static Home Page only', ALLMT_TEXT ); ?></h3>
                        <div class="inside">
                            <p class="note"><?php _e( 'You can use the options below to add meta tags such as Description and Keywords only in Static Home Page of your website.', ALLMT_TEXT ); ?></p>
                            <table class="form-table">
                                <?php allmetatags_field('home_description',
                                                        __( 'Home Description', ALLMT_TEXT ),
                                                        'My website is about plants, nature, the sea and everything I love',
                                                        __( 'Enter a short description of your website (150-250 characters). Most search engines use a maximum of 160 chars for the home description.', ALLMT_TEXT ),
                                                        '',
                                                        'textarea'); ?>
                                <?php allmetatags_field('home_keywords',
                                                        __( 'Home Keyword(s)', ALLMT_TEXT ),
                                                        'blog, awesome, handmade, books, theater',
                                                        __( 'Enter a comma-delimited list of keywords for only Static Home Page of your website.', ALLMT_TEXT ),
                                                        '',
                                                        'textarea'); ?>
                            </table>
                            <?php submit_button( __( 'Save Changes', ALLMT_TEXT ), 'primary', 'submit', true ); ?>
                        </div>
                    </div>

                    <div class="postbox" id="Blog">
                        <h3 class="title"><?php _e( 'Meta Tags for Default Home Page and Blog Page only', ALLMT_TEXT ); ?></h3>
                        <div class="inside">
                            <p class="note"><?php _e( 'You can use the options below to add meta tags such as Description and Keywords only in Default Home Page and Blog Page of your website.', ALLMT_TEXT ); ?></p>
                            <table class="form-table">
                                <?php allmetatags_field('blog_description',
                                                        __( 'Blog Description', ALLMT_TEXT ),
                                                        'My blog is about plants, nature, the sea and everything I love',
                                                        __( 'Enter a short description of your website (150-250 characters). Most search engines use a maximum of 160 chars for the home description.', ALLMT_TEXT ),
                                                        '',
                                                        'textarea'); ?>
                                <?php allmetatags_field('blog_keywords',
                                                        __( 'Blog Keyword(s)', ALLMT_TEXT ),
                                                        'blog, awesome, handmade, books, theater',
                                                        __( 'Enter a comma-delimited list of keywords for only Blog Page of your website.', ALLMT_TEXT ),
                                                        '',
                                                        'textarea'); ?>
                            </table>
                            <?php submit_button( __( 'Save Changes', ALLMT_TEXT ), 'primary', 'submit', true ); ?>
                        </div>
                    </div>

                    <div class="postbox" id="Everywhere">
                        <h3 class="title"><?php _e( 'Meta Tags for all website (Global)', ALLMT_TEXT ); ?></h3>
                        <div class="inside">
                            <p class="note"><?php _e( 'You can use the options below to add meta tags such as Author, Copyright and Keywords in everywhere on your website.', ALLMT_TEXT ); ?></p>
                            <table class="form-table">
                                <?php allmetatags_field('author',
                                                        __( 'Author', ALLMT_TEXT ),
                                                        'Arthur Gareginyan',
                                                        '',
                                                        ''); ?>
                                <?php allmetatags_field('designer',
                                                        __( 'Designer', ALLMT_TEXT ),
                                                        'Arthur Gareginyan',
                                                        '',
                                                        ''); ?>
                                <?php allmetatags_field('contact',
                                                        __( 'Contact', ALLMT_TEXT ),
                                                        'arthurgareginyan@gmail.com',
                                                        ''); ?>
                                <?php allmetatags_field('copyright',
                                                        __( 'Copyright', ALLMT_TEXT ),
                                                        'Copyright (c) 2013-2016 Arthur Gareginyan. All Rights Reserved.',
                                                        ''); ?>
                                <?php allmetatags_field('keywords',
                                                        __( 'Keyword(s)', ALLMT_TEXT ),
                                                        'blog, awesome, handmade, books, theater',
                                                        __( 'Enter a comma-delimited list of global keywords for your website.', ALLMT_TEXT ),
                                                        '',
                                                        'textarea'); ?>
                            </table>
                            <?php submit_button( __( 'Save Changes', ALLMT_TEXT ), 'primary', 'submit', true ); ?>
                        </div>
                    </div>

                    <div class="postbox" id="WooCommerce">
                        <h3 class="title"><?php _e( 'WooCommerce & Google Shopping', ALLMT_TEXT ); ?></h3>
                        <div class="inside">
                            <p><?php _e( 'This plugin automatically adds the necessary Google Shopping (Merchant Center) structured data on all WooCommerce product pages on your website. Here is the markup for women\'s T-shirt that sells for 16 dollars and 80 cents of US.', ALLMT_TEXT ); ?></p>
<pre>&lt;div itemtype=&quot;http://schema.org/Product&quot; itemscope=&quot;&quot;&gt;
    &lt;meta itemprop=&quot;name&quot; content=&quot;Womens T-shirt&quot;&gt;
    &lt;meta itemprop=&quot;description&quot; content=&quot;Constructed in cotton sweat fabric, this lovely piece...&quot;&gt;
    &lt;meta itemprop=&quot;image&quot; content=&quot;http://example.com/wp-content/uploads/2015/09/product-1.jpg&quot;&gt;
    &lt;div itemprop=&quot;offers&quot; itemscope=&quot;&quot; itemtype=&quot;http://schema.org/Offer&quot;&gt;
        &lt;meta itemprop=&quot;price&quot; content=&quot;16.80&quot;&gt;
        &lt;meta itemprop=&quot;priceCurrency&quot; content=&quot;USD&quot;&gt;
    &lt;/div&gt;
&lt;/div&gt;</pre>
                            <p><?php _e( 'Check these data generated on the pages of your website you can <a href="https://search.google.com/structured-data/testing-tool" target="_blank">here</a>.', ALLMT_TEXT ); ?></p>
                        </div>
                    </div>

                    <div id="support-addition" class="postbox">
                        <h3 class="title"><?php _e( 'Support', ALLMT_TEXT ); ?></h3>
                        <div class="inside">
                            <p><?php _e( 'I\'m an independent developer, without a regular income, so every little contribution helps cover my costs and lets me spend more time building things for people like you to enjoy.', ALLMT_TEXT ); ?></p>
                            <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=8A88KC7TFF6CS" target="_blank" class="additional-button paypal"><?php _e( 'Donate with PayPal', ALLMT_TEXT ); ?></a>
                            <p><?php _e( 'Thanks for your support!', ALLMT_TEXT ); ?></p>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
    <!-- END-FORM -->
<?php
