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

<div class="container">
    <div class="row">
        <div class="offset-md-1 col-md-10 int">
            <span>
                <p>Mijn naam is emiel,</p>
            </span>
            <span>
                <p>ik ontwerp <b>user needs</b></p>
            </span>
            <span>
                <p>en hou van Pindakaas.</p>
            </span>
        </div>
        <div class="offset-md-2 col-md-5 int__p">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ante odio at sit tempus sed fermentum. Sit enim nulla fermentum vitae tempor cursus. Erat commodo, sed in viverra dictumst. Est nulla adipiscing pharetra, laoreet rhoncus, morbi tristique</p>
        </div>
    </div>
</div>

<?php get_footer(); ?>