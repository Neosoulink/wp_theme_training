<?php

function wpt_custom_setup()
{
	add_theme_support('title-tag');
}

function wpt_custom_register_assets()
{
	wp_register_style("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css");
	wp_register_script("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js");

	wp_enqueue_style('bootstrap');
	wp_enqueue_script('bootstrap', null, [], false, true);
}

add_action('after_setup_theme', 'wpt_custom_setup');
add_action('wp_enqueue_scripts',  "wpt_custom_register_assets");
