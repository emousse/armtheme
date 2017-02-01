<?php
//Load all css
function load_arm_css()
{

    wp_register_style('armtheme', get_template_directory_uri() . '/stylesheets/armtheme.css', array(), time(), 'all');
    wp_enqueue_style('armtheme'); // Enqueue it!

    wp_register_style('style', get_template_directory_uri() . '/style.css', array(), time(), 'all');
    wp_enqueue_style('style'); // Enqueue it!

    wp_register_style('flickity', get_template_directory_uri() . '/stylesheets/flickity.min.css', array(), '1.0', 'all');
    wp_enqueue_style('flickity'); // Enqueue it!

    wp_register_style('bootstrap_grid', get_template_directory_uri() . '/css/bootstrap-grid.min.css', array(), '1.0', 'all');
    wp_enqueue_style('bootstrap_grid'); // Enqueue it!

    wp_register_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '1.0', 'all');
    wp_enqueue_style('font-awesome'); // Enqueue it!
}

//load all js
function load_arm_js()
{
    wp_enqueue_script(
        'armjs',
        get_template_directory_uri() . '/js/app.js',
        array('jquery'), time(),
        true
    );
    wp_enqueue_script(
        'flictiky',
        get_template_directory_uri() . '/js/flickity.pkgd.min.js',
        '1.0',
        true
    );
    wp_enqueue_script(
        'isotope',
        get_template_directory_uri() . '/js/isotope.pkgd.min.js',
        '1.0',
        true
    );
    wp_enqueue_script(
        'smoothscroll',
        get_template_directory_uri() . '/js/smoothscroll.js',
        '1.0',
        true
    );
    wp_enqueue_script(
        'velocity',
        get_template_directory_uri() . '/js/velocity.min.js',
        '1.0',
        true
    );
    wp_enqueue_script(
        'velocityUi',
        get_template_directory_uri() . '/js/velocity.ui.min.js',
        '1.0',
        true
    );
}

//add sidebar
function armtheme_widgets_init()
{
    register_sidebar(array(
        'name' => 'Sidebar footer',
        'id' => 'sidebar-1',
        'description' => 'Sidebar qui apparait dans le footer',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => 'Sidebar latérale',
        'id' => 'sidebar-2',
        'description' => 'Sidebar qui apparait dans la barre latérale',
        'before_widget' => '<li class="%2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="aside-widget-title">',
        'after_title' => '</h2>',
    ));
}

//remove gallery from content
function strip_shortcode_gallery($content)
{
    preg_match_all('/' . get_shortcode_regex() . '/s', $content, $matches, PREG_SET_ORDER);

    if (!empty($matches)) {
        foreach ($matches as $shortcode) {
            if ('gallery' === $shortcode[2]) {
                $pos = strpos($content, $shortcode[0]);
                if (false !== $pos) {
                    return substr_replace($content, '', $pos, strlen($shortcode[0]));
                }
            }
        }
    }

    return $content;
}

//fil d'ariane
function fil_ariane()
{
    global $post;
    $fil = 'Vous êtes ici : ';
    $fil .= "<a href='" . get_bloginfo('url') . "'>";
    $fil .= get_bloginfo('name');
    $fil .= '</a> > ';

    $parents = array_reverse(get_ancestors($post->ID, 'page'));
    foreach ($parents as $parent) {
        $fil .= '<a href="' . get_permalink($parent) . '">';
        $fil .= get_the_title($parent);
        $fil .= '</a> > ';
    }
    $fil .= $post->post_title;

    return $fil;
}

//load menu
function arm_nav()
{
    wp_nav_menu(
        array(
            'theme_location' => '',
            'menu' => '',
            'container' => '',
            'container_class' => '',
            'container_id' => '',
            'menu_class' => '',
            'menu_id' => '',
            'echo' => true,
            'fallback_cb' => 'wp_page_menu',
            'before' => '',
            'after' => '',
            'link_before' => '',
            'link_after' => '',
            'items_wrap' => '<ul>%3$s</ul>',
            'depth' => 0,
            'walker' => ''
        )
    );
}

//adding post thumbnail
add_theme_support('post-thumbnails');
add_image_size('custom-size', 800, 400, true);

//add action
add_action('wp_enqueue_scripts', 'load_arm_css');
add_action('wp_enqueue_scripts', 'load_arm_js');
add_action('widgets_init', 'armtheme_widgets_init');
?>
