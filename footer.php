</main>
<footer id="fo">
    <div class="container">
        <div class="row">
            <div class="offset-md-1 col-md-10 cntx">
                <span>
                    <p>Samenwerken met jou</p>
                </span>
                <span>
                    <p>volgende project?</p>
                </span>
            </div>
            <div class="offset-md-2 col-md-9 cntc">
                <span class="s-t">
                    <p>Emailadres</p>
                </span>
                <span class="s-t">
                    <a href="mailto:info@emielkuipers.nl">info@emielkuipers.nl</a>
                </span>
            </div>
            <div class="col-md-12 d-flex soc">
                <div class="ml-auto">
                    <a href="mailto:info@emielkuipers.nl">info@emielkuipers.nl</a>
                    <a href="mailto:info@emielkuipers.nl">info@emielkuipers.nl</a>
                </div>
            </div>
        </div>
    </div>
</footer>

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