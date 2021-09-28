<?php

function wpt_custom_setup()
{
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_theme_support("menus");
	register_nav_menu("header", "En tête du menu");
}

function wpt_custom_register_assets()
{
	wp_register_style("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css");
	wp_register_script("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js");

	wp_enqueue_style('bootstrap');
	wp_enqueue_script('bootstrap', null, [], false, true);
}

function wpt_custom_mav_class(array $classes): array
{
	$classes[] = 'nav-item';
	return $classes;
}

function wpt_custom_mav_link_attrs(array $attr): array
{
	$attr["class"] = 'nav-link';
	return $attr;
}

add_action('after_setup_theme', 'wpt_custom_setup');
add_action('wp_enqueue_scripts',  "wpt_custom_register_assets");
add_filter('nav_menu_css_class', "wpt_custom_mav_class");
add_filter('nav_menu_link_attributes', "wpt_custom_mav_link_attrs");
