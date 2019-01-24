<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<? bloginfo( 'pingback_url' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title><?php wp_title(''); ?></title>

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="header">
        <a href="<?php echo bloginfo('url'); ?>">
            <img class="logo" src="<?php echo bloginfo('template_url'); ?>/images/logo-1.png" alt="logo">
        </a>
        <div class="social-network">
            <a href="https://www.facebook.com/" target="_blank">
                <img src="<?php echo bloginfo('template_url'); ?>/images/facebook.png" alt="logo">
            </a>
            <a href="https://www.instagram.com/" target="_blank">
                <img src="<?php echo bloginfo('template_url'); ?>/images/instagramm.png" alt="logo">
            </a>
            <a href="https://www.google.com/" target="_blank">
                <img src="<?php echo bloginfo('template_url'); ?>/images/google.png" alt="logo">
            </a>
            <a href="https://www.pinterest.com/" target="_blank">
                <img src="<?php echo bloginfo('template_url'); ?>/images/pinterest.png" alt="logo">
            </a>
        </div>
        <nav class="navigation"><?php wp_nav_menu(array( 'theme_location' => 'menu-principal')); ?></nav>
    </header>