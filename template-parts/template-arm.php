<?php
/*
 * Template Name: Arm template
 */

get_header();

?>
<section class="container-fluid template-subheader">
    <div class="template-subheader-content container">
        <h1><?php the_title(); ?></h1>

        <div class="template-subheader-ariane">
    <?php
    if (function_exists('fil_ariane'))
        echo fil_ariane();
    ?>
</div>
</div>
</section>

<section class="template-arm-apropos">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="<?php bloginfo('template_url');?>/img/6.jpg" alt="" />
                <h2>Qui sommes nous?</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis officia rem voluptatibus. Architecto atque distinctio earum soluta velit. Consectetur et explicabo facere soluta veniam? Ea fugiat molestiae quaerat vel voluptatem.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis officia rem voluptatibus. Architecto atque distinctio earum soluta velit. Consectetur et explicabo facere soluta veniam? Ea fugiat molestiae quaerat vel voluptatem.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis officia rem voluptatibus. Architecto atque distinctio earum soluta velit. Consectetur et explicabo facere soluta veniam? Ea fugiat molestiae quaerat vel voluptatem.</p>
            </div>
            <div class="col-md-6">
                <img src="<?php bloginfo('template_url');?>/img/7.jpg" alt="" />
                <h2>Qui faisons nous?</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis officia rem voluptatibus. Architecto atque distinctio earum soluta velit. Consectetur et explicabo facere soluta veniam? Ea fugiat molestiae quaerat vel voluptatem.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis officia rem voluptatibus. Architecto atque distinctio earum soluta velit. Consectetur et explicabo facere soluta veniam? Ea fugiat molestiae quaerat vel voluptatem.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis officia rem voluptatibus. Architecto atque distinctio earum soluta velit. Consectetur et explicabo facere soluta veniam? Ea fugiat molestiae quaerat vel voluptatem.</p>
            </div>
        </div>
    </div>
</section>

<div class="background-fixed">
    <div class="container">
        <div class="background-fixed-title">
            <?php the_title(); ?>
        </div>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <div class="background-fixed-body">
                    <?php
                    the_content();
                    ?>
                </div>
        <?php endwhile; ?>

        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>
