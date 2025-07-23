<?php
class Artly_Sidebar_Post_Widget extends WP_Widget {
    public function __construct() {
        parent::__construct(
            'artly_sidebar_post_widget',
            __('Artly Sidebar Post', 'text_domain'),
            array('description' => __('Displays recent posts with customizable options', 'text_domain'))
        );
    }

    public function widget($args, $instance) {
        $title = !empty($instance['title']) ? $instance['title'] : '';
        $post_number = !empty($instance['post_number']) ? $instance['post_number'] : 5;
        $order = !empty($instance['order']) ? $instance['order'] : 'DESC';

        echo $args['before_widget'];

        // Display the widget title
        if (!empty($title)) {
            echo $args['before_title'] . apply_filters('widget_title', $title) . $args['after_title'];
        }

        // Query and display posts
        $query_args = array(
            'post_type'      => 'post',
            'posts_per_page' => $post_number,
            'order'          => $order
        );
        $recent_posts = new WP_Query($query_args);

        if ($recent_posts->have_posts()) :
            while ($recent_posts->have_posts()) : $recent_posts->the_post(); ?>
                <div class="tp-blog-sidebar-post-item">
                    <div class="tp-blog-sidebar-post-thumb mb-20">
                        <a href="<?php the_permalink(); ?>" class="br-5"><?php the_post_thumbnail(); ?></a>
                    </div>
                    <div class="tp-blog-sidebar-post-content">
                        <div class="tp-postbox-meta mb-15">
                            <span><a href="#"><i class="fal fa-calendar-alt"></i> <?php echo get_the_date(); ?></a></span>
                        </div>
                        <h5 class="tp-blog-sidebar-post-title tp-fs-20">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h5>
                    </div>
                </div>  
            <?php endwhile;
        endif;

        wp_reset_postdata();
        echo $args['after_widget'];
    }

    public function form($instance) {
        $title = !empty($instance['title']) ? $instance['title'] : __('Recent Posts', 'text_domain');
        $post_number = !empty($instance['post_number']) ? $instance['post_number'] : 5;
        $order = !empty($instance['order']) ? $instance['order'] : 'DESC';

        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:', 'text_domain'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('post_number'); ?>"><?php _e('Number of Posts:', 'text_domain'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('post_number'); ?>" name="<?php echo $this->get_field_name('post_number'); ?>" type="number" value="<?php echo esc_attr($post_number); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('order'); ?>"><?php _e('Order:', 'text_domain'); ?></label>
            <select class="widefat" id="<?php echo $this->get_field_id('order'); ?>" name="<?php echo $this->get_field_name('order'); ?>">
                <option value="DESC" <?php selected($order, 'DESC'); ?>>Descending</option>
                <option value="ASC" <?php selected($order, 'ASC'); ?>>Ascending</option>
            </select>
        </p>
        <?php
    }

    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
        $instance['post_number'] = (!empty($new_instance['post_number'])) ? strip_tags($new_instance['post_number']) : 5;
        $instance['order'] = (!empty($new_instance['order'])) ? strip_tags($new_instance['order']) : 'DESC';
        return $instance;
    }
}

function register_artly_sidebar_post_widget() {
    register_widget('Artly_Sidebar_Post_Widget');
}
add_action('widgets_init', 'register_artly_sidebar_post_widget');
