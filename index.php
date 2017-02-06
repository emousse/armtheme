<?php get_header(); ?>

<?php if(is_home()) : ?>
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
<?php endif; ?>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="blog-content">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <article class="blog-post" id="blog-post-<?php the_ID() ?>">
                        <?php the_post_thumbnail('custom-size'); ?>

                        <h2>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>
                        <span class="blog-post-time"><?php the_date(); ?></span>
                        <div class="blog-post-body">
                            <?php the_excerpt(); ?>
                        </div>
                        <div class="blog-post-more">
                            <a href="<?php the_permalink(); ?>">Lire la suite</a>
                        </div>
                    </article>
                <?php endwhile; ?>

                <?php else: ?>

                    <!-- article -->
                    <article>
                        <h2>Désolé, il n'y a rien à afficher!></h2>
                    </article>
                    <!-- /article -->

                <?php endif; ?>
            </div>
        </div>
        <div class="col-md-4">
            <?php get_sidebar(); ?>
        </div>
    </div>

</div>

<?php get_footer(); ?>
