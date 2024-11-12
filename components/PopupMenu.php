<?php

declare(strict_types=1);

if (!defined('ABSPATH')) {
    exit();
}

$image_left = get_field('left_image', 'option');
$contact_info = get_field('contact_info', 'option');
$image_middle = get_field('middle_image', 'option');
?>

<div class="component-popup-menu" data-component="popup-menu">
    <div class="component-popup-menu-open-button">
        <?= getComponent('icons/Bars3') ?> <!-- Burger icon -->
    </div>

    <!-- Full-page popup menu -->
    <div class="component-popup-menu-overlay">
        <div class="component-popup-menu-content">
            <!-- First column: Image and text aligned to the bottom -->
            <div class="popup-column popup-column-one">

                <?php if ($image_left) { ?>
                    <img src="<?= esc_url($image_left['url']) ?>" alt="<?= esc_attr($image_left['alt']); ?>">
                <?php } ?>
                <?php if ($contact_info) { ?>
                    <span>
                        <?= $contact_info ?>
                    </span>
                <?php } ?>
            </div>

            <!-- Second column: Center-aligned image -->
            <div class="popup-column popup-column-two">
                <?php if ($image_middle) { ?>
                    <img src="<?= esc_url($image_middle['url']) ?>" alt="<?= esc_attr($image_middle['alt']); ?>">
                <?php } ?>
            </div>

            <!-- Third column: WP Nav, aligned to the top -->
            <div class="popup-column popup-column-three">
                <nav class="component-popup-menu-navigation">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'header_menu', // Define the menu location in functions.php
                        'container'      => false,
                        'menu_class'     => 'component-popup-menu-items',
                    ));
                    ?>
                </nav>
            </div>
        </div>
    </div>
</div>
