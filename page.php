<?php 

get_header();

$no_sidebar = is_active_sidebar('blog-sidebar') ? '' : 'justify-content-center '; 

?>

<section class="tp-page-area pt-130 pb-130">
<div class="container">
    <div class="row ">
        <div class="col-xl-12">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php get_template_part('template-parts/content', 'page'); ?> 
        <?php endwhile; else : ?>

            <p> <?php esc_html__( 'Sorry, no posts available in backend.' ); ?> </p>
        <?php endif; ?>

            <div class="tp-pagination mb-60">
                <?php artly_pagination(); ?>
            </div>

        </div>
    </div>
    </div>
</div>
</section>


<?php get_footer();