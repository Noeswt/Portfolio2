<?php
    function portfolio_script() {
        wp_enqueue_style( 'Righteous', '//fonts.googleapis.com/css2?family=Righteous&display=swap', array() );
        wp_enqueue_style( 'NotoSansJP', '//fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap', array() );
        wp_enqueue_style( 'font-awesome', '//kit.fontawesome.com/3101a44c6b.js', array(), '5.15.3' );
        wp_enqueue_style( 'portfolio', get_template_directory_uri() . '/css/style.css', array(), '1.0.0' ); 
        wp_enqueue_script( 'slick', get_template_directory_uri() . '/css/slick.css', array(), '1.8.0' );
        wp_enqueue_script( 'slicktheme', get_template_directory_uri() . '/css/slick-theme.css', array(), '1.8.0' );
        wp_enqueue_script( 'js', get_template_directory_uri() . '/js/script.js', array(), '1.0.0' );
        wp_enqueue_script( 'slickjs', get_template_directory_uri() . '/js/slick.js', array(), '1.8.0' );
        wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', array(), '3.5.1');
        wp_enqueue_script( 'slickjquery', '//cdn.jsdelivr.net/npm/jquery@3/dist/jquery.min.js', array(), '3.6.0');

        add_editor_style();
    }
    add_action( 'wp_enqueue_scripts', 'portfolio_script' );