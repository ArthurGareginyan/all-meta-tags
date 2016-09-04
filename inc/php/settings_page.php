<?php

/**
 * Prevent Direct Access
 *
 * @since 0.1
 */
defined('ABSPATH') or die("Restricted access!");

/**
 * Render Settings Page
 *
 * @since 3.2
 */
function allmetatags_render_submenu_page() {

	// Declare variables
    $options = get_option( 'allmetatags_settings' );

	// Page
	?>
	<div class="wrap">
		<h2>
            <?php _e( 'All Meta Tags', 'all-meta-tags' ); ?>
            <br/>
            <span>
                <?php _e( 'by <a href="http://www.arthurgareginyan.com" target="_blank">Arthur Gareginyan</a>', 'all-meta-tags' ); ?>
            <span/>
		</h2>

        <div id="poststuff" class="metabox-holder has-right-sidebar">

            <!-- SIDEBAR -->
            <div class="inner-sidebar">
                <div id="side-sortables" class="meta-box-sortabless ui-sortable">

                    <div id="about" class="postbox">
                        <h3 class="title"><?php _e( 'About', 'all-meta-tags' ); ?></a></h3>
                        <div class="inside">
                            <p><?php _e( 'This plugin allows you to easily add Meta Tags to your website.', 'all-meta-tags' ); ?></p>
                        </div>
                    </div>

                    <div id="using" class="postbox">
                        <h3 class="title"><?php _e( 'Using', 'all-meta-tags' ); ?></a></h3>
                        <div class="inside">
                            <p><?php _e( 'To use, enter your custom Meta Tags, then click "Save Changes". It\'s that simple!', 'all-meta-tags' ); ?></p>
                        </div>
                    </div>

                    <div id="help" class="postbox">
                        <h3 class="title"><?php _e( 'Help', 'all-meta-tags' ); ?></h3>
                        <div class="inside">
                            <p><?php _e( 'Got something to say? Need help?', 'all-meta-tags' ); ?></p>
                            <p><a href="mailto:arthurgareginyan@gmail.com?subject=All Meta Tags">arthurgareginyan@gmail.com</a></p>
                        </div>
                    </div>

                    <div id="donate" class="postbox">
                        <h3 class="title"><?php _e( 'Donate', 'all-meta-tags' ); ?></h3>
                        <div class="inside">
                            <p><?php _e( 'If you like this plugin and find it useful, please help me to make this plugin even better and keep it up-to-date.', 'all-meta-tags' ); ?></p>
                            <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=8A88KC7TFF6CS" target="_blank" rel="nofollow">
                                <img src="<?php echo plugins_url('../img/btn_donateCC_LG.gif', __FILE__); ?>" alt="Make a donation">
                            </a>
                            <p><?php _e( 'Thanks for your support!', 'all-meta-tags' ); ?></p>
                        </div>
                    </div>

                    <div id="advertisement" class="postbox">
                        <h3 class="title"><?php _e( 'Advertisement', 'all-meta-tags' ); ?></h3>
                        <div class="inside">
                            <a href="http://www.elegantthemes.com/affiliates/idevaffiliate.php?id=36439_5_1_21" target="_blank" rel="nofollow"><img style="border:0px" src="http://www.elegantthemes.com/affiliates/media/banners/divi_250x250.jpg" width="250" height="250" alt="Divi WordPress Theme"></a>
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

                            <div class="postbox" id="WebMasterTools">
                                <h3 class="title"><?php _e( 'Web Master Tools', 'all-meta-tags' ); ?></h3>
                                <div class="inside">
                                    <p><?php _e( 'Webmaster Tools require you to verify your domain. This makes sure that you are the correct owner of your blog or store before they provide their services to you. You can use the options below to verify your domain. If your domain is already verified, you can just forget about these.', 'all-meta-tags' ); ?></p>
                                    <table class="form-table">
                                        <?php allmetatags_field('google',
                                                                'Google Webmaster Tools',
                                                                '1234567890',
                                                                __( 'Enter your meta key “content” value from your verification code to verify your website. </br>Example: &lt;meta name="google-site-verification" content=“<b>1234567890</b>” /&gt;', 'all-meta-tags' ),
                                                                'https://www.google.com/webmasters/verification/'); ?>
                                        <?php allmetatags_field('bing',
                                                                'Bing Webmaster Tools',
                                                                '1234567890',
                                                                __( 'Enter your meta key “content” value from your verification code to verify your website. </br>Example: &lt;meta name="msvalidate.01" content=“<b>1234567890</b>” /&gt;', 'all-meta-tags' ),
                                                                'http://www.bing.com/webmaster/'); ?>
                                        <?php allmetatags_field('yandex',
                                                                'Yandex Webmaster Tools',
                                                                '1234567890',
                                                                __( 'Enter your meta key “content” value from your verification code to verify your website. </br>Example: &lt;meta name="yandex-verification" content=“<b>1234567890</b>” /&gt;', 'all-meta-tags' ),
                                                                'https://webmaster.yandex.com'); ?>
                                    </table>
                                    <?php submit_button( __( 'Save Changes', 'all-meta-tags' ), 'primary', 'submit', true ); ?>
                                </div>
                            </div>

                            <div class="postbox" id="DomainVerification">
                                <h3 class="title"><?php _e( 'Domain Verification', 'all-meta-tags' ); ?></h3>
                                <div class="inside">
                                    <p><?php _e( 'Third-party services like Alexa, Pinterest and Google-Plus require you to verify your domain. This makes sure that you are the correct owner of your blog or store before they provide their services to you. You can use the options below to verify your domain. If your domain is already verified, you can just forget about these.', 'all-meta-tags' ); ?></p>
                                    <table class="form-table">
                                        <?php allmetatags_field('pinterest',
                                                                'Pinterest',
                                                                '1234567890',
                                                                __( 'Enter your meta key “content” value from your verification code to verify your website. </br>Example: &lt;meta name="p:domain_verify" content=“<b>1234567890</b>” /&gt;', 'all-meta-tags' ),
                                                                'https://help.pinterest.com/en/articles/confirm-your-website'); ?>
                                        <?php allmetatags_field('google_author',
                                                                'Google+',
                                                                'https://plus.google.com/+ArthurGareginyan/',
                                                                __( 'Enter an absolute URL to the Google+ profile of the publisher. </br>Example: https://plus.google.com/+ArthurGareginyan/', 'all-meta-tags' ),
                                                                'https://plus.google.com/'); ?>
                                        <?php allmetatags_field('facebook',
                                                                'Facebook',
                                                                'https://www.facebook.com/arthur.gareginyan',
                                                                __( 'Enter an absolute URL to the Facebook profile of the publisher. </br>Example: https://www.facebook.com/arthur.gareginyan', 'all-meta-tags' ),
                                                                'https://www.facebook.com/'); ?>
                                        <?php allmetatags_field('twitter',
                                                                'Twitter',
                                                                '@AGareginyan',
                                                                __( 'Enter the Twitter username of the publisher. </br>Example: @AGareginyan', 'all-meta-tags' ),
                                                                'https://twitter.com/'); ?>
                                        <?php allmetatags_field('alexa',
                                                                'Alexa',
                                                                '1234567890',
                                                                __( 'Enter your meta key “content” value from your verification code to verify your website. </br>Example: &lt;meta name="alexaVerifyID" content=“<b>1234567890</b>” /&gt;', 'all-meta-tags' ),
                                                                'http://www.alexa.com/siteowners/claim'); ?>
                                        <?php allmetatags_field('norton',
                                                                'Norton Safe Web',
                                                                '1234567890',
                                                                __( 'Enter your meta key “content” value from your verification code to verify your website. </br>Example: &lt;meta name="norton-safeweb-site-verification" content=“<b>1234567890</b>” /&gt;', 'all-meta-tags' ),
                                                                'https://safeweb.norton.com/help/site_owners'); ?>
                                        <?php allmetatags_field('wot',
                                                                'Web of Trust (WOT)',
                                                                '1234567890',
                                                                __( 'Enter your meta key “content” value from your verification code to verify your website. </br>Example: &lt;meta name="wot-verification" content=“<b>1234567890</b>” /&gt;', 'all-meta-tags' ),
                                                                'https://www.mywot.com/wiki/Verify_your_website'); ?>
                                        <?php allmetatags_field('custom_meta',
                                                                __( 'Custom Meta Tags', 'all-meta-tags' ),
                                                                '&lt;meta name="google-site-verification" content=“1234567890” /&gt;',
                                                                __( 'If you can\'t find a field to enter your required meta tag then you can add it here. In this field you can add multiple meta tags.', 'all-meta-tags' ),
                                                                '',
                                                                'textarea'); ?>
                                    </table>
                                    <?php submit_button( __( 'Save Changes', 'all-meta-tags' ), 'primary', 'submit', true ); ?>
                                </div>
                            </div>

                            <div class="postbox" id="Home">
                                <h3 class="title"><?php _e( 'Meta Tags for Static Home Page only', 'all-meta-tags' ); ?></h3>
                                <div class="inside">
                                    <p><?php _e( 'You can use the options below to add meta tags such as Description and Keywords only in Static Home Page of your website.', 'all-meta-tags' ); ?></p>
                                    <table class="form-table">
                                        <?php allmetatags_field('home_description',
                                                                __( 'Home Description', 'all-meta-tags' ),
                                                                'My website is about plants, nature, the sea and everything I love',
                                                                __( 'Enter a short description of your website (150-250 characters). Most search engines use a maximum of 160 chars for the home description.', 'all-meta-tags' ),
                                                                '',
                                                                'textarea'); ?>
                                        <?php allmetatags_field('home_keywords',
                                                                __( 'Home Keyword(s)', 'all-meta-tags' ),
                                                                'blog, awesome, handmade, books, theater',
                                                                __( 'Enter a comma-delimited list of keywords for only Static Home Page of your website.', 'all-meta-tags' ),
                                                                '',
                                                                'textarea'); ?>
                                    </table>
                                    <?php submit_button( __( 'Save Changes', 'all-meta-tags' ), 'primary', 'submit', true ); ?>
                                </div>
                            </div>

                            <div class="postbox" id="Blog">
                                <h3 class="title"><?php _e( 'Meta Tags for Default Home Page and Blog Page only', 'all-meta-tags' ); ?></h3>
                                <div class="inside">
                                    <p><?php _e( 'You can use the options below to add meta tags such as Description and Keywords only in Default Home Page and Blog Page of your website.', 'all-meta-tags' ); ?></p>
                                    <table class="form-table">
                                        <?php allmetatags_field('blog_description',
                                                                __( 'Blog Description', 'all-meta-tags' ),
                                                                'My blog is about plants, nature, the sea and everything I love',
                                                                __( 'Enter a short description of your website (150-250 characters). Most search engines use a maximum of 160 chars for the home description.', 'all-meta-tags' ),
                                                                '',
                                                                'textarea'); ?>
                                        <?php allmetatags_field('blog_keywords',
                                                                __( 'Blog Keyword(s)', 'all-meta-tags' ),
                                                                'blog, awesome, handmade, books, theater',
                                                                __( 'Enter a comma-delimited list of keywords for only Blog Page of your website.', 'all-meta-tags' ),
                                                                '',
                                                                'textarea'); ?>
                                    </table>
                                    <?php submit_button( __( 'Save Changes', 'all-meta-tags' ), 'primary', 'submit', true ); ?>
                                </div>
                            </div>

                            <div class="postbox" id="Everywhere">
                                <h3 class="title"><?php _e( 'Meta Tags for all website (Global)', 'all-meta-tags' ); ?></h3>
                                <div class="inside">
                                    <p><?php _e( 'You can use the options below to add meta tags such as Author, Copyright and Keywords in everywhere on your website.', 'all-meta-tags' ); ?></p>
                                    <table class="form-table">
                                        <?php allmetatags_field('author',
                                                                __( 'Author', 'all-meta-tags' ),
                                                                'Arthur Gareginyan',
                                                                '',
                                                                ''); ?>
                                        <?php allmetatags_field('designer',
                                                                __( 'Designer', 'all-meta-tags' ),
                                                                'Arthur Gareginyan',
                                                                '',
                                                                ''); ?>
                                        <?php allmetatags_field('contact',
                                                                __( 'Contact', 'all-meta-tags' ),
                                                                'arthurgareginyan@gmail.com',
                                                                ''); ?>
                                        <?php allmetatags_field('copyright',
                                                                __( 'Copyright', 'all-meta-tags' ),
                                                                'Copyright (c) 2013-2016 Arthur Gareginyan. All Rights Reserved.',
                                                                ''); ?>
                                        <?php allmetatags_field('keywords',
                                                                __( 'Keyword(s)', 'all-meta-tags' ),
                                                                'blog, awesome, handmade, books, theater',
                                                                __( 'Enter a comma-delimited list of global keywords for your website.', 'all-meta-tags' ),
                                                                '',
                                                                'textarea'); ?>
                                    </table>
                                    <?php submit_button( __( 'Save Changes', 'all-meta-tags' ), 'primary', 'submit', true ); ?>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- END-FORM -->

        </div>

	</div>
	<?php
}