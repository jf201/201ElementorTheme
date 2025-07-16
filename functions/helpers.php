<?php

declare(strict_types=1);

if (!defined("ABSPATH")) {
    exit();
}

function hello_child_theme_setup()
{
    // Other theme supports
    add_theme_support("custom-logo", [
        "height" => 100,
        "width" => 400,
        "flex-height" => true,
        "flex-width" => true,
        "header-text" => ["site-title", "site-description"],
    ]);
}
add_action("after_setup_theme", "hello_child_theme_setup");
