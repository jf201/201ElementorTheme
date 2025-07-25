<?php

declare(strict_types=1);

if (!defined("ABSPATH")) {
    exit();
}

/**
 * Define Constants
 */
define("THEME_VERSION", "1.0.0");
define("THEME_DIR", trailingslashit(get_stylesheet_directory()));
define("THEME_URI", trailingslashit(esc_url(get_stylesheet_directory_uri())));
define("API_BASE", "api");
define("TEXTDOMAIN", "kumo_mall");

function themeSetup()
{
    register_nav_menus([
        "header_menu_primary" => "Header Menu Primary",
        "header_menu_mega" => "Header Menu Mega",
        "footer_menu_1" => "Footer Menu 1",
        "footer_menu_2" => "Footer Menu 2",
    ]);

    require_once THEME_DIR . "/core.php";
}

add_action("after_setup_theme", "themeSetup");

/**
 * Remove Wordpress info from  head
 */
remove_action("wp_head", "wp_generator");

/**
 * Disable plugin auto-update email notification
 */
add_filter("auto_plugin_update_send_email", "__return_false");

/**
 * Disable theme auto-update email notification
 */
add_filter("auto_theme_update_send_email", "__return_false");

/**
 * Enable SVG uploads
 */

function add_svg_support($mimes)
{
    // Add SVG mime type
    $mimes["svg"] = "image/svg+xml";
    return $mimes;
}
add_filter("upload_mimes", "add_svg_support");

/**
 * Custom Classes
 */
require_once THEME_DIR . "vendor/autoload.php";

/**
 * General Functions for the theme
 */
require_once THEME_DIR . "functions/helpers.php";
require_once THEME_DIR . "functions/enques.php";
require_once THEME_DIR . "functions/hooks.php";
require_once THEME_DIR . "functions/shortcodes.php";
require_once THEME_DIR . "functions/api.php";
require_once THEME_DIR . "functions/cronjob.php";
require_once THEME_DIR . "functions/shop.php";

function allow_svg_uploads_for_admins($mimes)
{
    if (current_user_can("administrator")) {
        $mimes["svg"] = "image/svg+xml";
    }
    return $mimes;
}
add_filter("upload_mimes", "allow_svg_uploads_for_admins");
