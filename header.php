<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="description" content="<?php bloginfo('description'); ?>">

  <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

  <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto" rel="stylesheet">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <!-- wrapper -->
    <div class="site-container">
      <!-- pusher -->
      <div class="site-pusher">
        <!-- topbar -->
        <header class="topbar">
          
        </header>
        <!-- /topbar -->
        <!-- header -->
        <header class="header">
          <!-- logo -->
          <a href="#" class="header__icon" id="header__icon"></a>
          <a href="<?php bloginfo('url'); ?>" class="header__logo"><?php bloginfo('name') ?></a>
          <!-- /logo -->

          <!-- nav -->
          <nav class="menu" role="navigation">
            <?php arm_nav(); ?>
          </nav>
          <!-- /nav -->

        </header>
        <!-- header -->

        <!-- site-content -->
        <div class="site-content">
