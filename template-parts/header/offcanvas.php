<?php 

$offcanvas_image_gallery = get_theme_mod('offcanvas_image_gallery'); 


?>


<div class="tp-offcanvas">
        <div class="tp-offcanvas-wrapper">
            <div class="tp-offcanvas-header d-flex justify-content-between align-items-center mb-90">
                <div class="tp-offcanvas-logo">
                    <a href="index.html"><img src="<?php echo get_template_directory_uri()?>/assets/img/logo/logo-black.png" alt=""></a>
                </div>
                <div class="tp-offcanvas-close">
                    <button class="tp-offcanvas-close-toggle"><i class="fal fa-times"></i></button>
                </div>
            </div>
            <div class="tp-offcanvas-menu d-xl-none mb-50">
                <nav></nav>
            </div>
            <div class="tp-offcanvas-content mb-50 d-none d-xl-block">
                <h2 class="tp-offcanvas-title">Hello There!</h2>
                <p>Lorem ipsum dolor sit amet, consect etur adipiscing elit. </p>
            </div>
            <div class="tp-offcanvas-gallery mb-50">

            <?php foreach ($offcanvas_image_gallery as $item) : ?> 
                <a class="popup-image" href="<?php echo esc_url($item['gallery_image']); ?>"> <img src="<?php echo esc_url($item['gallery_image']); ?>" alt="" ></a>
            <?php endforeach; ?>
            
            </div>
            <div class="tp-offcanvas-info mb-50">
                <h3 class="tp-offcanvas-sm-title">Information</h3>
                <span><a href="#">+ 4 20 7700 1007</a></span>
                <span><a href="#">hello@exdos.com</a></span>
                <span><a href="#">Avenue de Roma 158b, Lisboa</a></span>
            </div>
            <div class="tp-offcanvas-social mb-50"> 
            <?php echo artly_offcanvas_social(); ?> 
            </div>
        </div>
    </div>
    <div class="tp-offcanvas-overlay"></div>