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
                    <?php $e_mailadres = get_field('e-mailadres', 'option'); ?>
                    <?php if ($e_mailadres) { ?>
                        <a href="<?php echo $e_mailadres['url']; ?>" target="<?php echo $e_mailadres['target']; ?>"><?php echo $e_mailadres['title']; ?></a>
                    <?php } ?>
                </span>
            </div>
            <?php if (have_rows('socials', 'option')) : ?>
                <div class="col-md-12 d-flex soc">
                    <div class="ml-auto">
                        <?php while (have_rows('socials', 'option')) : the_row(); ?>
                            <?php $social = get_sub_field('social'); ?>
                            <?php if ($social) { ?>
                                <a href="<?php echo $social['url']; ?>" target="<?php echo $social['target']; ?>"><?php echo $social['title']; ?></a>
                            <?php } ?>
                        <?php endwhile; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</footer>

<div class="lxss">
    <div class="br">
    </div>
</div>
<?php wp_footer(); ?>
</body>

</html>