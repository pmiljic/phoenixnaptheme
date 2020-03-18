<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

// Load Stylesheets
function load_css()
{
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all');
    wp_enqueue_style('main');
}
add_action('wp_enqueue_scripts', 'load_css');

// Load Javascript
function load_js()
{
    wp_enqueue_script('jquery');
    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, true);
    wp_enqueue_script('bootstrap');
}
add_action('wp_enqueue_scripts', 'load_js');

//Carbon Fields
add_action('carbon_fields_register_fields', 'crb_attach_theme_options');
function crb_attach_theme_options()
{
    Container::make('theme_options', 'Theme Options')
        ->add_fields(array(
            Field::make('color', 'crb_header_color', __('Header Color', 'phoenixnaptheme')),
            Field::make('complex', 'crb_contact_menu', __('Contact Entry', 'phoenixnaptheme'))
                ->add_fields(array(
                    Field::make('text', 'title', __('Title', 'phoenixnaptheme')),
                    Field::make('text', 'icon_name', __('Icon Name', 'phoenixnaptheme'))
                )),
            Field::make('image', 'crb_menu_logo_photo',  __('Logo', 'phoenixnaptheme'))
                ->set_value_type('url'),
            Field::make('complex', 'crb_slide', __('Slider', 'phoenixnaptheme'))
                ->add_fields(array(
                    Field::make('text', 'pre_title', __('Pre Title', 'phoenixnaptheme')),
                    Field::make('text', 'title', __('Title', 'phoenixnaptheme')),
                    Field::make('text', 'caption', __('Caption', 'phoenixnaptheme')),
                    Field::make('text', 'btn_text', __('Button Text', 'phoenixnaptheme')),
                )),
            Field::make('image', 'crb_banner_photo', __('Photo', 'phoenixnaptheme'))
                ->set_value_type('url')
        ));
    Container::make('post_meta', 'Custom Data', __('Custom Data', 'phoenixnaptheme'))
        ->where('post_type', '=', 'sections')
        ->add_fields(array(
            Field::make('complex', 'crb_feature_list',  __('Feature list', 'phoenixnaptheme'))
                ->add_fields(array(
                    Field::make('text', 'list_item', __('List item', 'phoenixnaptheme'))
                )),
            Field::make('complex', 'crb_company_logos',  __('Company Links', 'phoenixnaptheme'))
                ->add_fields(array(
                    Field::make('image', 'company_logo', __('Company Logo', 'phoenixnaptheme'))
                        ->set_value_type('url'),
                    Field::make('text', 'link', __('Link', 'phoenixnaptheme'))
                ))
        ));
}

add_action('after_setup_theme', 'crb_load');
function crb_load()
{
    require_once('vendor/autoload.php');
    \Carbon_Fields\Carbon_Fields::boot();
}

// Menus
register_nav_menus(
    array(
        'top-menu' => __('Top Menu Location', 'phoenixnaptheme'),
    )

);

// Custom post type
function custom_post_type()
{
    $args = array(
        'labels' => array(
            'name' => 'Sections',
            'singular_name' => 'Section',
        ),
        'hierarchical' => true, //false post, true page
        'public' => true,
        'menu_icon' => 'dashicons-admin-multisite',
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
    );
    register_post_type('sections', $args);
}
add_action('init', 'custom_post_type');

// Theme Options
add_theme_support('post-thumbnails');
