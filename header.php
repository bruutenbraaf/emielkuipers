<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Bruut en Braaf">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <title><?php wp_title('&raquo;', 'true', 'right'); ?><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-WC73G8D');
    </script>
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WC73G8D" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
</head>
</style>

<body <?php body_class(); ?>>
    <div id="custom-pointer">
        <span></span>
    </div>
    <nav>
        <div class="container">
            <div class="row d-flex align-items-center">
                <?php $brading = get_field('brading', 'option'); ?>
                <?php if ($brading) { ?>
                    <a class="branding" href="<?php echo get_home_url(); ?>">
                        <img src="<?php echo $brading['url']; ?>" alt="<?php echo $brading['alt']; ?>" />
                    </a>
                <?php } ?>
                <div class="main_nav ml-auto">
                    <?php wp_nav_menu(array('theme_location' => 'main_menu')); ?>
                </div>
            </div>
        </div>
    </nav>
    <main>