<?php

declare(strict_types=1);

namespace KumoMall\Elementor;

use KumoMall\Elementor\Widgets\ThemeExampleWidget;

if (!defined("ABSPATH")) {
    exit();
}

final class ElementorThemeWidgets
{
    private static $_instance = null;

    public static function instance()
    {
        if (is_null(self::$_instance)) {
            self::$_instance = new self();
        }

        return self::$_instance;
    }

    private function __construct()
    {
        add_action("elementor/widgets/register", [$this, "initWidgets"]);
    }

    public function initWidgets($widgetsManager)
    {
        $widgets = [
            // new ThemeExampleWidget()
        ];

        foreach ($widgets as $widget) {
            $widgetsManager->register($widget);
        }
    }
}
