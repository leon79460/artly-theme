<?php 

get_header();

$no_sidebar = is_active_sidebar('blog-sidebar') ? '' : 'justify-content-center '; 

?>

    <section class="tp-blogpost-area pt-130 pb-130">
        <div class="container">
            <div class="row justify-content-center )">
                <div class="col-xl-8 col-lg-8">
                    <div class="error-page text-center ">
                            <h2> 404 Error </h2>
                            <p> The page not available on backend </p>
                            <!-- <div class="tp-about-btn>
                            <a href="<?php echo home_url(); ?>" class="tp-btn">
                                <span class="tp-btn-wrap">
                                    <span class="tp-btn-y-1">Back to home</span>
                                    <span class="tp-btn-y-2">Back to home</span>
                                </span>
                            </a>
                        </div> -->
                        <div class="col-12">
                            <button class="tp-btn">
                                <a href="<?php echo home_url(); ?> ">
                                <span class="tp-btn-wrap">
                                    <span class="tp-btn-y-1">Back To Home</span>
                                    <span class="tp-btn-y-2">Back To Home</span>
                                </span>  
                                </a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



<?php get_footer();