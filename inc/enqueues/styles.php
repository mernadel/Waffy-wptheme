<?php
function waffy_enqueue_component_styles() {
    // Remove Bootstrap CSS as we are using vanilla CSS with BEM
    // wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', array(), '5.3.3', 'all');

    // Enqueue section-specific stylesheets
    wp_enqueue_style(
        'waffy-owl-carousel', // Corrected handle
        get_template_directory_uri() . '/lib/owl-carousel/owl.carousel.min.css',
        array('waffy-style'), // Depends on the main stylesheet (handle from functions.php)
        filemtime(get_template_directory() . '/lib/owl-carousel/owl.carousel.min.css') // Use file modification time for versioning
    );
    wp_enqueue_style(
        'waffy-intl-tel-style', // Corrected and unique handle
        get_template_directory_uri() . '/lib/intl-tel/intlTelInput.min.css',
        array('waffy-style'), // Depends on the main stylesheet (handle from functions.php)
        filemtime(get_template_directory() . '/lib/intl-tel/intlTelInput.min.css') // Use file modification time for versioning
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

    if ( is_page_template( 'page-waffy-broker.php' ) ) {
        // Enqueue broker section specific stylesheets
        wp_enqueue_style(
            'waffy-broker-header-style',
            get_template_directory_uri() . '/css/broker/broker-header.css',
            array( 'waffy-style' ),
            filemtime( get_template_directory() . '/css/broker/broker-header.css' )
        );
  
        wp_enqueue_style(
            'waffy-broker-why-waffy-style',
            get_template_directory_uri() . '/css/broker/why-waffy.css',
            array( 'waffy-style' ),
            filemtime( get_template_directory() . '/css/broker/why-waffy.css' )
        );
        wp_enqueue_style(
            'waffy-broker-use-waffy-style',
            get_template_directory_uri() . '/css/broker/use-waffy.css',
            array( 'waffy-style' ),
            filemtime( get_template_directory() . '/css/broker/use-waffy.css' )
        );
        wp_enqueue_style(
            'waffy-broker-continue-your-work-style',
            get_template_directory_uri() . '/css/broker/continue-your-work.css',
            array( 'waffy-style' ),
            filemtime( get_template_directory() . '/css/broker/continue-your-work.css' )
        );
        wp_enqueue_style(
            'waffy-broker-faq-broker-style',
            get_template_directory_uri() . '/css/broker/faq-broker.css',
            array( 'waffy-style' ),
            filemtime( get_template_directory() . '/css/broker/faq-broker.css' )
        );
    }
    elseif ( is_page_template( 'page-blog.php' ) ) {
        wp_enqueue_style(
            'waffy-page-blog-style',
            get_template_directory_uri() . '/css/page-blog.css',
            array( 'waffy-style' ),
            filemtime( get_template_directory() . '/css/page-blog.css' )
        );
    }
    elseif ( is_page_template( 'single-blog.php' ) ) {
        wp_enqueue_style(
            'waffy-single-blog-style',
            get_template_directory_uri() . '/css/single-blog.css',
            array( 'waffy-style' ),
            filemtime( get_template_directory() . '/css/single-blog.css' )
        );
    }
    elseif ( is_page_template( 'hiring.php' ) ) {
        wp_enqueue_style(
            'waffy-hiring-style',
            get_template_directory_uri() . '/css/hiring.css',
            array( 'waffy-style' ),
            filemtime( get_template_directory() . '/css/hiring.css' )
        );
    }
    elseif ( is_page_template( 'job-requirements.php' ) ) {
        wp_enqueue_style(
            'waffy-job-requirements-style',
            get_template_directory_uri() . '/css/job-requirements.css',
            array( 'waffy-style' ),
            filemtime( get_template_directory() . '/css/job-requirements.css' )
        );
    }
}
add_action('wp_enqueue_scripts', 'waffy_enqueue_component_styles', 20);
?>