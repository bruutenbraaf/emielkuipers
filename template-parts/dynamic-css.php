<?php
$absolute_path = explode('wp-content', $_SERVER['SCRIPT_FILENAME']);
$wp_load = $absolute_path[0] . 'wp-load.php';
require_once($wp_load);


header('Content-type: text/css');
header('Cache-control: must-revalidate');
?>

<!-- @media (min-width: 1024px) {
    .h__vi:first-child:before {
        animation-delay: calc(<?php echo get_field('duur_loader', 'option'); ?>ms + 1000ms);
    }
    .h__vi:first-child:after {
        animation-delay: calc(<?php echo get_field('duur_loader', 'option'); ?>ms + 1000ms);
    }
    .im_g {
        animation-delay: calc(<?php echo get_field('duur_loader', 'option'); ?>ms + 1000ms);
    }
} -->