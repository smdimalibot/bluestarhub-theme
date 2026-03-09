<?php
function bluestarhub_styles() {
    wp_enqueue_style(
        'bluestarhub-style',
        get_stylesheet_uri()
    );
}
add_action('wp_enqueue_scripts', 'bluestarhub_styles');