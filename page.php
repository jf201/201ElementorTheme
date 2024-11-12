<?php

declare(strict_types=1);

if (!defined('ABSPATH')) {
    exit();
}
?>

<?php get_header(); ?>
<?php while (have_posts()): ?>
    <?php the_post(); ?>
    <?php the_content(); ?>
<?php endwhile; ?>
<?php get_footer(); ?>

