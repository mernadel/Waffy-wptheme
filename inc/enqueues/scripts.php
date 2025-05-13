<?php
function theme_enqueue_scripts() {
    wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/lib/owl-carousel/owl.carousel.min.js', array('jquery'), '5.3.3', true );

    if ( is_page_template( 'page-waffy-broker.php' ) ) {
        // Enqueue broker section specific scripts
        wp_enqueue_script(
            'waffy-broker-header-script',
            get_template_directory_uri() . '/js/broker/broker-header.js',
            array( 'jquery' ),
            filemtime( get_template_directory() . '/js/broker/broker-header.js' ),
            true // Load in footer
        );

        wp_enqueue_script(
            'waffy-broker-why-waffy-script',
            get_template_directory_uri() . '/js/broker/why-waffy.js',
            array( 'jquery' ),
            filemtime( get_template_directory() . '/js/broker/why-waffy.js' ),
            true
        );
        wp_enqueue_script(
            'waffy-broker-use-waffy-script',
            get_template_directory_uri() . '/js/broker/use-waffy.js',
            array( 'jquery' ),
            filemtime( get_template_directory() . '/js/broker/use-waffy.js' ),
            true
        );
        wp_enqueue_script(
            'waffy-broker-continue-your-work-script',
            get_template_directory_uri() . '/js/broker/continue-your-work.js',
            array( 'jquery' ),
            filemtime( get_template_directory() . '/js/broker/continue-your-work.js' ),
            true
        );
        wp_enqueue_script(
            'waffy-broker-faq-broker-script',
            get_template_directory_uri() . '/js/broker/faq-broker.js',
            array( 'jquery' ),
            filemtime( get_template_directory() . '/js/broker/faq-broker.js' ),
            true
        );
    }
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );