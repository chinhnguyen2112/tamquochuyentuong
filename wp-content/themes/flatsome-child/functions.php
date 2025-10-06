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


// === Custom Post Type: Quản lý Tướng ===
function tqht_register_quan_ly_tuong_cpt() {
    $labels = array(
        'name'               => 'Quản lý Tướng',
        'singular_name'      => 'Tướng',
        'menu_name'          => 'Quản lý Tướng',
        'name_admin_bar'     => 'Tướng',
        'add_new'            => 'Thêm Tướng mới',
        'add_new_item'       => 'Thêm Tướng mới',
        'new_item'           => 'Tướng mới',
        'edit_item'          => 'Chỉnh sửa Tướng',
        'view_item'          => 'Xem Tướng',
        'all_items'          => 'Danh sách Tướng',
        'search_items'       => 'Tìm kiếm Tướng',
        'not_found'          => 'Không tìm thấy Tướng nào',
        'not_found_in_trash' => 'Không có Tướng nào trong thùng rác',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'menu_icon'          => 'dashicons-shield-alt', // biểu tượng cái khiên
        'supports'           => array('title', 'thumbnail'), // chỉ có tên & ảnh đại diện
        'has_archive'        => true,
        'rewrite'            => array('slug' => 'tuong'),
        'show_in_rest'       => true, // hỗ trợ Gutenberg
    );

    register_post_type('quan_ly_tuong', $args);
}
add_action('init', 'tqht_register_quan_ly_tuong_cpt');

// === Custom Post Type: Tính Năng ===
function tqht_register_tinh_nang_cpt() {
    $labels = array(
        'name'                  => _x('Tính năng', 'Post type general name', 'tqht'),
        'singular_name'         => _x('Tính năng', 'Post type singular name', 'tqht'),
        'menu_name'             => _x('Tính năng', 'Admin Menu text', 'tqht'),
        'name_admin_bar'        => _x('Tính năng', 'Add New on Toolbar', 'tqht'),
        'add_new'               => __('Thêm mới', 'tqht'),
        'add_new_item'          => __('Thêm tính năng mới', 'tqht'),
        'new_item'              => __('Tính năng mới', 'tqht'),
        'edit_item'             => __('Chỉnh sửa tính năng', 'tqht'),
        'view_item'             => __('Xem tính năng', 'tqht'),
        'all_items'             => __('Danh sách tính năng', 'tqht'),
        'search_items'          => __('Tìm kiếm tính năng', 'tqht'),
        'not_found'             => __('Không tìm thấy tính năng nào', 'tqht'),
        'not_found_in_trash'    => __('Không có tính năng nào trong thùng rác', 'tqht'),
        'featured_image'        => __('Ảnh đại diện tính năng', 'tqht'),
        'set_featured_image'    => __('Đặt ảnh đại diện', 'tqht'),
        'remove_featured_image' => __('Xóa ảnh đại diện', 'tqht'),
        'use_featured_image'    => __('Sử dụng làm ảnh đại diện', 'tqht'),
        'archives'              => __('Kho lưu trữ tính năng', 'tqht'),
        'insert_into_item'      => __('Chèn vào tính năng', 'tqht'),
        'uploaded_to_this_item' => __('Được tải lên cho tính năng này', 'tqht'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'tinh-nang', 'with_front' => false),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-admin-generic', // biểu tượng bánh răng ⚙️
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt'),
        'show_in_rest'       => true, // Hỗ trợ Gutenberg + REST API
    );

    register_post_type('tinh_nang', $args);
}
add_action('init', 'tqht_register_tinh_nang_cpt');
