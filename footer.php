</main>
<script>
    jQuery(document).ready(function() {
        window.setTimeout(function() {
            jQuery('.lxs').addClass('ready');
        }, <?php the_field('duur_loader', 'option'); ?>);
    });
</script>
<script>
    jQuery(document).ready(function() {
        window.setTimeout(function() {
            jQuery('nav').addClass('actv');
        }, <?php the_field('duur_loader', 'option'); ?>);
    });
</script>
<?php wp_footer(); ?>
</body>

</html>