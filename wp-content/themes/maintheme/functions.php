<?php 

    register_nav_menus(array('header-menu'=>'Header Menu') );

    function create_jobs_post_type() {

        if (!post_type_exists('jobs')){
            register_post_type('jobs',
            array(
                'labels' => array(
                    'name' => __('Jobs'),
                    'singular_name' => __('Job')
                ),
                'public' => true,
                'has_archive' => true,
                'rewrite' => array('slug' => 'jobs'),
                'supports' => array('custom-fields'),
            )
        );
        }
    }
    add_action('init', 'create_jobs_post_type');

    function my_rewrite_flush() {

        if (!post_type_exists('jobs')){
            create_jobs_post_type();
            flush_rewrite_rules();
        }
    }
    add_action('after_switch_theme', 'my_rewrite_flush');
?>