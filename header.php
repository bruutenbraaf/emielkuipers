<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Bruut en Braaf">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <title><?php wp_title('&raquo;', 'true', 'right'); ?><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <div class="lxs">
        <div class="in">
            <?php if (have_rows('opsomming_load', 'option')) : ?>
                <?php while (have_rows('opsomming_load', 'option')) : the_row(); ?>
                    <span><?php the_sub_field('content'); ?></span>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div class="ba slidein">
        </div>
    </div>
    <main>