<?php

declare(strict_types=1);

use KumoMall\Elementor\ElementorThemeWidgets;

if (!defined("ABSPATH")) {
    exit();
}

add_action("init", fn() => ElementorThemeWidgets::instance());
