<?php
/*
 * Template Name: Contact template
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

<div class="background-fixed">
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
</div>

<?php get_footer(); ?>
