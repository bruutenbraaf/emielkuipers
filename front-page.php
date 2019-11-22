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
                    <div class="offset-md-2 col-md-7 int__p">
                        <?php the_sub_field('intro_tekst'); ?>
                    </div>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>

<section class="proj">
    <div class="container">
        <div class="row">
            <?php $loop = new WP_Query(array(
                'post_type' => 'case_study',
                'posts_per_page' => 2,
                'order' => 'DESC'
            )); ?>
            <?php if ($loop->have_posts()) : ?>
                <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                    <?php $thumb = get_the_post_thumbnail_url($post, 'large'); ?>
                    <div id="hero-block"></div>
                    <div class="h__proj">
                        <a href="<?php the_permalink() ?>">
                            <div class="im">
                                <div class="im_g" style="background-image:url(<?php if ($thumb) { ?><?php echo get_the_post_thumbnail_url($post, 'large'); ?> <?php } else { ?> <?php echo $fallback['url']; ?><?php } ?>);">
                                </div>
                            </div>
                            <div class="inf">
                                <span><?php _e('case study', 'emiel'); ?></span>
                                <h3><?php the_title(); ?></h3>
                            </div>
                        </a>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
</section>

<?php get_footer(); ?>