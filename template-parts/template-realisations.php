<?php
/*
 * Template Name: Réalisations template
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

    <section class="projects">
        <div class="container">
            <div class="projects-title">
                <ul class="filters-button-group">
                    <li data-filter
                    "*">Tous les projets</li>
                    <li data-filter=".parquet">Parquets</li>
                    <li data-filter=".cuisine">Cuisine</li>
                    <li data-filter=".renovation">Renovation</li>
                </ul>
            </div>
            <div class="project-grids">
                    <div class="col-md-4 projects-item parquet">
                        <img src="<?php bloginfo('template_url'); ?>/img/7.jpg" alt="">
                        <h3>Parquets</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur cum delectus deleniti dicta fugit iusto nostrum optio placeat quo tenetur! Corporis, deserunt doloremque iure labore necessitatibus possimus quis. Assumenda, vero?</p>
                    </div>
                    <div class="col-md-4 projects-item parquet">
                        <img src="<?php bloginfo('template_url'); ?>/img/7.jpg" alt="">
                        <h3>Parquets</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur cum delectus deleniti dicta fugit iusto nostrum optio placeat quo tenetur! Corporis, deserunt doloremque iure labore necessitatibus possimus quis. Assumenda, vero?</p>
                    </div>
                    <div class="col-md-4 projects-item parquet">
                        <img src="<?php bloginfo('template_url'); ?>/img/7.jpg" alt="">
                        <h3>Parquets</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur cum delectus deleniti dicta fugit iusto nostrum optio placeat quo tenetur! Corporis, deserunt doloremque iure labore necessitatibus possimus quis. Assumenda, vero?</p>
                    </div>
                    <div class="col-md-4 projects-item cuisine">
                        <img src="<?php bloginfo('template_url'); ?>/img/6.jpg" alt="">
                        <h3>Cuisine</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur cum delectus deleniti dicta fugit iusto nostrum optio placeat quo tenetur! Corporis, deserunt doloremque iure labore necessitatibus possimus quis. Assumenda, vero?</p>
                    </div>
                    <div class="col-md-4 projects-item cuisine">
                        <img src="<?php bloginfo('template_url'); ?>/img/6.jpg" alt="">
                        <h3>Cuisine</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur cum delectus deleniti dicta fugit iusto nostrum optio placeat quo tenetur! Corporis, deserunt doloremque iure labore necessitatibus possimus quis. Assumenda, vero?</p>
                    </div>
                    <div class="col-md-4 projects-item cuisine">
                        <img src="<?php bloginfo('template_url'); ?>/img/6.jpg" alt="">
                        <h3>Cuisine</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur cum delectus deleniti dicta fugit iusto nostrum optio placeat quo tenetur! Corporis, deserunt doloremque iure labore necessitatibus possimus quis. Assumenda, vero?</p>
                    </div>
                    <div class="col-md-4 projects-item renovation">
                        <img src="<?php bloginfo('template_url'); ?>/img/5.jpg" alt="">
                        <h3>Renovation</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur cum delectus deleniti dicta fugit iusto nostrum optio placeat quo tenetur! Corporis, deserunt doloremque iure labore necessitatibus possimus quis. Assumenda, vero?</p>
                    </div>
                    <div class="col-md-4 projects-item renovation">
                        <img src="<?php bloginfo('template_url'); ?>/img/5.jpg" alt="">
                        <h3>Renovation</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur cum delectus deleniti dicta fugit iusto nostrum optio placeat quo tenetur! Corporis, deserunt doloremque iure labore necessitatibus possimus quis. Assumenda, vero?</p>
                    </div>
                    <div class="col-md-4 projects-item renovation">
                        <img src="<?php bloginfo('template_url'); ?>/img/5.jpg" alt="">
                        <h3>Renovation</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur cum delectus deleniti dicta fugit iusto nostrum optio placeat quo tenetur! Corporis, deserunt doloremque iure labore necessitatibus possimus quis. Assumenda, vero?</p>
                    </div>
            </div>
        </div>
    </section>

    <div class="background-fixed">
        <div class="container">
            <div class="background-fixed-title">
                HELLO
            </div>
            <div class="background-fixed-body">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, ratione, voluptas. Aliquid amet debitis
                excepturi expedita fuga inventore iure quibusdam repellendus sint unde. Debitis dolorum nulla sunt
                tempore
                voluptas voluptatum!
            </div>
        </div>
    </div>

<?php get_footer(); ?>