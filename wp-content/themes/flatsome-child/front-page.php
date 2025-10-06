<?php /* Template for static front page */ 
get_header();

// Ví dụ: file HTML tĩnh đặt ở /wp-content/themes/your-child/static/home.html
// readfile( get_stylesheet_directory() . '/home.php' );

// Hoặc nếu là PHP:
include get_stylesheet_directory() . '/home.php';
get_footer();