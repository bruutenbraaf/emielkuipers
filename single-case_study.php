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
                    <div class="offset-md-2 col-md-5 int__p">
                        <?php the_sub_field('intro_tekst'); ?>
                    </div>
                    <div class="offset-md-1 col-md-2 inf">
                        <h4><?php _e('Cliënt', 'emiel'); ?></h4>
                        <span><?php the_title(); ?></span>
                        <h4><?php _e('Rol', 'emiel'); ?></h4>
                        <span>
                            <?php
                            $rol_array = get_field('rol');
                            if ($rol_array) :
                                foreach ($rol_array as $rol_item) : ?>
                                    <span class="r-item"><?php echo $rol_item; ?></span>
                            <?php endforeach;
                            endif;
                            ?>
                        </span>
                    </div>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>

<?php if (have_rows('content_sections')) : ?>
    <?php while (have_rows('content_sections')) : the_row(); ?>
        <?php if (get_row_layout() == 'afbeelding') : ?>
            <?php $upload_afbeelding = get_sub_field('upload_afbeelding'); ?>
            <?php if ($upload_afbeelding) { ?>
                <div class="container" id="im">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="f_img">
                                <div class="th_img" style="background-image:url(<?php if ($upload_afbeelding) { ?><?php echo $upload_afbeelding['url']; ?><?php } else { ?> <?php echo $fallback['url']; ?><?php } ?>);">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        <?php elseif (get_row_layout() == 'full_width_content') : ?>
            <div class="container">
                <div class="row">
                    <div class="offset-md-2 col-md-8 f_p">
                        <?php the_sub_field('content_wysiwyg'); ?>
                    </div>
                </div>
            </div>
        <?php elseif (get_row_layout() == 'volle_breedte_tekst_met_titel') : ?>
            <div class="container fwc">
                <div class="row">
                    <div class="offset-md-2 col-md-8 f_p">
                        <h2><?php the_sub_field('titel'); ?></h2>
                        <?php the_sub_field('content'); ?>
                    </div>
                </div>
            </div>
        <?php elseif (get_row_layout() == 'cv') : ?>
            <div class="container cv">
                <div class="row">
                    <?php if (have_rows('linke_kant')) : ?>
                        <div class="col-md-3 offset-md-2">
                            <?php while (have_rows('linke_kant')) : the_row(); ?>
                                <h3><?php the_sub_field('hoofd_titel_bijv_cv_'); ?></h3>
                                <?php if (have_rows('eigenschap')) : ?>
                                    <?php while (have_rows('eigenschap')) : the_row(); ?>
                                        <h4><?php the_sub_field('titel_eigenschao'); ?></h4>
                                        <?php the_sub_field('omschrijving'); ?>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                                <?php $voeg_knop_toe = get_sub_field('voeg_knop_toe'); ?>
                                <?php if ($voeg_knop_toe) { ?>
                                    <a href="<?php echo $voeg_knop_toe['url']; ?>" target="<?php echo $voeg_knop_toe['target']; ?>"><?php echo $voeg_knop_toe['title']; ?></a>
                                <?php } ?>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                    <?php if (have_rows('rechte_kant')) : ?>
                        <div class="col-md-3 offset-md-1">
                            <?php while (have_rows('rechte_kant')) : the_row(); ?>
                                <h3><?php the_sub_field('hoofd_titel_bijv_cv_'); ?></h3>
                                <?php if (have_rows('eigenschap')) : ?>
                                    <?php while (have_rows('eigenschap')) : the_row(); ?>
                                        <h4><?php the_sub_field('titel_eigenschao'); ?></h4>
                                        <?php the_sub_field('omschrijving'); ?>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                                <?php $voeg_knop_toe = get_sub_field('voeg_knop_toe'); ?>
                                <?php if ($voeg_knop_toe) { ?>
                                    <a href="<?php echo $voeg_knop_toe['url']; ?>" target="<?php echo $voeg_knop_toe['target']; ?>"><?php echo $voeg_knop_toe['title']; ?></a>
                                <?php } ?>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        <?php elseif (get_row_layout() == 'carrousel') : ?>
            <section class="crs">
                <div class="container cr">
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <div class="carrousel">
                                <?php $afbeeldingen_images = get_sub_field('afbeeldingen'); ?>
                                <?php if ($afbeeldingen_images) :  ?>
                                    <?php foreach ($afbeeldingen_images as $afbeeldingen_image) : ?>
                                        <div class="slide">
                                            <div class="img" style="background-image:url(<?php echo $afbeeldingen_image['url']; ?>);"></div>
                                        </div>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="nxt">
                        <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.666748 11.8334L6.50008 6.00002L0.666748 0.166687V11.8334Z" fill="#FFFDFB" />
                        </svg>
                    </div>
                </div>
            </section>
            <script>
                jQuery(document).ready(function() {
                    jQuery('.carrousel').slick({
                        infinite: true,
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        autoPlay: false,
                        dots: false,
                        arrows: true,
                        prevArrow: jQuery('.prv'),
                        nextArrow: jQuery('.nxt'),
                        focusOnSelect: true,
                    });
                });
            </script>
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>




<section class="proj_p">
    <div class="container">
        <div class="row">
            <div class="offset-md-2 col-md-8">
                <h2><?php _e('Wellicht ook interessant', 'emiel'); ?></h2>
            </div>
            <?php $loop = new WP_Query(array(
                'post_type' => 'case_study',
                'posts_per_page' => 1,
                'order' => 'RAND'
            )); ?>
            <?php if ($loop->have_posts()) : ?>
                <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                    <?php $thumb = get_the_post_thumbnail_url($post); ?>
                    <div class="h__proj_p offset-md-1 col-md-10">
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
        </div>
    </div>
</section>

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