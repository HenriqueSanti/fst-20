<?php 

function load_css() {
    wp_register_style('index', get_template_directory_uri() . '/' . '/Assets/css/pages/index/index.css', array(), false, 'all');

    wp_enqueue_style('index');
}

add_action('wp_enqueue_scripts', 'load_css');

function load_js() {
    wp_register_script('main', get_template_directory_uri() . '/' . '/Assets/js/global/main.js', array(), false, true) ;

    wp_enqueue_script('main');
}

add_action('wp_enqueue_scripts', 'load_js');

//Grade Accordion Custom Post 
function create_post_type_grade() {
    register_post_type('grade',
        array(
            'labels'      => array(
                'name'          => __('Grade'),
                'singular_name' => __('Grade'),
            ),
            'public'      => true,
            'has_archive' => false,
            'supports'    => array('title'),
            'rewrite'     => array('slug' => 'grade'),
            'show_in_rest' => true,
        )
    );
}
add_action('init', 'create_post_type_grade');

//Testmonials
function create_post_type_depoimentos() {
    register_post_type('depoimentos',
        array(
            'labels'      => array(
                'name'          => __('Depoimentos'),
                'singular_name' => __('Depoimentos'),
            ),
            'public'      => true,
            'has_archive' => false,
            'supports'    => array('title'),
            'rewrite'     => array('slug' => 'depoimentos'),
            'show_in_rest' => true,
        )
    );
}
add_action('init', 'create_post_type_depoimentos');

//Indicação
function create_post_type_parceiros() {
    register_post_type('parceiros',
        array(
            'labels'      => array(
                'name'          => __('Parceiros'),
                'singular_name' => __('Parceiros'),
            ),
            'public'      => true,
            'has_archive' => false,
            'supports'    => array('title'),
            'rewrite'     => array('slug' => 'parceiros'),
            'show_in_rest' => true,
        )
    );
}
add_action('init', 'create_post_type_parceiros');

//Faq
function create_post_type_faq() {
    register_post_type('faq',
        array(
            'labels'      => array(
                'name'          => __('Faq'),
                'singular_name' => __('Faq'),
            ),
            'public'      => true,
            'has_archive' => false,
            'supports'    => array('title'),
            'rewrite'     => array('slug' => 'faq'),
            'show_in_rest' => true,
        )
    );
}
add_action('init', 'create_post_type_faq');
