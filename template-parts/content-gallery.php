<article id="post-<?php the_ID();?> " <?php post_class('tp-postbox mb-60'); ?> >
    <div class="tp-postbox-thumb mb-35 br-20">
        <a href="<?php the_permalink_rss();?> "><?php the_post_thumbnail(); ?>  </a>
    </div>
    <div class="tp-postbox-content">
    <?php get_template_part('template-parts/blog/blog-meta'); ?>
        <h3 class="tp-postbox-title tp-fs-40 mb-30"><a href="<?php the_permalink_rss();?>"><?php the_title(); ?></a></h3>
        <div class="tpblog__btn">
            <a class="tp-text-btn" href="<?php the_permalink_rss();?>"> <?php echo esc_html__('Read More', 'artly'); ?><i class="far fa-arrow-right"></i></a>
        </div>
    </div>
</article>


<!-- <article class="tp-postbox mb-60">
  <div class="tp-postbox-thumb mb-35 position-relative">
      <div class="swiper tp-blog-active">
          <div class="swiper-wrapper">
              <div class="swiper-slide br-20">
                  <img src="<?php echo get_template_directory_uri()?>/assets/img/blog/blog-thumb-02.jpg" alt="">
              </div>
              <div class="swiper-slide br-20">
                  <img src="<?php echo get_template_directory_uri()?>/assets/img/blog/blog-thumb-03.jpg" alt="">
              </div>
              <div class="swiper-slide br-20">
                  <img src="<?php echo get_template_directory_uri()?>/assets/img/blog/blog-thumb-04.jpg" alt="">
              </div>
          </div>
      </div>
      <div class="tp-blog-slider-arrow">
          <div class="tp-swiper-blog-button-prev tp-swiper-blog-button"><i class="flaticon-right-arrow"></i></div>
          <div class="tp-swiper-blog-button-next tp-swiper-blog-button"><i class="flaticon-right-arrow"></i></div>
      </div>
  </div>
  <div class="tp-postbox-content">
      <div class="tp-postbox-meta mb-15">
          <span><a href="#"><i class="fal fa-user"></i> Exdos</a></span>
          <span><a href="#"><i class="fal fa-calendar-alt"></i> 20 Sep. 2023</a></span>
          <span><a href="#"><i class="fal fa-certificate"></i> Creative</a></span>
      </div>
      <h3 class="tp-postbox-title tp-fs-40 mb-30"><a href="blog-details.html">Lacus sem varius ultricies praesent molestie eros pellentesque volutpat nulla.</a></h3>
      <div class="tpblog__btn">
          <a class="tp-text-btn" href="blog-details.html">Read More <i class="far fa-arrow-right"></i></a>
      </div>
  </div>
</article>
<article class="tp-postbox mb-60">
  <div class="tp-postbox-thumb mb-35 position-relative br-20">
      <img src="<?php echo get_template_directory_uri()?>/assets/img/blog/blog-thumb-03.jpg" alt="">
      <div class="tp-blog-video">
          <a class="popup-video" href="https://www.youtube.com/watch?v=oSO0Ehs2B3I"><i class="fal fa-play"></i></a>
      </div>
  </div>
  <div class="tp-postbox-content">
      <div class="tp-postbox-meta mb-15">
          <span><a href="#"><i class="fal fa-user"></i> Exdos</a></span>
          <span><a href="#"><i class="fal fa-calendar-alt"></i> 20 Sep. 2023</a></span>
          <span><a href="#"><i class="fal fa-certificate"></i> Creative</a></span>
      </div>
      <h3 class="tp-postbox-title tp-fs-40 mb-30"><a href="blog-details.html">Neque lobortis lacinia scelerisque ads quam cursus consectetuer tortor.</a></h3>
      <div class="tpblog__btn">
          <a class="tp-text-btn" href="blog-details.html">Read More <i class="far fa-arrow-right"></i></a>
      </div>
  </div>
</article>
<article class="tp-postbox mb-60">
  <div class="tp-postbox-thumb mb-35 ratio ratio-16x9">
      <iframe height="300" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/1851673326&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>
  </div>
  <div class="tp-postbox-content">
      <div class="tp-postbox-meta mb-15">
          <span><a href="#"><i class="fal fa-user"></i> Exdos</a></span>
          <span><a href="#"><i class="fal fa-calendar-alt"></i> 20 Sep. 2023</a></span>
          <span><a href="#"><i class="fal fa-certificate"></i> Creative</a></span>
      </div>
      <h3 class="tp-postbox-title tp-fs-40 mb-30"><a href="blog-details.html">Bolutpat vestibulum interdum tempor congue tempus aene accumsan proin.</a></h3>
      <div class="tpblog__btn">
          <a class="tp-text-btn" href="blog-details.html">Read More <i class="far fa-arrow-right"></i></a>
      </div>
  </div>
</article>
<article class="tp-postbox mb-60">
  <div class="tp-postbox-thumb mb-35 br-20">
      <a href="blog-details.html"><img src="<?php echo get_template_directory_uri()?>/assets/img/blog/blog-thumb-05.jpg" alt=""></a>
  </div>
  <div class="tp-postbox-content">
      <div class="tp-postbox-meta mb-15">
          <span><a href="#"><i class="fal fa-user"></i> Exdos</a></span>
          <span><a href="#"><i class="fal fa-calendar-alt"></i> 20 Sep. 2023</a></span>
          <span><a href="#"><i class="fal fa-certificate"></i> Creative</a></span>
      </div>
      <h3 class="tp-postbox-title tp-fs-40 mb-30"><a href="blog-details.html">Congue hendrerit primis etiam mauris commodo best dialogue ligula erate etiam.</a></h3>
      <div class="tpblog__btn">
          <a class="tp-text-btn" href="blog-details.html">Read More <i class="far fa-arrow-right"></i></a>
      </div>
  </div>
</article>
<div class="tp-pagination mb-60">
  <ul>
      <li><a href="#"><i class="fal fa-long-arrow-left"></i></a></li>
      <li><a href="#">01</a></li>
      <li><a href="#">02</a></li>
      <li><a href="#">03</a></li>
      <li><a href="#"><i class="fal fa-long-arrow-right"></i></a></li>
  </ul>
</div> -->