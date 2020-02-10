</main>
<footer id="fo">
    <div class="container">
        <div class="row">
            <?php if (have_rows('footer', 'option')) : ?>
                <?php while (have_rows('footer', 'option')) : the_row(); ?>
                    <div class="offset-md-1 col-md-10 cntx">
                        <?php if (have_rows('titels')) : ?>
                            <?php while (have_rows('titels')) : the_row(); ?>
                                <span>
                                    <p><?php the_sub_field('titel'); ?></p>
                                </span>
                            <?php endwhile; ?>
                        <?php endif; ?>
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
                <?php endwhile; ?>
            <?php endif; ?>
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

<div class="cursor-dot-outline"></div>
<div class="cursor-dot"></div>

<div class="lxss">
    <div class="br">
    </div>
</div>

<figure id="mouse-pointer"></figure>

<?php wp_footer(); ?>
</body>

</html>