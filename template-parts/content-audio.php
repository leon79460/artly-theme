<?php 
$post_url = function_exists('get_field') ? get_field('post_url') : '';
?>


<?php if(is_single()): ?> 

<article class="tp-postbox mb-60">
    <div class="tp-postbox-thumb mb-35 ratio ratio-16x9">
        <?php echo wp_oembed_get($post_url); ?>
    </div> 
    <div class="tp-postbox-content">
        <?php get_template_part('template-parts/blog/blog-meta'); ?>
        <h3 class="tp-postbox-title tp-fs-40 mb-30"> <?php the_title(); ?> </h3>
        <div class="tp-postbox-details">

            <?php the_content(); ?> 

            <div class="tp-postbox-tag-wrapper mt-50">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="tp-postbox-tag">
                            <span> <?php echo esc_html__('Tags', 'artly'); ?> </span>
                            <?php artly_tags(); ?>  
                        </div>
                    </div>
                    <div class="col-lg-5">  
                        <div class="tp-postbox-social text-start text-md-end align-items-center">
                            
                            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>" target="_blank"><i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode(get_permalink()); ?>&text=<?php echo urlencode(get_the_title()); ?>" target="_blank">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="https://www.instagram.com/?url=<?php echo urlencode(get_permalink()); ?>" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="https://www.linkedin.com/shareArticle?url=<?php echo urlencode(get_permalink()); ?>&title=<?php echo urlencode(get_the_title()); ?>" target="_blank">
                                <i class="fab fa-linkedin-in"></i>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</article>

    <?php else: ?>

<artic le id="post-<?php the_ID();?> " <?php post_class('tp-postbox mb-60'); ?> >
<?php if (!empty($post_url)) : ?> 
    <div class="tp-postbox-thumb mb-35 br-20">
        <div class="tp-postbox-thumb mb-35 position-relative br-20">
            <?php the_post_thumbnail(); ?>
            <div class="tp-blog-video">
                <div class="tp-postbox-thumb mb-35 ratio ratio-16x9">
                   <?php echo wp_oembed_get($post_url); ?>
                </div> 
            </div>
        </div>
    </div>
    <?php endif; ?>
    <div class="tp-postbox-content">
    <?php get_template_part('template-parts/blog/blog-meta'); ?>
        <h3 class="tp-postbox-title tp-fs-40 mb-30"><a href="<?php the_permalink_rss();?>"><?php the_title(); ?></a></h3>
        <div class="tpblog__btn">
            <a class="tp-text-btn" href="<?php the_permalink_rss();?>"> <?php echo esc_html__('Read More', 'artly'); ?><i class="far fa-arrow-right"></i></a>
        </div>
    </div>
</article>

<?php endif; ?>