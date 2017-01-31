<?php
/*
 * Template Name: Accueil template
 */

get_header();

?>

<!-- Flickity HTML init -->
<div class="carousel"
     data-flickity='{ "cellAlign": "left"}'>
    <div class="carousel-cell" style="background-image: url('<?php bloginfo('template_url'); ?>/img/1.jpg')">
        <div class="carousel-content container">
            <div class="col-md-12"><div class="carousel-title">
                    <h2>HELLO</h2>
                </div>
                <div class="carousel-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                </div></div>
        </div>
    </div>
    <div class="carousel-cell" style="background-image: url('<?php bloginfo('template_url'); ?>/img/2.jpg')">
    </div>
    <div class="carousel-cell" style="background-image: url('<?php bloginfo('template_url'); ?>/img/3.jpg')">
    </div>
    <div class="carousel-cell" style="background-image: url('<?php bloginfo('template_url'); ?>/img/4.jpg')"></div>
    <div class="carousel-cell" style="background-image: url('<?php bloginfo('template_url'); ?>/img/5.jpg')"></div>
</div>

<section class="banner">
    <div class="container">
        <h2>
            TOUT POUR LE BOIS

        </h2>
        <a href="#" class="blue-btn">VENEZ VOIR</a>
    </div>
</section>

<div class="background-fixed">
    <div class="container">
        <div class="background-fixed-title">
            HELLO
        </div>
        <div class="background-fixed-body">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, ratione, voluptas. Aliquid amet debitis
            excepturi expedita fuga inventore iure quibusdam repellendus sint unde. Debitis dolorum nulla sunt tempore
            voluptas voluptatum!
        </div>
    </div>
</div>

<?php get_footer(); ?>