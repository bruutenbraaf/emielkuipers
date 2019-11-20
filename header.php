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
    <nav>
        <div class="container">
            <div class="row d-flex align-items-center">
                <?php $brading = get_field('brading', 'option'); ?>
                <?php if ($brading) { ?>
                    <a class="branding p-4" href="<?php echo get_home_url(); ?>">
                        <img src="<?php echo $brading['url']; ?>" alt="<?php echo $brading['alt']; ?>" />
                    </a>
                <?php } ?>
                <div class="main_nav ml-auto p-4">
                    <?php wp_nav_menu(array('theme_location' => 'main_menu')); ?>
                </div>
            </div>
        </div>
    </nav>
    <main>