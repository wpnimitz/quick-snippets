<?php


add_action('admin_init', 'set_default_acf_values');
function set_default_acf_values() {

    $args = [
        'post_type'      => 'post',
        'posts_per_page' => -1,
    ];

    $posts = get_posts($args);

    foreach($posts as $post) {
        if (empty(get_field('META_KEY', $post->ID))) {
             update_field('META_KEY', 'META_VALUE', $post->ID);
        }
    }
}