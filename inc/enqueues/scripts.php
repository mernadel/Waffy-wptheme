<?php
function theme_enqueue_scripts() {
    wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array(), '5.3.3', true );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );