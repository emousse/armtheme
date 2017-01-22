<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="blog-content">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="blog-post" id="blog-post-<?php the_ID() ?>">
                        <?php the_post_thumbnail('custom-size'); ?>

                        <h2>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>
                        <span class="blog-post-time"><?php the_date(); ?></span>
                        <div class="blog-post-body">
                            <?php get_the_content(); ?>
                        </div>
                    </div>
                <?php endwhile; ?>

                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
