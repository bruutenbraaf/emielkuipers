<?php
get_header(); ?>

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

<?php if (have_rows('intro')) : ?>
    <?php while (have_rows('intro')) : the_row(); ?>
        <section class="in_h">
            <div class="container">
                <div class="row">
                    <?php if (have_rows('intro_titels')) : ?>
                        <div class="offset-md-1 col-md-10 int">
                            <?php while (have_rows('intro_titels')) : the_row(); ?>
                                <span>
                                    <p><?php the_sub_field('regel'); ?></p>
                                </span>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                    <div class="offset-md-2 col-md-8 int__p">
                        <?php the_sub_field( 'intro_tekst' ); ?>
                    </div>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>