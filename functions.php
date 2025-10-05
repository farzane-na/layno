<?php
// تنظیمات پایه قالب
function mst_setup() {
    load_theme_textdomain('my-simple-tailwind', get_template_directory() . '/languages');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form','comment-form','comment-list','gallery','caption'));
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'my-simple-tailwind'),
    ));
}
add_action('after_setup_theme','mst_setup');

// لود کردن فایل‌های CSS/JS (با cache-busting با filemtime)
function mst_enqueue_assets() {
    $css_file = get_template_directory() . '/assets/css/output.css';
    $css_uri = get_template_directory_uri() . '/assets/css/output.css';
    $css_ver = file_exists($css_file) ? filemtime($css_file) : wp_get_theme()->get('Version');

    wp_enqueue_style('mst-style', $css_uri, array(), $css_ver);
    // اگر main.js نداری هم باز مشکلی نیست؛ در ادامه می‌تونی اضافه کنی
    $js_file = get_template_directory() . '/assets/js/main.js';
    wp_enqueue_script('mst-main', get_template_directory_uri() . '/assets/js/main.js', array(), file_exists($js_file) ? filemtime($js_file) : null, true);
}
add_action('wp_enqueue_scripts','mst_enqueue_assets');


define("DIRECTORY_URI",get_template_directory_uri());
var_dump(DIRECTORY_URI);

function layno_register_style(){
    wp_enqueue_style("layno-stylesheet");
};