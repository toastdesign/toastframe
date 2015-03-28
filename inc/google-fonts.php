<?php 
function wpb_add_google_fonts() {

	wp_register_style('wpb-googleFonts', 'http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,400,700,300');
    wp_enqueue_style( 'wpb-googleFonts');
}

add_action('wp_print_styles', 'wpb_add_google_fonts');
