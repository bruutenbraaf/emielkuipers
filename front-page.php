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
                'order' => 'DESC',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'onderwerp',
                        'field' => 'id',
                        'terms' => 4,
                    ),
                ),
            )); ?>
            <?php if ($loop->have_posts()) : ?>
                <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                    <?php $thumb = get_the_post_thumbnail_url($post); ?>
                    <div class="h__proj offset-md-1 col-md-10">
                        <a href="<?php the_permalink() ?>">
                            <div class="im">
                                <div class="im_g" style="background-image:url(<?php if ($thumb) { ?><?php echo get_the_post_thumbnail_url($post); ?> <?php } else { ?> <?php echo $fallback['url']; ?><?php } ?>);">
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
            <?php $loop = new WP_Query(array(
                'post_type' => 'case_study',
                'posts_per_page' => 6,
                'order' => 'DESC',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'onderwerp',
                        'field' => 'id',
                        'terms' => 3,
                    ),
                ),
            )); ?>
            <?php if ($loop->have_posts()) : ?>
                <div class="col-xl-10 offset-xl-1 pr-ov">
                    <h3><?php _e('Overige.', 'emiel'); ?></h3>
                </div>
                <?php $count = 0; ?>
                <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                    <?php $count++; ?>
                    <div class="<?php if ($count % 2) { ?>offset-xl-1<?php } ?> col-xl-5 p-item">
                        <a href="<?php the_permalink(); ?>" class="inner">
                            <b><?php the_title(); ?>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M17.7071 6.29289C18.0976 6.68342 18.0976 7.31658 17.7071 7.70711L7.70711 17.7071C7.31658 18.0976 6.68342 18.0976 6.29289 17.7071C5.90237 17.3166 5.90237 16.6834 6.29289 16.2929L16.2929 6.29289C16.6834 5.90237 17.3166 5.90237 17.7071 6.29289Z" fill="#2E2B39" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6 7C6 6.44772 6.44772 6 7 6H17C17.5523 6 18 6.44772 18 7V17C18 17.5523 17.5523 18 17 18C16.4477 18 16 17.5523 16 17V8H7C6.44772 8 6 7.55228 6 7Z" fill="#2E2B39" />
                                </svg>
                            </b>
                            <?php
                            $rol_array = get_field('rol');
                            if ($rol_array) :
                                foreach ($rol_array as $rol_item) : ?>
                                    <span class="r-item"><?php echo $rol_item; ?></span>
                            <?php endforeach;
                            endif;
                            ?>
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
        jQuery('.lxs').addClass('ready');
        jQuery('nav').addClass('actv');
        jQuery('.int').addClass('acv');
        jQuery('.int__p').addClass('int__a');
    });
</script>
<?php get_footer(); ?>