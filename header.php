<!doctype html>

<html <?php language_attributes(); ?>>

<head>
    <meta charset="utf-8">

    <?php wp_head(); ?>

    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>">
</head>

<body <?php body_class(); ?>>

<div id="wrapper">

    <header id="header">
        <a href="<?php echo bloginfo('url'); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Union+Thread-logo.png" alt="Union + Thread"></a>
    </header>

    <?php main_navigation(); ?>

    <div class="clear">

        <main id="main" role="main">