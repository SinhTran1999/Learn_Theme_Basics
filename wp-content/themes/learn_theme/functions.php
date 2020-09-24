<?php 
/** 
*
*Template Name: Functions
*
*/

// action hook exmaple là được sử dụng để thêm các tính năng vào trang Web
    function theme_setup(){
      add_theme_support('title-tag');/* thêm thẻ tiêu đề trong phần tiêu đề của trang web */
    }

    // trong hàm add_action có tham số 1 là móc hành động, tham số 2 là tên hàm
    add_action('after_setup_theme', 'theme_setup');

    // filter hook exmaple
    function custom_excerpt_length(){
        return 15;
    }
    add_filter('excerpt_length','custom_excerpt_length'); /* Ở đây ta muốn hiển thị 15 ký tự và khi vượt qua 15 ký tự thì nó hiển thị thay cho mặc định của nó là 55 ký tự [...] */

    // adding css and js files usign action hook
    // wp_enqueue_script() or wp_enqueue_style()
    // wp_enqueue_script() bao gồm các tệp Javascript
    // wp_enqueue_style() bao gồm các tệp CSS
    function add_theme_scripts(){
        wp_enqueue_style('main-stylesheet',get_stylesheet_uri());

        // adding magin.css file contain css footer 
        wp_enqueue_style('magic', get_template_directory_uri().'/css/magin.css');

        // adding js files
        wp_enqueue_script('main',get_template_directory_uri().'/js/main.js'); 
    }

    add_action('wp_enqueue_scripts','add_theme_scripts');
?>