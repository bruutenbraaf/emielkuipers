<?php
get_header(); ?>
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
                        <?php $lees_meer_knop = get_sub_field('lees_meer_knop'); ?>
                        <?php if ($lees_meer_knop) { ?>
                            <a class="more" href="<?php echo $lees_meer_knop['url']; ?>" target="<?php echo $lees_meer_knop['target']; ?>"><span><?php echo $lees_meer_knop['title']; ?></span></a>
                        <?php } ?>
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
                    <div class="h__proj offset-md-1 col-md-10">
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
    </div>
</section>
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
<?php get_footer(); ?>