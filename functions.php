<?php
  //Load all css
  function load_arm_css(){
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.0', 'all');
    wp_enqueue_style('bootstrap'); // Enqueue it!

    wp_register_style('armtheme', get_template_directory_uri() . '/css/armtheme.css', array(), '1.0', 'all');
    wp_enqueue_style('armtheme'); // Enqueue it!

    wp_register_style('style', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
    wp_enqueue_style('style'); // Enqueue it!
  }

  //load menu
  function arm_nav(){
    wp_nav_menu(
      array(
        'theme_location'  => '',
        'menu'            => '',
        'container'       => 'div',
        'container_class' => 'menu-{menu slug}-container',
        'container_id'    => '',
        'menu_class'      => 'menu',
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
  add_action('wp_enqueue_scripts','load_arm_css')
 ?>
