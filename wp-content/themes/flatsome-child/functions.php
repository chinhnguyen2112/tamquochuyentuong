<?php
// Kế thừa CSS + JS từ Flatsome + thêm style của child
function flatsome_child_scripts() {
    // CSS của child theme
    wp_enqueue_style(
        'flatsome-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('flatsome-style'), // load sau Flatsome chính
        filemtime(get_stylesheet_directory() . '/style.css') // auto update khi chỉnh sửa
    );
}
add_action('wp_enqueue_scripts', 'flatsome_child_scripts', 20);


function flatsome_child_enqueue_scripts() {
    wp_enqueue_script('jquery');
    // Swiper CSS + JS
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array('jquery'), null, true);
    // Custom JS init
    wp_enqueue_script('child-swiper-init', get_stylesheet_directory_uri() . '/swiper-init.js', array('swiper-js'), null, true);
    
}
add_action('wp_enqueue_scripts', 'flatsome_child_enqueue_scripts');

// Kiểm tra xem ACF có đang chạy không
if( function_exists('acf_add_options_page') ) {

    // Tạo 1 option page cho Trang chủ
    acf_add_options_page(array(
        'page_title'    => 'Cài đặt Trang chủ',       // Tiêu đề trên trang admin
        'menu_title'    => 'Trang chủ',               // Tiêu đề menu hiển thị ở sidebar
        'menu_slug'     => 'home-settings',           // slug URL: wp-admin/admin.php?page=home-settings
        'capability'    => 'edit_posts',              // quyền truy cập
        'redirect'      => false,                     // không redirect sang subpage
        'icon_url'      => 'dashicons-admin-home',    // icon (biểu tượng ngôi nhà)
        'position'      => 61                         // vị trí menu (61 = dưới Appearance, gần Settings)
    ));
}


function my_acf_shortcode() {
    // Chỉ thực thi code ACF khi không ở trong UX Builder
    if ( function_exists('is_ux_builder') && !is_ux_builder() ) {
        // Lấy dữ liệu từ ACF
        $my_field = get_field('ten_truong_cua_ban');

        if ( $my_field ) {
            return '<div>' . esc_html($my_field) . '</div>';
        }
    }
    // Trả về một placeholder hoặc không gì cả khi ở trong UX Builder
    return '[My ACF Field Placeholder]';
}
add_shortcode('display_my_acf_field', 'my_acf_shortcode');

