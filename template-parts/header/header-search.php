<!-- tp header search  -->
<div class="tp-header-search-bar d-flex align-items-center">
        <button class="tp-search-close">×</button>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="tp-search-bar text-center">
                        <h2 class="tp-search-bar-title mb-30"><?php echo esc_html__('What are you looking for?', 'artly');?></h2>
                        <div class="contact-form-box contact-search-form-box">
                            <form action="/" method="get">
                                <input name="s" type="text" value="<?php the_search_query(); ?>" placeholder=" <?php echo esc_attr__('Search Here', 'artly');?> ">
                                <button type="submit"><i class="far fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

