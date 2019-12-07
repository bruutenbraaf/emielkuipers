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
                                <div class="th_img" style="background-image:url(<?php if ($upload_afbeelding) { ?><?php echo $upload_afbeelding['sizes']['large']; ?><?php } else { ?> <?php echo $fallback['url']; ?><?php } ?>);">
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
        <?php endif; ?>
    <?php endwhile; ?>
<?php else : ?>
    <?php // no layouts found 
        ?>
<?php endif; ?>




<div class="lxp">
    <div class="ba slidein">
    </div>
</div>


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