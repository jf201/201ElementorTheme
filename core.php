<?php

declare(strict_types=1);

if (!defined('ABSPATH')) {
    exit();
}

function getComponent($name, $props = [])
{
    ob_start();
    get_template_part('/components/' . $name, null, $props);
    $output = ob_get_clean();
    return $output;
}

function setupComponent($args, $requiredProps = [])
{
    if (!empty($requiredProps)) {
        foreach ($requiredProps as $requiredProp) {
            if (!array_key_exists($requiredProp, $args)) {
                throw new Exception('<strong>Error</strong>: missing Prop ' . $requiredProp);
                die();
            }
        }
    }
    return $args;
}

function useImage($imageName)
{
    return esc_url(THEME_URI . 'dist/images/' . $imageName);
}
