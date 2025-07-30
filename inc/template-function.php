<?php 

// Header Logo Function 
function artly_header_logo() {
  $header_logo_main = get_theme_mod('header_logo_main', get_template_directory_uri() . '/assets/img/logo/logo-white.png'); 
  ?>
  <a href=" <?php echo home_url(); ?>">
  <img src="<?php echo esc_url($header_logo_main); ?> " alt="">
  </a>

<?php
}
// Footer Logo Function 
function artly_footer_logo() {
  $footer_logo = get_theme_mod('footer_logo', get_template_directory_uri() . '/assets/img/logo/logo-white.png'); 
  ?>
  <a href=" <?php echo home_url(); ?>">
  <img src="<?php echo esc_url($footer_logo); ?> " alt="">
  </a>

<?php
}

// Footer Copyright Function 
function artly_footer_copyright() {
  $footer_copyright = get_theme_mod('footer_copyright', esc_html__('© Copyright 2024 | Alright reserved exdos by Themepure', 'artly' )); 
  ?>
  
  <p> <?php echo esc_html($footer_copyright); ?> </p>

<?php
}

// Header Offcanvas Function 
function artly_offcanvas_social() {
  
    $social_fb = get_theme_mod('social_fb', esc_html__('#', 'artly'));
    $social_tw = get_theme_mod('social_tw', esc_html__('#', 'artly'));
    $social_in = get_theme_mod('social_in', esc_html__('#', 'artly'));
    $social_inst = get_theme_mod('social_inst', esc_html__('#', 'artly'));

?>
    <?php if(!empty($social_fb)) : ?> 
    <a target="_blank" href="<?php echo esc_url($social_fb); ?>"> <i class="fab fa-facebook-f"></i></a>
    <?php endif; ?> 

    <?php if(!empty($social_tw)) : ?> 
    <a target="_blank" href="<?php echo esc_url($social_tw); ?>"><i class="fab fa-twitter"></i></a>
    <?php endif; ?> 

    <?php if(!empty($social_in)) : ?> 
    <a target="_blank" href="<?php echo esc_url($social_in); ?>"><i class="fab fa-linkedin-in"></i></a>
    <?php endif; ?>

    <?php if(!empty($social_inst)) : ?> 
    <a target="_blank" href="<?php echo esc_url($social_inst); ?>"><i class="fab fa-instagram"></i></a>
    <?php endif; ?> 
<?php
}

// Header Main Manu Function
function artly_main_menu() {

  wp_nav_menu(array(
    'theme_location'  => 'main-menu',
    'container'       => '',
    'container_class' => '',
    'menu_class'      => '',
    'fallback_cb'     => ' Artly_Walker_Nav_Menu::fallback', 
    'walker'          => new Artly_Walker_Nav_Menu, 
  ));
}


// Footer  Manu Function
function artly_footer_menu() {

  wp_nav_menu(array(
    'theme_location'  => 'footer-menu',
    'container'       => '',
    'container_class' => '',
    'menu_class'      => '',
    'fallback_cb'     => ' Artly_Walker_Nav_Menu::fallback', 
    'walker'          => new Artly_Walker_Nav_Menu, 
  ));
}

// Blog Pagination Function
function artly_pagination(){
  $pages = paginate_links( array( 
      'type' => 'array',
      'prev_text'    => __('<i class="fal fa-long-arrow-left"></i>','arlty'),
      'next_text'    => __('<i class="fal fa-long-arrow-right"></i>','artly'),
  ) );
      if( $pages ) {
      echo '<ul>';
      foreach ( $pages as $page ) {
          echo "<li>$page</li>";
      }
      echo '</ul>';
  }
}


// Artly tags function 
function artly_tags(){
  $post_tags = get_the_tags(); 
  if ($post_tags) {
    foreach ($post_tags as $tag) {
      ?>
      <a href= " <?php echo get_tag_link($tag); ?>"><?php echo esc_html($tag->name); ?> </a>
      <?php 
    }
  } else {
    ?> 
    <i> <?php echo esc_html__('No tags found', 'artly'); ?> </i>
    <?php
  }
}