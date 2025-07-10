<?php 
  $cat = get_the_category();
?>

<div class="tp-postbox-meta mb-15">
    <span><a href="#"><i class="fal fa-user"></i> <?php the_author();?> </a></span>
    <span><a href="#"><i class="fal fa-calendar-alt"></i> <?php the_date(); ?> </a></span>
    <span><a href="#"><i class="fal fa-certificate"></i> <?php echo $cat[0]->name; ?> </a></span>
</div>