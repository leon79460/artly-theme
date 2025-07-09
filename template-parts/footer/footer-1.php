<?php

  $footer_switch = get_theme_mod('footer_switch', false); 
  $footer_shape_switch = get_theme_mod('footer_shape_switch', false); 

?> 

<!-- footer start  -->
  <footer class="tp-theme-black-bg p-relative">
    
  <?php if(!empty($footer_shape_switch)) : ?>
  <div class="tp-footer-shape-01 p-absolute">
      <img src="<?php echo get_template_directory_uri()?>/assets/img/shape/footer/shape-01.png" alt="">
  </div>
  <div class="tp-footer-shape-02 p-absolute">
      <img src="<?php echo get_template_directory_uri()?>/assets/img/shape/footer/shape-02.png" alt="">
  </div>
  <div class="tp-footer-shape-03 p-absolute">
      <img src="<?php echo get_template_directory_uri()?>/assets/img/shape/footer/shape-03.png" alt="">
  </div>
  <div class="tp-footer-shape-04 p-absolute">
      <img src="<?php echo get_template_directory_uri()?>/assets/img/shape/footer/shape-04.png" alt="">
  </div>
  <?php endif; ?>

<div class="container">
    <!-- Top footer -->

      <?php if(!empty($footer_switch)) : ?>
    <div class="tp-foter-logo-area pt-130">
        <div class="row align-items-center">
            <div class="col-xl-3 col-lg-3 col-md-4">
                <div class="footer-logo mb-30">
                    <?php artly_footer_logo(); ?>
                </div>
            </div>
          <div class="col-xl-6 col-lg-5 col-md-4 d-none d-md-block">
              <div class="footer-sep mb-30"></div>
          </div>
          <div class="col-xl-3 col-lg-4 col-md-4">
            <div class="tpfooter-social pl-35 mb-30">
              <?php echo artly_offcanvas_social(); ?> 
            </div>
          </div>
        </div>
    </div>
    <?php endif; ?>


    <!-- Widget section -->

    <?php if(is_active_sidebar('footer-sidebar-1') || is_active_sidebar('footer-sidebar-2') || is_active_sidebar('footer-sidebar-3') || is_active_sidebar('footer-sidebar-4') ) :  ?>

    <div class="tp-footer-widget-area pt-70 pb-40">
        <div class="row">
        <?php if(is_active_sidebar('footer-sidebar-1')) : ?>
            <div class="col-xl-3"> 
            <?php dynamic_sidebar('footer-sidebar-1'); ?>
            </div>
            <?php endif; ?>

        <?php if(is_active_sidebar('footer-sidebar-2')) : ?>
            <div class="col-xl-3 col-lg-4 col-md-4">
            <?php dynamic_sidebar('footer-sidebar-2'); ?>
            </div>
        <?php endif; ?>

        <?php if(is_active_sidebar('footer-sidebar-3')) : ?>
            <div class="col-xl-3 col-lg-4 col-md-4">
            <?php dynamic_sidebar('footer-sidebar-3'); ?>
            </div>
      <?php endif; ?>

      <?php if(is_active_sidebar('footer-sidebar-4')) : ?>
            <div class="col-xl-3 col-lg-4 col-md-4">
            <?php dynamic_sidebar('footer-sidebar-4'); ?>
            </div>
      <?php endif; ?>
        </div>
    </div>
    <?php endif; ?> 

    <!-- Footer copyright -->
    <div class="tp-footer-copyright-area pt-40 pb-10 p-relative z-index-1">
        <div class="row align-items-center">
            <div class="col-xl-3 col-lg-4">
                <div class="tp-footer-copyright mb-30 text-md-center text-lg-start">

                <?php echo artly_footer_copyright(); ?> 

                </div>
            </div>
            <div class="col-xl-9 col-lg-8">
                <div class="tp-footer-menu text-md-center text-lg-end mb-30 ">
                    <?php artly_footer_menu(); ?> 
                </div>
            </div>
        </div>
    </div>

</div>
</footer>
<!-- footer end  -->