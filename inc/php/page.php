<?php

/**
 * Prevent Direct Access
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Render Settings Page
 */
function spacexchimp_p004_render_submenu_page() {

    // Put value of constants to variables for easier access
    $name = SPACEXCHIMP_P004_NAME;
    $slug = SPACEXCHIMP_P004_SLUG;
    $version = SPACEXCHIMP_P004_VERSION;
    $text = SPACEXCHIMP_P004_TEXT;

    // Call messages
    spacexchimp_p004_hello_message();
    spacexchimp_p004_error_message();

    // Layout of page
    ?>
    <div class="wrap">
        <h2>
            <?php echo $name; ?>
            <span>
                <?php printf(
                              __( 'by %s Space X-Chimp Studio %s', $text ),
                                  '<a href="https://www.spacexchimp.com" target="_blank">',
                                  '</a>'
                             );
                ?>
            </span>
            <p class="version"><?php _e( 'Version', $text ); ?> <?php echo $version; ?></p>
        </h2>

        <div id="poststuff" class="metabox-holder has-right-sidebar">

            <!-- TABS NAVIGATION MENU -->
            <ul class="tabs-nav">
                <li class="active"><a href="#tab-core" data-toggle="tab"><?php _e( 'Settings', $text ); ?></a></li>
                <li><a href="#tab-usage" data-toggle="tab"><?php _e( 'Usage', $text ); ?></a></li>
                <li><a href="#tab-faq" data-toggle="tab"><?php _e( 'F.A.Q.', $text ); ?></a></li>
                <li><a href="#tab-support" data-toggle="tab"><?php _e( 'Support', $text ); ?></a></li>
                <li><a href="#tab-store" data-toggle="tab"><?php _e( 'Store', $text ); ?></a></li>
            </ul>
            <!-- END-TABS NAVIGATION MENU -->

            <!-- TAB 1 -->
            <div class="tab-page fade active in" id="tab-core">
                <!-- INCLUDE SIDEBAR -->
                <?php require_once( SPACEXCHIMP_P004_PATH . 'inc/php/sidebar.php' ); ?>
                <!-- INCLUDE SETTINGS -->
                <?php require_once( SPACEXCHIMP_P004_PATH . 'inc/php/settings.php' ); ?>
            </div>
            <!-- END-TAB 1 -->

            <!-- TAB 2 -->
            <div class="tab-page fade" id="tab-usage">
                <div class="postbox">
                    <h3 class="title"><?php _e( 'Usage Instructions', $text ); ?></h3>
                    <div class="inside">
                        <p><?php _e( 'To add the meta tags to your website, simply follow these steps:', $text ); ?></p>
                        <ol class="custom-counter">
                            <li><?php _e( 'Go to the "Settings" tab.', $text ); ?></li>
                            <li><?php _e( 'Fill in the required fields.', $text ); ?></li>
                            <li><?php _e( 'Select the desired settings.', $text ); ?></li>
                            <li><?php _e( 'Click the "Save changes" button.', $text ); ?></li>
                            <li><?php _e( 'Enjoy the improved SEO of your website.', $text ); ?> <?php _e( 'It\'s that simple!', $text ); ?></li>
                        </ol>
                        <p class="note"><b><?php _e( 'Note!', $text ); ?></b> <?php _e( 'If you want more options then tell me and I will be happy to add it.', $text ); ?></p>
                    </div>
                </div>
            </div>
            <!-- END-TAB 2 -->

            <!-- TAB 3 -->
            <div class="tab-page fade" id="tab-faq">
                <div class="postbox">
                    <h3 class="title"><?php _e( 'Frequently Asked Questions', $text ); ?></h3>
                    <div class="inside">

                        <p class="note">
                            <?php _e( 'If you have a question, please read the Frequently Asked Questions below to see if the answer is here.', $text ); ?>
                        </p>

                        <div class="panel-group" id="collapse-group">
                            <?php
                                $loopvalue = '15';
                                for ( $i = 1; $i <= $loopvalue; $i++ ) {
                                    echo '<div class="panel panel-default">
                                            <div class="panel-heading">
                                                <a data-toggle="collapse" data-parent="#collapse-group" href="#element' . $i . '">
                                                    <h4 class="panel-title"></h4>
                                                </a>
                                            </div>
                                            <div id="element' . $i . '" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                </div>
                                            </div>
                                          </div>';
                                }
                            ?>
                        </div>

                        <div class="question-1"><?php _e( 'Will this plugin work on my WordPress.COM website?', $text ); ?></div>
                        <div class="answer-1"><?php _e( 'Sorry, this plugin is available for use only on self-hosted (WordPress.ORG) websites.', $text ); ?></div>

                        <div class="question-2"><?php _e( 'Can I use this plugin on my language?', $text ); ?></div>
                        <div class="answer-2"><?php _e( 'Yes. This plugin is ready for translation and has already been translated into several languages.', $text ); ?><br><br>
                                              <?php printf(
                                                            __( 'If you want to help translate this plugin then please visit the %s. You can also use the POT file, that is included and placed in the "languages" folder, in order to create a translation PO file. Just send the PO file to me at the %s and I will include this translation within the next plugin update.', $text ),
                                                            '<a href="https://translate.wordpress.org/projects/wp-plugins/' . $slug . '" target="_blank">translation page</a>',
                                                            '<a href="mailto:arthurgareginyan@gmail.com?subject=New translation of the ' . $name . ' plugin">arthurgareginyan@gmail.com</a>'
                                                           );
                                              ?><br><br>
                                              <?php _e( 'Maybe not all existed translations are up to date. You are welcome to contribute corrections!', $text ); ?><br><br>
                                              <?php _e( 'Many of plugin users would be delighted if you share your translation with the community. Thanks for your contribution!', $text ); ?></div>

                        <div class="question-3"><?php _e( 'How does it work?', $text ); ?></div>
                        <div class="answer-3"><?php _e( 'On the "Settings" tab, fill in the required fields, select the desired settings and click the "Save changes" button. Enjoy the improved SEO of your website. It\'s that simple!', $text ); ?></div>

                        <div class="question-4"><?php _e( 'How much of description I can enter in the text field?', $text ); ?></div>
                        <div class="answer-4"><?php _e( 'I don\'t limit the number of characters, but most search engines use a maximum of 160 chars for the home description.', $text ); ?></div>

                        <div class="question-5"><?php _e( 'How much of keywords I can enter in the text field?', $text ); ?></div>
                        <div class="answer-5"><?php _e( 'I don\'t limit the number of characters.', $text ); ?></div>

                        <div class="question-6 question-red"><?php _e( 'I can\'t get verify my website. What am I doing wrong?', $text ); ?></div>
                        <div class="answer-6"><?php _e( 'The tag code which Google (or Bing, Yandex, Pinterest, Alexa, Norton, WOT, SpecificFeeds) gives you is confusing as you only have to paste in the serial key number/letters (<code>1234567890</code>) and not the whole tag (<code>&lt;meta name="google-site-verification" content=“1234567890” /&gt;</code>). So just paste that into the relevant field and you will see “Success” message appear within a few seconds.', $text ); ?></div>

                        <div class="question-7"><?php _e( 'What about compatibility with plugin "All in One SEO Pack"?', $text ); ?></div>
                        <div class="answer-7"><?php _e( 'To make these plugins compatible you need to stick to one simple rule: do not fill the same field in both plugins at once. Otherwise both plugins fulfill their work and you will get a duplicate actions, for example:', $text ); ?>
<pre><code>&lt;head&gt;
    ...
    &lt;meta name="copyright" content="Copyright (c) 2013-2017 Space X-Chimp Studio. All Rights Reserved."&gt;
    ...
    &lt;meta name="copyright" content="Copyright 2017 Space X-Chimp Studio. All Rights Reserved."&gt;
    ...
&lt;/head&gt;</code></pre>
                                              <?php _e( 'In the rest, the "All Meta Tags" and "All in One SEO Pack" is compatible.', $text ); ?></div>

                        <div class="question-8"><?php _e( 'Does this plugin requires any modification of the theme?', $text ); ?></div>
                        <div class="answer-8"><?php _e( 'Absolutely not. This plugin is configurable entirely from the plugin settings page.', $text ); ?></div>

                        <div class="question-9"><?php _e( 'Does this require any knowledge of HTML or CSS?', $text ); ?></div>
                        <div class="answer-9"><?php _e( 'Absolutely not. This plugin can be configured with no knowledge of HTML or CSS, using an easy-to-use plugin settings page.', $text ); ?></div>

                        <div class="question-10 question-red"><?php _e( 'It\'s not working. What could be wrong?', $text ); ?></div>
                        <div class="answer-10"><?php _e( 'As with every plugin, it\'s possible that things don\'t work. The most common reason for this is a web browser\'s cache. Every web browser stores a cache of the websites you visit (pages, images, and etc.) to reduce bandwidth usage and server load. This is called the browser\'s cache.​ Clearing your browser\'s cache may solve the problem.', $text ); ?><br><br>
                                               <?php _e( 'It\'s impossible to tell what could be wrong exactly, but if you post a support request in the plugin\'s support forum on WordPress.org, I\'d be happy to give it a look and try to help out. Please include as much information as possible, including a link to your website where the problem can be seen.', $text ); ?></div>

                        <div class="question-11 question-red"><?php _e( 'The last WordPress update is preventing me from editing my website that is using this plugin. Why is this?', $text ); ?></div>
                        <div class="answer-11"><?php _e( 'This plugin can not cause such problem. More likely, the problem are related to the settings of the website. It could just be a cache, so please try to clear your website\'s cache (may be you using a caching plugin, or some web service such as the CloudFlare) and then the cache of your web browser. Also please try to re-login to the website, this too can help.', $text ); ?></div>

                        <div class="question-12 question-red"><?php _e( 'Where to report bug if found?', $text ); ?></div>
                        <div class="answer-12"><?php printf(
                                                            __( 'Please visit the %s Dedicated Plugin Page on GitHub %s and report.', $text ),
                                                                '<a href="https://github.com/ArthurGareginyan/' . $slug . '" target="_blank">',
                                                                '</a>'
                                                           );
                                               ?></div>

                        <div class="question-13"><?php _e( 'Where to share any ideas or suggestions to make the plugin better?', $text ); ?></div>
                        <div class="answer-13"><?php printf(
                                                            __( 'Any suggestions are very welcome! Please send me an email to %s. Thank you!', $text ),
                                                                '<a href="mailto:arthurgareginyan@gmail.com?subject=Suggestions about the ' . $name . ' plugin">arthurgareginyan@gmail.com</a>'
                                                           );
                                               ?></div>

                        <div class="question-14"><?php _e( 'I love this plugin! Can I help somehow?', $text ); ?></div>
                        <div class="answer-14"><?php printf(
                                                            __( 'Yes, any financial contributions are welcome! Just visit %s my website %s, click on the donate button, and thank you!', $text ),
                                                                '<a href="https://www.arthurgareginyan.com/donate.html" target="_blank">',
                                                                '</a>'
                                                           );
                                               ?></div>

                        <div class="question-15"><?php _e( 'My question wasn\'t answered here.', $text ); ?></div>
                        <div class="answer-15"><?php printf(
                                                            __( 'You can ask your question on the plugin support page %s. But please keep in mind that this plugin is free, and there is no a special support team, so I have no way to answer everyone.', $text ),
                                                            '<a href="https://wordpress.org/support/plugin/' . $slug . '/" target="_blank">here</a>'
                                                           );
                                               ?></div>

                    </div>
                </div>
            </div>
            <!-- END-TAB 3 -->

            <!-- TAB 4 -->
            <div class="tab-page fade" id="tab-support">
                <div class="postbox">
                    <h3 class="title"><?php _e( 'Support Me', $text ); ?></h3>
                    <div class="inside">
                        <span class="image-with-button pull-left">
                            <img src="<?php echo SPACEXCHIMP_P004_URL . 'inc/img/thanks.png'; ?>" alt="Thanks!">
                            <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=8A88KC7TFF6CS" target="_blank" class="btn btn-default button-labeled">
                                    <span class="btn-label">
                                        <img src="<?php echo SPACEXCHIMP_P004_URL . 'inc/img/paypal.svg'; ?>" alt="PayPal">
                                    </span>
                                    <?php _e( 'Donate with PayPal', $text ); ?>
                            </a>
                        </span>
                        <p><?php
                                 printf(
                                         __( 'Hello! My name is %s Arthur Gareginyan %s and I\'m the founder of %s Space X-Chimp Studio %s.', $text ),
                                         '<a href="https://www.arthurgareginyan.com" target="_blank">',
                                         '</a>',
                                         '<a href="https://www.spacexchimp.com" target="_blank">',
                                         '</a>'
                                       );
                           ?>
                        </p>
                        <p><?php _e( 'My intention is to create projects that will make this world a better place. I\'m really passionate about my work, I like what I\'m doing and hope that you will be enriched by my projects too.', $text ); ?></p>
                        <p><?php _e( 'I spend a lot of time and effort trying to make sure that the themes, plugins and other things I build are useful, and the ultimate proof of that for me is that you actually want to use them. But, I’m an independent developer, without a regular income, so every little contribution helps cover my costs and lets me spend more time building things for people like you to enjoy.', $text ); ?></p>
                        <p><?php _e( 'If you appreciate my work, you can buy me a coffee!', $text ); ?></p>
                        <p><?php _e( 'Thank you for your support!', $text ); ?></p>
                    </div>
                </div>
            </div>
            <!-- END-TAB 4 -->

            <!-- TAB 5 -->
            <div class="tab-page fade" id="tab-store">
                <div class="include-tab-store"></div>
            </div>
            <!-- END-TAB 5 -->

        </div>

    </div>
    <?php
}
