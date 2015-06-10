<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7">
    <![endif]-->
    <!--[if IE 7]>
    <html class="no-js lt-ie9 lt-ie8">
        <![endif]-->
        <!--[if IE 8]>
        <html class="no-js lt-ie9">
            <![endif]-->
            <!--[if gt IE 8]>
            <!-->
            <html class="no-js">
                <!--<![endif]-->
            <head>
                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
                <?php if(is_front_page()): ?>
                    <title>Creative Tech Camp</title>
                <?php else:?>
                    <title>Creative Tech Camp | <?php the_title();?></title>
                <?php endif;?>
                <meta name="description" content="Creative Tech Camp began with a simple mission to provide fun, exciting and hands-on technology education to young children outside of the typical classroom setting.">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=1, minimum-scale=0.5, maximum-scale=1.0">
                <meta name="apple-mobile-web-app-capable" content="yes">

                <!-- Normalize CSS -->
                <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/styles/vendor/normalize.css">
                <!-- <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/dist/concat.min.css"> -->
                <!-- <link rel="icon" href="<?php bloginfo('template_directory'); ?>/assets/images/favicon.ico"> -->
                
                <?php wp_head(); ?>
            </head>
            <body>
                <!--[if lt IE 7]>
                <p class="browsehappy">
                    You are using an <strong>outdated</strong>
                    browser. Please
                    <a href="http://browsehappy.com/">upgrade your browser</a>
                    to improve your experience.
                </p>
                <![endif]-->