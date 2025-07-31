<?php
// Check if comments are allowed
if (comments_open()) :
    ?>
    <div id="comments" class="contact-form-box mb-50">
        <?php
        // Display the comments list
        if (have_comments()) :
            ?>
            <div class="tp-postbox-comments-wrapper">
                <div class="tp-postbox-comments">
                    <h3 class="tp-section-title mb-20 tp-fs-40 mb-30 mt-30">
                        <?php
                        $comment_count = get_comments_number();
                        echo esc_html($comment_count) . ' ' . _n('Comment', 'Comments', $comment_count, 'artly');
                        ?>
                    </h3>
                    <ul class="postbox__comment mb-95">
                        <?php
                        wp_list_comments(array(
                            'style'       => 'ul',
                            'short_ping'  => true,
                            'callback' => 'custom_comment_list'
                        ));
                        ?>
                    </ul>
                </div>
            </div>


            <?php
            // Display comment pagination if needed
            the_comments_pagination(array(
                'prev_text' => esc_html__('Previous', 'artly'),
                'next_text' => esc_html__('Next', 'artly'),
            ));
        endif;
        
        if ( is_user_logged_in() ) {
            $cl = 'loginformuser';
        } else {
            $cl = '';
        }

        $commenter = wp_get_current_commenter();
        $req = get_option('require_name_email');

        $fields = array(
            'author' => '<div class="row"> 
            <div class="col-md-12 mb-30"><input type="text" name="author" id="author" placeholder="' . esc_attr__('Full Name*', 'artly') . '" value="' . esc_attr($commenter['comment_author']) . '" ' . ($req ? 'required' : '') . '>
            </div>',

            'email' => '<div class="col-md-6 mb-30">
               <input type="email" name="email" id="email" placeholder="' . esc_attr__('Email', 'artly') . '" value="' . esc_attr($commenter['comment_author_email']) . '" ' . ($req ? 'required' : '') . '>
            </div>',

            'url' => '<div class="col-md-6 mb-30">
               <input type="text" name="url" id="url" placeholder="' . esc_attr__('Website', 'artly') . '" value="' . esc_attr($commenter['comment_author_url']) . '">
         </div>
         </div>',
        );


        $defaults = [
            'fields'             => $fields,
            'comment_field' => '<div class="col-xxl-12 mb-30 ' . $cl . '">
                       <textarea id="comment" name="comment" placeholder="' . esc_attr__('Your Comment Here...', 'artly') . '" required></textarea>
                </div>
            ',

            'submit_button' => '<div class="col-12">
                                    <button type="submit" class="tp-btn">
                                        <span class="tp-btn-wrap">
                                            <span class="tp-btn-y-1">' . esc_html__('Post Comment', 'artly') . '</span>
                                            <span class="tp-btn-y-2">' . esc_html__('Post Comment', 'artly') . '</span>
                                        </span>  
                                        <i></i>
                                    </button>
                                </div>',

            'cookies' => '<div class="col-xxl-12">
                <div class="postbox__comment-agree d-flex align-items-start mb-25">' .
                '<input class="e-check-input" type="checkbox" id="e-agree" name="wp-comment-agree" value="1" checked>' .
                '<label class="e-check-label" for="e-agree">' . esc_html__('Save my name, email, and website in this browser for the next time I comment.', 'artly') . '</label></div>
            </div>'
        ];
        // Display the comment form
        comment_form($defaults);
        ?>
    </div><!-- .comments-area -->
<?php endif; ?>


<?php
// Move the comment textarea to the bottom
function move_comment_textarea_to_bottom($fields) {
    $comment_field = $fields['comment'];
    unset($fields['comment']);
    $fields['comment'] = $comment_field;

    return $fields;
}

add_action('comment_form_fields', 'move_comment_textarea_to_bottom');
// comments for end 


// custom_comment_list
function custom_comment_list($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment;

    if ($comment->comment_type == 'pingback' || $comment->comment_type == 'trackback') {
        // Display pingbacks and trackbacks differently if needed
        ?>
        <li class="pingback">
            <p><?php esc_html_e('Pingback:', 'artly'); ?> <?php comment_author_link(); ?></p>
        </li>
        <?php
    } else {
        // Display regular comments
        ?>
        <li <?php comment_class('comment'); ?> id="comment-<?php comment_ID(); ?>">
                <div class="tp-postbox-comments-thumb br-5">
                    <?php echo get_avatar($comment, 120); ?>
                </div>
                <div class="tp-postbox-comments-text">
                    <h5 class="tp-postbox-comments-author"><?php comment_author(); ?></h5>
                    <span><?php comment_date(); ?></span>
                    <?php comment_text(); ?>

                    <div class="comments-reply-link">
                        <?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))); ?>
                    </div>

                </div> 
                
                
        <?php
    }
}
