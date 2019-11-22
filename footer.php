</main>
<script>
    jQuery(document).ready(function() {
        window.setTimeout(function() {
            jQuery('.lxs').addClass('ready');
            jQuery('nav').addClass('actv');
            jQuery('.int').addClass('acv');
            jQuery('.int__p').addClass('int__a');
        }, <?php the_field('duur_loader', 'option'); ?>);
    });
</script>
<?php wp_footer(); ?>
</body>

</html>