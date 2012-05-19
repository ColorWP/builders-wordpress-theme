<?php
	
	// Add RSS links to <head> section
	add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'post-thumbnails' );
	
	// Load jQuery
	if ( !is_admin() ) {
           function register_jquery(){
                wp_deregister_script('jquery');
                wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"), false);
                wp_enqueue_script('jquery');
           }
           add_action('wp_enqueue_scripts', 'register_jquery');
	}
	
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
	// Declare sidebar widget zone
    if (function_exists('register_sidebar')) {
    	
        
        register_sidebar(array(
            'name'  => 'Footer Left',
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '<h2>',
            'after_title' => '</h2>',
        ));
        register_sidebar(array(
            'name'  => 'Footer Center',
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '<h2>',
            'after_title' => '</h2>',
        ));
        register_sidebar(array(
            'name'  => 'Footer Right',
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '<h2>',
            'after_title' => '</h2>',
        ));
        register_sidebar(array(
            'name'  => 'Left Sidebar',
            'before_widget' => '<div class="sidebar_widget">',
            'after_widget' => '</div>',
            'before_title' => '<h2>',
            'after_title' => '</h2>',
        ));
    }   
    
    register_nav_menu( 'primary', 'Primary Menu' );

?>