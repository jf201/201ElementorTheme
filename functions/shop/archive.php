<?php

declare(strict_types=1);

if (!defined("ABSPATH")) {
    exit();
}

add_action("woocommerce_before_main_content", "kumo_shop_wrapper", 0);

function kumo_shop_wrapper()
{
    ?>
    <div class="kumo__shop">
        <div class="kumo__shop__container">
    <?php
}

add_filter("woocommerce_show_page_title", "__return_false");

add_action(
    "woocommerce_before_main_content",
    "custom_woocommerce_archive_header_image",
    5,
);

function custom_woocommerce_archive_header_image()
{
    if (!is_shop() && !is_product_category()) {
        return;
    }

    $background_image = "";

    if (is_product_category()) {
        $term = get_queried_object();
        $image_id = get_field(
            "category_header_image",
            "product_cat_" . $term->term_id,
        )["ID"];

        if ($image_id) {
            $background_image = wp_get_attachment_image_url($image_id, "full");
        }

        $title = $term->name;
    } else {
        // Shop page
        $image_id = get_field("shop_header_image", "option")["ID"];

        if ($image_id) {
            $background_image = wp_get_attachment_image_url($image_id, "full");
        }

        $title = "MALL";
    }

    echo '<div class="theme-shop-header" style="background-image: url(' .
        esc_url($background_image) .
        ');">';
    echo '<div class="theme-shop-header-overlay">';
    echo '<h1 class="theme-shop-header__title">' . esc_html($title) . "</h1>";
    echo "</div></div>";
}

add_action("woocommerce_after_main_content", "kumo_shop_close", 99);

function kumo_shop_close()
{
    ?>
        </div>
    </div>
    <?php
}
