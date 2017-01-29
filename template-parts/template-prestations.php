<?php
/*
 * Template Name: Prestations template
 */

get_header();

?>
<div class="template-subheader container">
    <h1><?php the_title(); ?></h1>

    <div class="template-subheader-ariane">
        <?php
        if (function_exists('fil_ariane'))
            echo fil_ariane();
        ?>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="template-menu-prestations">
                <!-- Récupérer le menu des préstations. -->

                <?php wp_list_pages(array(
                    'child_of' => 4,
                    'title_li'  => '<h2>Préstations</h2>'
                ));
                ?>
            </div>
        </div>
        <div class="col-md-9">

            <?php if (have_posts()) : while (have_posts()) : the_post();
                $content = strip_shortcode_gallery( get_the_content() );
                $content = str_replace( ']]>', ']]&gt;', apply_filters( 'the_content', $content ) );
                if ( get_post_gallery() ) :
                    $gallery = get_post_gallery( get_the_ID(), false ); ?>

                    <!-- Flickity HTML init -->
                    <div class="carousel" data-flickity='{ "cellAlign": "left", "contain": true }'>

                    <?php foreach( $gallery['src'] as $src ) : ?>
                        <div class="carousel-cell" style="background-image: url('<?php echo $src ?>')">
                        </div>
                        <?php
                    endforeach;?>
                    </div>
                <?php endif;
                ?>
                <div>
                    <?php
                    echo $content;
                    ?>
                </div>
            <?php endwhile; ?>

            <?php endif; ?>
        </div>
</div>

<?php get_footer(); ?>
