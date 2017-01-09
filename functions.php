<?php
  //Load all css
  function load_arm_css(){

    wp_register_style('armtheme', get_template_directory_uri() . '/stylesheets/screen.css', array(), '1.0', 'all');
    wp_enqueue_style('armtheme'); // Enqueue it!

    wp_register_style('style', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
    wp_enqueue_style('style'); // Enqueue it!

    wp_register_style('flickity', get_template_directory_uri() . '/stylesheets/flickity.min.css', array(), '1.0', 'all');
    wp_enqueue_style('flickity'); // Enqueue it!
  }

  //load all js
  function load_arm_js()
{
    wp_enqueue_script(
      'armjs',
      get_template_directory_uri() . '/js/app.js',
      array('jquery'), '1.0',
      true
    );
    wp_enqueue_script(
      'flictiky',
      get_template_directory_uri() . '/js/flickity.pkgd.min.js',
      '1.0',
      true
    );
  }

  //load menu
  function arm_nav(){
    wp_nav_menu(
      array(
        'theme_location'  => '',
        'menu'            => '',
        'container'       => '',
        'container_class' => '',
        'container_id'    => '',
        'menu_class'      => '',
        'menu_id'         => '',
        'echo'            => true,
        'fallback_cb'     => 'wp_page_menu',
        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'items_wrap'      => '<ul>%3$s</ul>',
        'depth'           => 0,
        'walker'          => ''
        )
    );
  }

  //add action
  add_action('wp_enqueue_scripts','load_arm_css');
  add_action('wp_enqueue_scripts','load_arm_js');
 ?>
