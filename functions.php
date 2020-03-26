<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

// Load Stylesheets
function load_css()
{
	wp_register_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
	wp_enqueue_style('bootstrap-css');

	wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap', '', '', 'all');
	wp_enqueue_style('fontawesome', '', '', '', 'all');

	wp_enqueue_style('fontawesome-css', get_template_directory_uri() . '/fontawesome/css/all.min.css', false, 'all');
	wp_register_style('main-css', get_template_directory_uri() . '/css/main.css', array(), false, 'all');
	wp_enqueue_style('main-css');
}

add_action('wp_enqueue_scripts', 'load_css');

// Load Javascript
function load_js()
{
	wp_register_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', ['jquery'], false, true);
	wp_enqueue_script('bootstrap-js');

	wp_enqueue_script("slim-js", get_template_directory_uri() . "/js/jquery-3.3.1.slim.min.js", [], '1.0', true);
	wp_enqueue_script("custom-js", get_template_directory_uri() . "/assets/js/ajax.js", [], '1.0', true);
}

add_action('wp_enqueue_scripts', 'load_js');

//Carbon Fields
add_action('carbon_fields_register_fields', 'crb_attach_theme_options');
function crb_attach_theme_options()
{
	Container::make('theme_options', 'Theme Options')
		->add_fields(array(
			Field::make('color', 'crb_header_color', __('Header Background Color', 'phoenixnaptheme')),
			Field::make('complex', 'crb_contact_menu', __('Contact Fields', 'phoenixnaptheme'))
				->add_fields(array(
					Field::make('text', 'title', __('Title', 'phoenixnaptheme')),
					Field::make('text', 'phone', __('Phone Number', 'phoenixnaptheme')),
					Field::make('text', 'icon_name', __('Icon Name', 'phoenixnaptheme'))
				)),
			Field::make('image', 'crb_menu_logo_photo', __('Menu Logo', 'phoenixnaptheme'))
				->set_value_type('url'),
			Field::make('complex', 'crb_slide', __('Banner slide', 'phoenixnaptheme'))
				->add_fields(array(
					Field::make('text', 'pre_title', __('Pre Title', 'phoenixnaptheme')),
					Field::make('text', 'title', __('Title', 'phoenixnaptheme')),
					Field::make('text', 'caption', __('Caption', 'phoenixnaptheme')),
					Field::make('text', 'btn_text', __('Button Text', 'phoenixnaptheme')),
					Field::make('image', 'photo', __('Banner image', 'phoenixnaptheme'))
						->set_value_type('url')
				)),
			Field::make('text', 'crb_contact_form_title', __('Contact Form Title', 'phoenixnaptheme')),
			Field::make('complex', 'crb_contact_form_description', __('Contact Form Description', 'phoenixnaptheme'))
				->add_fields(array(
					Field::make('text', 'paragraph', __('Description', 'phoenixnaptheme'))
				)),
			Field::make('text', 'crb_contact_form_max_chars', __('Contact Form Tell us max characters (Number)', 'phoenixnaptheme'))
				->set_default_value(10),
			Field::make('color', 'crb_contact_info_color', __('Contact Info Background Color', 'phoenixnaptheme')),
			Field::make('image', 'crb_footer_logo_photo', __('Footer Logo', 'phoenixnaptheme'))
				->set_value_type('url'),
			Field::make('text', 'crb_copyrights', __('Copyrights', 'citadelatheme')),
			Field::make('text', 'crb_google_plus', __('Google+ link', 'citadelatheme')),
			Field::make('text', 'crb_facebook', __('Facebook link', 'citadelatheme')),
			Field::make('text', 'crb_dribble', __('Dribble link', 'citadelatheme')),
			Field::make('text', 'crb_twitter', __('Twitter link', 'citadelatheme')),
			Field::make('text', 'crb_instagram', __('Instagram link', 'citadelatheme'))
		));
	Container::make('post_meta', 'Custom Data', __('Custom Data', 'phoenixnaptheme'))
		->where('post_type', '=', 'sections')
		->add_fields(array(
			Field::make('complex', 'crb_feature_list', __('Feature list', 'phoenixnaptheme'))
				->add_fields(array(
					Field::make('text', 'list_item', __('List item', 'phoenixnaptheme'))
				)),
			Field::make('complex', 'crb_company_logos', __('Company Links', 'phoenixnaptheme'))
				->add_fields(array(
					Field::make('image', 'company_logo', __('Company Logo', 'phoenixnaptheme'))
						->set_value_type('url'),
					Field::make('text', 'link', __('Link', 'phoenixnaptheme'))
				)),
			Field::make('select', 'crb_reverse_image', __('Text - Image order', 'phoenixnaptheme'))
				->set_options(array(
					'no'  => __('Normal order text - image', 'phoenixnaptheme'),
					'yes' => __('Reverse order image - text', 'phoenixnaptheme')
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
		'top-menu'    => __('Top Menu Location', 'phoenixnaptheme'),
		'footer-menu' => __('Footer Menu Location', 'phoenixnaptheme'),
	)

);

// Custom post type
function custom_post_type()
{
	$args = array(
		'labels'       => array(
			'name'          => 'Sections',
			'singular_name' => 'Section',
		),
		'hierarchical' => false,
		'public'       => true,
		'menu_icon'    => 'dashicons-admin-multisite',
		'has_archive'  => true,
		'supports'     => array('title', 'editor', 'thumbnail'),
	);
	register_post_type('sections', $args);
}

add_action('init', 'custom_post_type');

// Theme Options
add_theme_support('post-thumbnails');
add_theme_support('widgets');


//Register Sidebars
function my_sidebars()
{
	register_sidebar(
		array(
			'name' => 'Footer Sidebar 1',
			'id'   => 'footer-sidebar1'
		)
	);

	register_sidebar(
		array(
			'name' => 'Footer Sidebar 2',
			'id'   => 'footer-sidebar2'
		)
	);

	register_sidebar(
		array(
			'name' => 'Footer Sidebar 3',
			'id'   => 'footer-sidebar3'
		)
	);

	register_sidebar(
		array(
			'name' => 'Footer Sidebar 4',
			'id'   => 'footer-sidebar4'
		)
	);

	register_sidebar(
		array(
			'name' => 'Footer Sidebar 5',
			'id'   => 'footer-sidebar5'
		)
	);

	register_sidebar(
		array(
			'name' => 'Footer Sidebar 6',
			'id'   => 'footer-sidebar6'
		)
	);
}

add_action('widgets_init', 'my_sidebars');
