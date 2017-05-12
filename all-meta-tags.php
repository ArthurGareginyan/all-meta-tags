<?php
/**
 * Plugin Name: All Meta Tags
 * Plugin URI: https://github.com/ArthurGareginyan/all-meta-tags
 * Description: Easily and safely add your custom Meta Tags to WordPress website's header.
 * Author: Arthur Gareginyan
 * Author URI: http://www.arthurgareginyan.com
 * Version: 4.0.1
 * License: GPL3
 * Text Domain: all-meta-tags
 * Domain Path: /languages/
 *
 * Copyright 2015-2017 Arthur Gareginyan (email : arthurgareginyan@gmail.com)
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
 *
 *               █████╗ ██████╗ ████████╗██╗  ██╗██╗   ██╗██████╗
 *              ██╔══██╗██╔══██╗╚══██╔══╝██║  ██║██║   ██║██╔══██╗
 *              ███████║██████╔╝   ██║   ███████║██║   ██║██████╔╝
 *              ██╔══██║██╔══██╗   ██║   ██╔══██║██║   ██║██╔══██╗
 *              ██║  ██║██║  ██║   ██║   ██║  ██║╚██████╔╝██║  ██║
 *              ╚═╝  ╚═╝╚═╝  ╚═╝   ╚═╝   ╚═╝  ╚═╝ ╚═════╝ ╚═╝  ╚═╝
 *
 *   ██████╗  █████╗ ██████╗ ███████╗ ██████╗ ██╗███╗   ██╗██╗   ██╗ █████╗ ███╗   ██╗
 *  ██╔════╝ ██╔══██╗██╔══██╗██╔════╝██╔════╝ ██║████╗  ██║╚██╗ ██╔╝██╔══██╗████╗  ██║
 *  ██║  ███╗███████║██████╔╝█████╗  ██║  ███╗██║██╔██╗ ██║ ╚████╔╝ ███████║██╔██╗ ██║
 *  ██║   ██║██╔══██║██╔══██╗██╔══╝  ██║   ██║██║██║╚██╗██║  ╚██╔╝  ██╔══██║██║╚██╗██║
 *  ╚██████╔╝██║  ██║██║  ██║███████╗╚██████╔╝██║██║ ╚████║   ██║   ██║  ██║██║ ╚████║
 *   ╚═════╝ ╚═╝  ╚═╝╚═╝  ╚═╝╚══════╝ ╚═════╝ ╚═╝╚═╝  ╚═══╝   ╚═╝   ╚═╝  ╚═╝╚═╝  ╚═══╝
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
 * @since 3.7
 */
defined('ALLMT_DIR') or define('ALLMT_DIR', dirname(plugin_basename(__FILE__)));
defined('ALLMT_BASE') or define('ALLMT_BASE', plugin_basename(__FILE__));
defined('ALLMT_URL') or define('ALLMT_URL', plugin_dir_url(__FILE__));
defined('ALLMT_PATH') or define('ALLMT_PATH', plugin_dir_path(__FILE__));
defined('ALLMT_TEXT') or define('ALLMT_TEXT', 'all-meta-tags');
defined('ALLMT_VERSION') or define('ALLMT_VERSION', '4.0.1');

/**
 * Load the plugin modules
 *
 * @since 4.0
 */
require_once( ALLMT_PATH . 'inc/php/core.php' );
require_once( ALLMT_PATH . 'inc/php/enqueue.php' );
require_once( ALLMT_PATH . 'inc/php/version.php' );
require_once( ALLMT_PATH . 'inc/php/functional.php' );
require_once( ALLMT_PATH . 'inc/php/page.php' );
require_once( ALLMT_PATH . 'inc/php/messages.php' );
require_once( ALLMT_PATH . 'inc/php/uninstall.php' );
