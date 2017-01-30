<?php
/*
 * Template Name: Prestations template
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

<div class="container">
    <div class="row template-prestations">
        <div class="col-md-3">
            <div class="template-prestations-menu">
                <!-- Récupérer le menu des préstations. -->

                <?php wp_list_pages(array(
                    'child_of' => 4,
                    'title_li' => ''
                ));
                ?>
            </div>
        </div>
        <div class="col-md-9">

            <?php if (have_posts()) : while (have_posts()) : the_post();
                $content = strip_shortcode_gallery(get_the_content());
                $content = str_replace(']]>', ']]&gt;', apply_filters('the_content', $content));
                if (get_post_gallery()) :
                    $gallery = get_post_gallery(get_the_ID(), false); ?>

                    <!-- Flickity HTML init -->
                    <div class="carousel" data-flickity='{
                        "cellAlign": "left",
                        "contain": true ,
                        "pageDots": "false",
                        "prevNextButtons": false
                        }'>

                        <?php foreach ($gallery['src'] as $src) : ?>
                            <div class="carousel-cell" style="background-image: url('<?php echo $src ?>')">
                            </div>
                            <?php
                        endforeach; ?>
                    </div>
                <?php endif;
                ?>
                <div class="template-prestations-content">
                    <?php
                    echo $content;
                    ?>
                </div>
            <?php endwhile; ?>

            <?php endif; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
