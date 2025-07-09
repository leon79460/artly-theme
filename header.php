<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exdos - Creative Agency HTML Template </title>

    <?php wp_head(); ?>
 
</head>
<body>

<section class="tp-breadcrumb-area tp-breadcrumb-space p-relative" data-background="assets/img/breadcrumb/breadcrumb-pattern.png" data-bg-color="#0A0E1A">
    <div class="tp-breadcrumb-shape">
        <img class="tp-breadcrumb-shape-1 p-absolute" src="<?php echo get_template_directory_uri()?>/assets/img/breadcrumb/shape-1.png" alt="">
        <img class="tp-breadcrumb-shape-2 p-absolute" src="assets/img/breadcrumb/shape-2.png" alt="">
        <img class="tp-breadcrumb-shape-3 p-absolute" src="assets/img/breadcrumb/shape-3.png" alt="">
    </div>
    <div class="container">
        <div class="tp-breadcrumb text-center position-relative z-index-2">
            <h1 class="tp-breadcrumb-title tp-upper tp-text-white">Blog</h1>
            <div class="tp-breadcrumb-list">
                <span class="active"><a href="#">Home</a></span>
                <span class="dvir">-</span>
                <span><a href="#">blog</a></span>
            </div>
        </div>
    </div>
</section>

    
    <!-- scroll to top  -->
    <button id="back-to-top"><i class="far fa-arrow-up"></i></button>

    <!-- preloader  -->
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object" id="object_four"></div>
                <div class="object" id="object_three"></div>
                <div class="object" id="object_two"></div>
                <div class="object" id="object_one"></div>
            </div>
        </div>
    </div>


 <?php echo get_template_part('template-parts/header/header-1'); ?>
 <?php echo get_template_part('template-parts/header/offcanvas'); ?>
 <?php echo get_template_part('template-parts/header/header-search'); ?>