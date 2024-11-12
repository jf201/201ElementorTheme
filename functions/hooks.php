<?php

declare(strict_types=1);

use ElementorStarterTNO\Elementor\ElementorThemeWidgets;

if (!defined('ABSPATH')) {
    exit();
}

add_action('init', fn() => ElementorThemeWidgets::instance());
