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

add_action("woocommerce_after_main_content", "kumo_shop_close", 99);

function kumo_shop_close()
{
    ?>
        </div>
    </div>
    <?php
}
