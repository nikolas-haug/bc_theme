<?php

// Setup
define('BOILER_ROOM_DEV_MODE', true); // defines dev or production mode

// Includes
include( get_theme_file_path( '/includes/enqueue.php' ));
include( get_theme_file_path( '/includes/setup.php' ));
include( get_theme_file_path( '/includes/custom-nav-walker.php' ));
include( get_theme_file_path( '/includes/widgets.php' ));
include( get_theme_file_path( '/includes/theme-customizer.php' ));

// Hooks - Plugin API
add_action( 'wp_enqueue_scripts', 'boiler_room_enqueue' );
add_action( 'after_setup_theme', 'boiler_room_setup_theme' );
add_action( 'widgets_init', 'boiler_room_widgets' );
add_action( 'customize_register', 'boiler_room_cusotomize_register' );

// Shortcodes

// Custom
include( get_theme_file_path( '/custom/custom-bg-callback.php' ));