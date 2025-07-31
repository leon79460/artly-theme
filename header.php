<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exdos - Creative Agency HTML Template </title>

    <?php wp_head(); ?>
 
</head>
<body>

<!-- preloader  -->
<!-- <div id="loading">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <div class="object" id="object_four"></div>
            <div class="object" id="object_three"></div>
            <div class="object" id="object_two"></div>
            <div class="object" id="object_one"></div>
        </div>
    </div>
</div> -->

    
<!-- scroll to top  -->
<button id="back-to-top"><i class="far fa-arrow-up"></i></button>



 <?php echo get_template_part('template-parts/header/header-1'); ?>
 <?php echo get_template_part('template-parts/header/offcanvas'); ?>
 <?php echo get_template_part('template-parts/header/header-search'); ?>
 
 <?php artly_breadcrumb(); 