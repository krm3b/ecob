<?php
add_action('wp_enqueue_scripts', 'add_styles');

function add_styles()
{
    // reset_style（CDNから読み込む場合）
    wp_register_style(
        'reset_style', // 識別子
        'https://unpkg.com/ress/dist/ress.min.css', // CDNのURL
        array(), // 依存関係なし
        null // バージョン指定なし
    );
    
    // slick_min
    wp_register_style(
        'slick_min',
        'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css',
        array(),
        '1.0'
    );
    
    // slick_theme
    wp_register_style(
        'slick_theme',
        'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css',
        array(),
        '1.0'
    );
    

    // main style
    wp_enqueue_style(
        'main_style',
        get_template_directory_uri() . '/css/style.css',
        array('reset_style', 'slick_min', 'slick_theme'),
        '1.0'
    );
}



add_action('wp_enqueue_scripts', 'add_scripts');
function add_scripts() {
    // デフォルトのjQueryを削除
    // wp_deregister_script('jquery');

    // jQueryを読み込む
    wp_register_script(
        'jquery_script',
        'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js',
        array(),
        '1.0',
        true
    );


    // slick_scriptを読み込む
    wp_register_script(
        'slick_script',
        'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js',
        array(),
        '1.0',
        true
    );

    // メインのスクリプトを読み込む
    wp_enqueue_script(
        'main_script',
        get_template_directory_uri() . '/js/main.js',
        array('jquery_script', 'slick_script'),
        '1.0',
        true
    );
    
}

// アイキャッチ画像を有効化
add_theme_support( 'post-thumbnails' );



// カスタム投稿タイプ：作業シーン
function create_post_type_work_scene() {
    register_post_type(
        'work_scene',
        
        array(
            'labels' => array(
                'name'          => '作業風景',
                'singular_name' => '作業風景'
            ),
            'public'        => true,
            'menu_position' => 5,
            'supports'      => array('title', 'thumbnail', 'editor'), 
            'has_archive'   => false,
            'show_in_rest'  => true,
        )
    );
}
add_action('init', 'create_post_type_work_scene');

?>