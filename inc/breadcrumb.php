<?php

function artly_breadcrumb(){
    global $post;  
    $breadcrumb_class = '';
    $breadcrumb_show = 1;

    if ( is_front_page() && is_home() ) {
        $title = get_theme_mod('breadcrumb_blog_title', __('Blog','artly'));
        $breadcrumb_class = 'home_front_page';
    }
    elseif ( is_front_page() ) {
        $title = get_theme_mod('breadcrumb_blog_title', __('Blog','artly'));
        $breadcrumb_show = 0;
    }
    elseif ( is_home() ) {
        if ( get_option( 'page_for_posts' ) ) {
            $title = get_the_title( get_option( 'page_for_posts') );
        }
    }
    elseif ( is_single() && 'post' == get_post_type() ) {
      $title = get_the_title();
    } 
    elseif ( is_single() && 'service' == get_post_type() ) {
      $title = get_the_title();
    } 
    elseif ( is_single() && 'product' == get_post_type() ) {
        $title = get_theme_mod( 'breadcrumb_product_details', __( 'Shop', 'artly' ) );
    } 
    elseif ( is_search() ) {
        $title = esc_html__( 'Search Results for : ', 'artly' ) . get_search_query();
    } 
    elseif ( is_404() ) {
        $title = esc_html__( 'Oops Page not Found', 'artly' );
    } 
    elseif ( is_archive() ) {
        $title = get_the_archive_title();
    } 
    else {
        $title = get_the_title();
    }



    $_id = get_the_ID();

    if ( is_single() && 'product' == get_post_type() ) { 
        $_id = $post->ID;
    } 
    elseif ( function_exists("is_shop") AND is_shop()  ) { 
        $_id = wc_get_page_id('shop');
        
    } 
    elseif ( is_home() && get_option( 'page_for_posts' ) ) {
        $_id = get_option( 'page_for_posts' );
    }


    $breadcrumb_image_bg = get_theme_mod('breadcrumb_image_bg'); 
    $breadcrumb_shape_switch = get_theme_mod('breadcrumb_shape_switch', false); 
    $breadcrumb_switch = function_exists('get_field') ? get_field('breacrumb_on_off',$_id) : null;

    ?>
    <?php //if(!empty($breadcrumb_switch) && $breadcrumb_switch ) : ?>

  <section class="tp-breadcrumb-area tp-breadcrumb-space p-relative" data-background="<?php echo esc_url($breadcrumb_image_bg); ?>" data-bg-color="#0A0E1A">

    <?php if(!empty($breadcrumb_shape_switch)) : ?>
    <div class="tp-breadcrumb-shape">
      <img class="tp-breadcrumb-shape-1 p-absolute" src="<?php echo get_template_directory_uri()?>/assets/img/breadcrumb/shape-1.png" alt="">
      <img class="tp-breadcrumb-shape-2 p-absolute" src="<?php echo get_template_directory_uri()?>/assets/img/breadcrumb/shape-2.png" alt="">
      <img class="tp-breadcrumb-shape-3 p-absolute" src="<?php echo get_template_directory_uri()?>/assets/img/breadcrumb/shape-3.png" alt="">
    </div>
     <?php endif; ?>

  <div class="container">
    <div class="tp-breadcrumb text-center position-relative z-index-2">
        <h1 class="tp-breadcrumb-title tp-upper tp-text-white"><?php echo wp_kses_post($title); ?></h1>
        <div class="tp-breadcrumb-list">

        <!-- Breadcrumb By Raw Code -->
        <!-- <span class="active"><a href="<?php echo home_url(); ?>"> <?php echo esc_html__('Home', 'artly');?> </a> </span>
            <span class="dvir">-</span>
            <span><a href="#"><?php echo wp_kses_post($title); ?></a></span>
        </div> -->

        <!-- //Breadcrumb By NavXT -->
        <?php if(function_exists('bcn_display')) : ?>
          <?php bcn_display(); ?> 
        <?php endif; ?>  
    </div>
  </div>
  </section>

    <?php //endif; ?>
<?php
}

// add_action( 'artly_header_before' , 'artly_breadcrumb' );