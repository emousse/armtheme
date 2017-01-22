<?php
/*
 * Template Name: Work template
 */

get_header();

?>

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
