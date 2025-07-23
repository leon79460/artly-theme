<form class="tp-blog-form position-relative" action="/">
    <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" placeholder="<?php echo esc_attr__('Search Here', 'artly'); ?>">
    <button type="submit"><i class="far fa-arrow-right"></i></button>
</form>
