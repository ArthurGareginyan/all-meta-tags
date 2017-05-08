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
 * @since 4.0
 */
function allmetatags_render_submenu_page() {

    // Call messages
    allmetatags_hello_message();
    allmetatags_error_message();

    // Layout of page
    ?>
    <div class="wrap">
        <h2>
            <?php _e( 'All Meta Tags', ALLMT_TEXT ); ?>
            <span>
                <?php printf(
                              __( 'by %s Arthur Gareginyan %s', ALLMT_TEXT ),
                                  '<a href="http://www.arthurgareginyan.com" target="_blank">',
                                  '</a>'
                             );
                ?>
            </span>
        </h2>

        <div id="poststuff" class="metabox-holder has-right-sidebar">

            <!-- TABS NAVIGATION MENU -->
            <ul class="tabs-nav">
                <li class="active"><a href="#tab-core" data-toggle="tab"><?php _e( 'Settings', ALLMT_TEXT ); ?></a></li>
                <li><a href="#tab-usage" data-toggle="tab"><?php _e( 'Usage', ALLMT_TEXT ); ?></a></li>
                <li><a href="#tab-faq" data-toggle="tab"><?php _e( 'F.A.Q.', ALLMT_TEXT ); ?></a></li>
                <li><a href="#tab-author" data-toggle="tab"><?php _e( 'Author', ALLMT_TEXT ); ?></a></li>
                <li><a href="#tab-support" data-toggle="tab"><?php _e( 'Support', ALLMT_TEXT ); ?></a></li>
                <li><a href="#tab-family" data-toggle="tab"><?php _e( 'Family', ALLMT_TEXT ); ?></a></li>
            </ul>
            <!-- END-TABS NAVIGATION MENU -->


            <!-- TAB 1 -->
            <div class="tab-page fade active in" id="tab-core">

                <?php require_once( ALLMT_PATH . 'inc/php/settings.php' ); ?>

            </div>
            <!-- END-TAB 1 -->

            <!-- TAB 2 -->
            <div class="tab-page fade" id="tab-usage">
                <div class="postbox">
                    <h3 class="title"><?php _e( 'Usage', ALLMT_TEXT ); ?></h3>
                    <div class="inside">
                        <p><?php _e( 'To add the meta tags to your website, simply follow these steps:', ALLMT_TEXT ); ?></p>
                        <ol class="custom-counter">
                            <li><?php _e( 'Go to the "Settings" tab.', ALLMT_TEXT ); ?></li>
                            <li><?php _e( 'Fill in the required fields, select the desired settings and click the "Save Changes" button.', ALLMT_TEXT ); ?></li>
                            <li><?php _e( 'Enjoy the improved SEO of your website.', ALLMT_TEXT ); ?> <?php _e( 'It\'s that simple!', ALLMT_TEXT ); ?></li>
                        </ol>
                        <p class="note"><b><?php _e( 'Note!', ALLMT_TEXT ); ?></b> <?php _e( 'If you want more options then tell me and I will be happy to add it.', ALLMT_TEXT ); ?></p>
                    </div>
                </div>
            </div>
            <!-- END-TAB 2 -->

            <!-- TAB 3 -->
            <div class="tab-page fade" id="tab-faq">
                <div class="postbox">
                    <h3 class="title"><?php _e( 'Frequently Asked Questions', ALLMT_TEXT ); ?></h3>
                    <div class="inside">

                        <div class="panel-group" id="collapse-group">
                            <?php
                                $loopvalue = '13';
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

                        <div class="question-1"><?php _e( 'Will this plugin work on my WordPress.COM website?', ALLMT_TEXT ); ?></div>
                        <div class="answer-1"><?php _e( 'Sorry, this plugin is available for use only on self-hosted (WordPress.ORG) websites.', ALLMT_TEXT ); ?></div>

                        <div class="question-2"><?php _e( 'Can I use this plugin on my language?', ALLMT_TEXT ); ?></div>
                        <div class="answer-2"><?php printf(
                                                            __( 'Yes. But If your language is not available then you can make one. This plugin is ready for translation. The<code>.pot</code>file is included and placed in the <code>languages</code> folder. Many of plugin users would be delighted if you shared your translation with the community. Just send the translation files (<code>*.po, *.mo</code>) to me at the %s and I will include the translation within the next plugin update.', ALLMT_TEXT ),
                                                                '<a href="mailto:arthurgareginyan@gmail.com?subject=All Meta Tags">arthurgareginyan@gmail.com</a>'
                                                          );
                                              ?></div>

                        <div class="question-3"><?php _e( 'How does it work?', ALLMT_TEXT ); ?></div>
                        <div class="answer-3"><?php _e( 'On the "Settings" tab, fill in the required fields, select the desired settings and click the "Save Changes" button. Enjoy the improved SEO of your website. It\'s that simple!', ALLMT_TEXT ); ?></div>

                        <div class="question-4"><?php _e( 'How much of description I can enter in the text field?', ALLMT_TEXT ); ?></div>
                        <div class="answer-4"><?php _e( 'I don\'t limit the number of characters, but most search engines use a maximum of 160 chars for the home description.', ALLMT_TEXT ); ?></div>

                        <div class="question-5"><?php _e( 'How much of keywords I can enter in the text field?', ALLMT_TEXT ); ?></div>
                        <div class="answer-5"><?php _e( 'I don\'t limit the number of characters.', ALLMT_TEXT ); ?></div>

                        <div class="question-6 question-red"><?php _e( 'I can\'t get verify my website. What am I doing wrong?', ALLMT_TEXT ); ?></div>
                        <div class="answer-6"><?php _e( 'The tag code which Google (or Bing, Yandex, Pinterest, Alexa, Norton, WOT, SpecificFeeds) gives you is confusing as you only have to paste in the serial key number/letters (<code>1234567890</code>) and not the whole tag (<code>&lt;meta name="google-site-verification" content=“1234567890” /&gt;</code>). So just paste that into the relevant field and you will see “Success” message appear within a few seconds.', ALLMT_TEXT ); ?></div>

                        <div class="question-7"><?php _e( 'What about compatibility with plugin "All in One SEO Pack"?', ALLMT_TEXT ); ?></div>
                        <div class="answer-7"><?php _e( 'To make these plugins compatible you need to stick to one simple rule: do not fill the same field in both plugins at once. Otherwise both plugins fulfill their work and you will get a duplicate actions, for example:', ALLMT_TEXT ); ?>
<pre><code>&lt;head&gt;
    ...
    &lt;meta name="copyright" content="Copyright (c) 2013-2017 Arthur Gareginyan. All Rights Reserved."&gt;
    ...
    &lt;meta name="copyright" content="Copyright 2017 Arthur Gareginyan. All Rights Reserved."&gt;
    ...
&lt;/head&gt;</code></pre>
                                              <?php _e( 'In the rest, the "All Meta Tags" and "All in One SEO Pack" is compatible.', ALLMT_TEXT ); ?></div>

                        <div class="question-8"><?php _e( 'Does this plugin requires any modification of the theme?', ALLMT_TEXT ); ?></div>
                        <div class="answer-8"><?php _e( 'Absolutely not. This plugin is configurable entirely from the plugin settings page.', ALLMT_TEXT ); ?></div>

                        <div class="question-9"><?php _e( 'Does this require any knowledge of HTML or CSS?', ALLMT_TEXT ); ?></div>
                        <div class="answer-9"><?php _e( 'Absolutely not. This plugin can be configured with no knowledge of HTML or CSS, using an easy-to-use plugin settings page.', ALLMT_TEXT ); ?></div>

                        <div class="question-10 question-red"><?php _e( 'It\'s not working. What could be wrong?', ALLMT_TEXT ); ?></div>
                        <div class="answer-10"><?php _e( 'As with every plugin, it\'s possible that things don\'t work. The most common reason for this is a web browser\'s cache. Every web browser stores a cache of the websites you visit (pages, images, and etc.) to reduce bandwidth usage and server load. This is called the browser\'s cache.​ Clearing your browser\'s cache may solve the problem.', ALLMT_TEXT ); ?><br><br>
                                               <?php _e( 'It\'s impossible to tell what could be wrong exactly, but if you post a support request in the plugin\'s support forum on WordPress.org, I\'d be happy to give it a look and try to help out. Please include as much information as possible, including a link to your website where the problem can be seen.', ALLMT_TEXT ); ?></div>

                        <div class="question-11 question-red"><?php _e( 'Where to report bug if found?', ALLMT_TEXT ); ?></div>
                        <div class="answer-11"><?php printf(
                                                            __( 'Please visit the %s Dedicated Plugin Page on GitHub %s and report.', ALLMT_TEXT ),
                                                                '<a href="https://github.com/ArthurGareginyan/all-meta-tags" target="_blank">',
                                                                '</a>'
                                                           );
                                               ?></div>

                        <div class="question-12"><?php _e( 'Where to share any ideas or suggestions to make the plugin better?', ALLMT_TEXT ); ?></div>
                        <div class="answer-12"><?php printf(
                                                            __( 'Any suggestions are very welcome! Please send me an email to %s arthurgareginyan@gmail.com %s. Thank you!', ALLMT_TEXT ),
                                                                '<a href="mailto:arthurgareginyan@gmail.com?subject=All Meta Tags">',
                                                                '</a>'
                                                           );
                                               ?></div>

                        <div class="question-13"><?php _e( 'I love this plugin! Can I help somehow?', ALLMT_TEXT ); ?></div>
                        <div class="answer-13"><?php printf(
                                                            __( 'Yes, any financial contributions are welcome! Just visit %s my website %s, click on the donate button, and thank you!', ALLMT_TEXT ),
                                                                '<a href="http://www.arthurgareginyan.com/donate.html" target="_blank">',
                                                                '</a>'
                                                           );
                                               ?></div>

                    </div>
                </div>
            </div>
            <!-- END-TAB 3 -->

            <!-- TAB 4 -->
            <div class="tab-page fade" id="tab-author">
                <div class="postbox">
                    <h3 class="title"><?php _e( 'Author', ALLMT_TEXT ); ?></h3>
                    <div class="inside include-tab-author"></div>
                </div>
            </div>
            <!-- END-TAB 4 -->

            <!-- TAB 5 -->
            <div class="tab-page fade" id="tab-support">
                <div class="postbox">
                    <h3 class="title"><?php _e( 'Support', ALLMT_TEXT ); ?></h3>
                    <div class="inside include-tab-support"></div>
                </div>
            </div>
            <!-- END-TAB 5 -->

            <!-- TAB 6 -->
            <div class="tab-page fade" id="tab-family">
                <div class="include-tab-family"></div>
            </div>
            <!-- END-TAB 6 -->

            <div class="additional-css"></div>

        </div>

    </div>
    <?php
}
