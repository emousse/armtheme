<?php
/*
 * Template Name: Services template
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

<section class="template-accueil-links">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <img src="<?php bloginfo('template_url') ?>/img/icons/tools_3.png" alt="">
                <h2><a href="<?php bloginfo('url'); ?>/services-prestations/menuiserie-ossature-bois/">Menuiserie et
                        ossature bois</a></h2>
            </div>
            <div class="col-md-3 col-sm-6">
                <img src="<?php bloginfo('template_url') ?>/img/icons/tools_2.png" alt="">
                <h2><a href="<?php bloginfo('url'); ?>/services-prestations/agencement/">Agencement</a></h2>
            </div>
            <div class="col-md-3 col-sm-6">
                <img src="<?php bloginfo('template_url') ?>/img/icons/tools_5.png" alt="">
                <h2><a href="<?php bloginfo('url'); ?>/services-prestations/peinture">Peinture</a></h2>
            </div>
            <div class="col-md-3 col-sm-6">
                <img src="<?php bloginfo('template_url') ?>/img/icons/tools_6.png" alt="">
                <h2><a href="<?php bloginfo('url'); ?>/services-prestations/renovation/">Rénovation</a></h2>
            </div>
        </div>
    </div>
</section>

<section class="background-fixed">
    <div class="container">
        <div class="background-fixed-title">
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
</section>

<?php get_footer(); ?>
