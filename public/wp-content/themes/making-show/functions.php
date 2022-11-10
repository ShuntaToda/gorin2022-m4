<?php
add_action('wp_enqueue_scripts', function(){
    wp_enqueue_style('bootstrap', get_theme_file_uri('bootstrap.min.css'));
    wp_enqueue_script('bootstrap', get_theme_file_uri('bootstrap.min.js'), [], false, true);
});

add_filter('register_post_type_args' , function($args, $post_type){
    $args[$post_type]['has_archive'] = true;
    $args[$post_type]['slug'] = 'posts';

    return $args;
}, 10, 2)


?>