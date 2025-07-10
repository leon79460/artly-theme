<?php 

get_header();

?>

<main>
    <section class="tp-blogpost-area pt-130 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8">

                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part('template-parts/content', get_post_format()); ?> 
                <?php endwhile; else : ?>
                    <p><?php esc_html_e( 'Sorry, no posts available in backend.' ); ?></p>
                <?php endif; ?>

                </div>
                <!-- Sidebar Section -->
                <div class="col-xl-4 col-lg-4">
                    <div class="tp-blog-sidebar-widget mb-30">
                        <h3 class="tp-blog-sidebar-title tp-fs-24 mb-25"><span></span> Search here</h3>
                        <form class="tp-blog-form position-relative" action="#">
                            <input type="text" placeholder="Search keywords">
                            <button type="submit"><i class="far fa-arrow-right"></i></button>
                        </form>
                    </div>
                    <div class="tp-blog-sidebar-widget mb-30">
                        <h3 class="tp-blog-sidebar-title tp-fs-24 mb-25"><span></span> Category</h3>
                        <div class="tp-blog-sidebar-cat">
                            <ul>
                                <li><a href="blog.html">Product design</a></li>
                                <li><a href="blog.html">Visual identity</a></li>
                                <li><a href="blog.html">Branding design</a></li>
                                <li><a href="blog.html">Web design</a></li>
                                <li><a href="blog.html">Content writing</a></li>
                                <li><a href="blog.html">Creative solution</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="tp-blog-sidebar-widget mb-30">
                        <h3 class="tp-blog-sidebar-title tp-fs-24 mb-25"><span></span> Recent post</h3>
                        <div class="tp-blog-sidebar-post">
                            <div class="tp-blog-sidebar-post-item">
                                <div class="tp-blog-sidebar-post-thumb mb-20">
                                    <a href="blog-details.html" class="br-5"><img src="<?php echo get_template_directory_uri()?>/assets/img/blog/blog-sidebar-thumb-1.jpg" alt=""></a>
                                </div>
                                <div class="tp-blog-sidebar-post-content">
                                    <div class="tp-postbox-meta mb-15">
                                        <span><a href="#"><i class="fal fa-calendar-alt"></i> 20 Sep. 2023</a></span>
                                    </div>
                                    <h5 class="tp-blog-sidebar-post-title tp-fs-20">
                                        <a href="blog-details.html">Dapibus cras nisi suscipit nibh elite
                                            purus condimentum</a>
                                    </h5>
                                </div>
                            </div>  
                            <div class="tp-blog-sidebar-post-item">
                                <div class="tp-blog-sidebar-post-thumb mb-20">
                                    <a href="blog-details.html" class="br-5"><img src="<?php echo get_template_directory_uri()?>/assets/img/blog/blog-sidebar-thumb-2.jpg" alt=""></a>
                                </div>
                                <div class="tp-blog-sidebar-post-content">
                                    <div class="tp-postbox-meta mb-15">
                                        <span><a href="#"><i class="fal fa-calendar-alt"></i> 20 Sep. 2023</a></span>
                                    </div>
                                    <h5 class="tp-blog-sidebar-post-title tp-fs-20">
                                        <a href="blog-details.html">Nullam arcu proin also facilisi montes
                                            facilisi fringilla condimen</a>
                                    </h5>
                                </div>
                            </div>  
                            <div class="tp-blog-sidebar-post-item">
                                <div class="tp-blog-sidebar-post-thumb mb-20">
                                    <a href="blog-details.html" class="br-5"><img src="<?php echo get_template_directory_uri()?>/assets/img/blog/blog-sidebar-thumb-3.jpg" alt=""></a>
                                </div>
                                <div class="tp-blog-sidebar-post-content">
                                    <div class="tp-postbox-meta mb-15">
                                        <span><a href="#"><i class="fal fa-calendar-alt"></i> 20 Sep. 2023</a></span>
                                    </div>
                                    <h5 class="tp-blog-sidebar-post-title tp-fs-20">
                                        <a href="blog-details.html">Elementum euismod lorem urna fusce
                                            porttitor ultricies in per orci</a>
                                    </h5>
                                </div>
                            </div>  
                        </div>
                    </div>
                    <div class="tp-blog-sidebar-widget mb-30">
                        <h3 class="tp-blog-sidebar-title tp-fs-24 mb-25"><span></span> Tags cloud</h3>
                        <div class="tagcloud">
                            <a href="blog.html">Creative</a>
                            <a href="blog.html">design</a>
                            <a href="blog.html">color</a>
                            <a href="blog.html">brand</a>
                            <a href="blog.html">service</a>
                            <a href="blog.html">technology</a>
                            <a href="blog.html">startup</a>
                            <a href="blog.html">corporate</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>


<?php get_footer();