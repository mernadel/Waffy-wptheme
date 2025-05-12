<?php
function theme_enqueue_scripts() {
    wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/lib/owl-carousel/owl.carousel.min.js', array('jquery'), '5.3.3', true );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );