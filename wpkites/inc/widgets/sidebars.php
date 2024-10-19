<?php

add_action('widgets_init', 'wpkites_widgets_init');

function wpkites_widgets_init() {

    /* sidebar */

    register_sidebar(array(
        'name' => esc_html__('Sidebar widget area', 'wpkites' ),
        'id' => 'sidebar-1',
        'description' => esc_html__('Add widgets in sidebar widget area', 'wpkites' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Footer widget', 'wpkites') . ' 1',
        'id' => 'footer-sidebar-1',
        'description' => esc_html__('Add widgets in footer widget area', 'wpkites') . ' 1',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Footer widget', 'wpkites') . ' 2',
        'id' => 'footer-sidebar-2',
        'description' => esc_html__('Add widgets in footer widget area', 'wpkites') . ' 2',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Footer widget', 'wpkites') . ' 3',
        'id' => 'footer-sidebar-3',
        'description' => esc_html__('Add widgets in footer widget area', 'wpkites') . ' 3',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Footer widget', 'wpkites') . ' 4',
        'id' => 'footer-sidebar-4',
        'description' => esc_html__('Add widgets in footer widget area', 'wpkites') . ' 4',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => esc_html__('WooCommerce sidebar widget area', 'wpkites' ),
        'id' => 'woocommerce',
        'description' => esc_html__('Add widgets in WooCommerce sidebar widget area', 'wpkites' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}