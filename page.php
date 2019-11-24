<?php
get_header(); ?>

<div class="lxp">
    <div class="ba slidein">
    </div>
</div>


<script>
    jQuery(document).ready(function() {
        window.setTimeout(function() {
            jQuery('.lxs').addClass('ready');
            jQuery('nav').addClass('actvp');
            jQuery('.int').addClass('acv');
            jQuery('.int__p').addClass('int__a');
        }, 0)
    });
</script>
<?php get_footer(); ?>