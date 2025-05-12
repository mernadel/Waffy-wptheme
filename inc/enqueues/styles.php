<?php
function waffy_enqueue_component_styles() {
    // Remove Bootstrap CSS as we are using vanilla CSS with BEM
    // wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', array(), '5.3.3', 'all');

    // Enqueue section-specific stylesheets
    wp_enqueue_style(
        'waffy-owl-carousel',
        get_template_directory_uri() . '/lib/owl-carousel/owl.carousel.min.css',
        array('waffy-style'), // Depends on the main stylesheet (handle from functions.php)
        filemtime(get_template_directory() . '/lib/owl-carousel/owl.carousel.min.css') // Use file modification time for versioning
    );
    wp_enqueue_style(
        'waffy-fontawesome',
        get_template_directory_uri() . '/lib/fontawesome.css',
        array('waffy-style'), // Depends on the main stylesheet (handle from functions.php)
        filemtime(get_template_directory() . '/lib/fontawesome.css') // Use file modification time for versioning
    );
    wp_enqueue_style(
        'waffy-home-hero',
        get_template_directory_uri() . '/css/home-hero.css',
        array('waffy-style'), // Depends on the main stylesheet (handle from functions.php)
        filemtime(get_template_directory() . '/css/home-hero.css') // Use file modification time for versioning
    );
    wp_enqueue_style(
        'waffy-home-cta-form',
        get_template_directory_uri() . '/css/home-cta_form.css',
        array('waffy-style'),
        _S_VERSION
    );
    wp_enqueue_style(
        'waffy-home-cta-signup',
        get_template_directory_uri() . '/css/home-cta_signup.css',
        array('waffy-style'),
        _S_VERSION
    );
    wp_enqueue_style(
        'waffy-home-featured-posts',
        get_template_directory_uri() . '/css/home-featured_posts.css',
        array('waffy-style'),
        _S_VERSION
    );
    wp_enqueue_style(
        'waffy-home-numbers',
        get_template_directory_uri() . '/css/home-numbers.css',
        array('waffy-style'),
        _S_VERSION
    );
    wp_enqueue_style(
        'waffy-home-seller-buyer-tab',
        get_template_directory_uri() . '/css/home-seller_buyer_tab.css',
        array('waffy-style'),
        _S_VERSION
    );
    wp_enqueue_style(
        'waffy-fontawesome',
        get_template_directory_uri() . '/css/fontawesome.css',
        array('waffy-style'),
        _S_VERSION
    );
}
add_action('wp_enqueue_scripts', 'waffy_enqueue_component_styles', 20);
?>