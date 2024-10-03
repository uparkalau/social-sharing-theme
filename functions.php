<?php
function social_sharing_theme_enqueue_styles() {
    wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css');
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css');
    wp_enqueue_style('social-sharing-theme-style', get_stylesheet_uri());
    wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'social_sharing_theme_enqueue_styles');


function get_social_sharing_urls() {
    global $post;
    $post_url = urlencode(get_permalink($post->ID));
    $post_title = isset($post->post_title) ? urlencode($post->post_title) : 'Untitled';

    return [
        'LinkedIn' => "https://www.linkedin.com/shareArticle?mini=true&url={$post_url}&title={$post_title}",
        'Facebook' => "https://www.facebook.com/sharer/sharer.php?u={$post_url}",
        // Add more social networks here
    ];
}

function social_sharing_links() {
    $social_urls = get_social_sharing_urls();
    include locate_template('template-parts/social-sharing-links.php');
}

function add_social_sharing_links_after_title($title) {
    if ((is_single() || is_home()) && in_the_loop() && is_main_query()) {
        ob_start();
        social_sharing_links();
        $social_links = ob_get_clean();
        $title .= $social_links;
    }
    return $title;
}
add_filter('the_title', 'add_social_sharing_links_after_title');