<?php

declare(strict_types=1);

if (!defined('ABSPATH')) {
    exit();
}

function registerAssets()
{
    wp_enqueue_style('main-css', THEME_URI . 'dist/style.css', [], THEME_VERSION);
    wp_enqueue_script('main-js', THEME_URI . 'dist/main.js', [], THEME_VERSION, true);
}

add_action('wp_enqueue_scripts', 'registerAssets');
