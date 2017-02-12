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

<section class="template-contact">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Nous situer</h2>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d41667.29217247846!2d4.020069304093746!3d49.25354580792248!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e974334a533b09%3A0x40a5fb99a3b45c0!2sReims!5e0!3m2!1sfr!2sfr!4v1486902091603"
                    width="100%" height="80%" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="col-md-6">
                <h2>N'hésitez pas à nous contacter</h2>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php
                    the_content();
                    ?>
                <?php endwhile; ?>

                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
