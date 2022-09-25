<?php

add_action('after_setup_theme','developerportfoliotheme');

if(!function_exists('developerportfoliotheme')){

    function developerportfoliotheme(){
	/**
	 * Make theme available for translation.
	 * Translations can be placed in the /languages/ directory.
	 */
    load_theme_textdomain( 'classicportfolio', get_template_directory() .'/languages' );

    add_theme_support('post-formats', array ('aside','link','gallery','qoute','video'));
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'editor-styles' );
    add_theme_support( 'html5', array('style','script', ) );
    add_theme_support( 'automatic-feed-links' );


    register_nav_menus( array(
        'primary' => __('Primary Menu', 'classicportfolio'),
        'secondary' => __('Secondary Menu', 'classicportfolio')
    ) );


        if(!function_exists('portfoliothemescript')){

            function portfoliothemescript(){

                wp_enqueue_style( 'style', get_stylesheet_uri() );

                // <!-- CSS FILES -->
                wp_register_style( 'fontlink', 'https://fonts.googleapis.com' );
                wp_enqueue_style('fontlink');
                
                wp_register_style( 'fontlink2', 'https://fonts.gstatic.com' );
                wp_enqueue_style('fontlink2');
                
                wp_register_style( 'fontlink3', 'https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap' );
                wp_enqueue_style('fontlink3');
                

                wp_enqueue_style( 'bscss', get_template_directory_uri() . '/css/bootstrap.min.css', array(), null, 'all');
                wp_enqueue_style( 'bsicon', get_template_directory_uri() . '/css/bootstrap-icons.css', array(), null, 'all');
                wp_enqueue_style( 'bspopup', get_template_directory_uri() . '/css/magnific-popup.css', array(), null, 'all');
                wp_enqueue_style( 'bstmpstyle', get_template_directory_uri() . '/css/templatemo-first-portfolio-style.css', array(), null, 'all');



                // <!-- /.footer-->
                // <!-- JAVASCRIPT FILES PATHWAY-->
                wp_enqueue_script( 'jqueryjs', get_template_directory_uri() . '/js/jquery.min.js', null, null, true);
                wp_enqueue_script( 'bsjs', get_template_directory_uri() . '/js/bootstrap.min.js', null, null, true); 
                wp_enqueue_script( 'stickyjs', get_template_directory_uri() . '/js/jquery.sticky.js', null, null, true);
                wp_enqueue_script( 'scrolljs', get_template_directory_uri() . '/js/click-scroll.js', null, null, true); 
                wp_enqueue_script( 'magnificjs', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', null, null, true);
                wp_enqueue_script( 'optionsjs', get_template_directory_uri() . '/js/magnific-popup-options.js', null, null, true); 
                wp_enqueue_script( 'customjs', get_template_directory_uri() . '/js/custom.js', null, null, true);
                
                
                if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
                    wp_enqueue_script( 'comment-reply' );
                }
            
            }

        }

        add_action( 'wp_enqueue_scripts', 'portfoliothemescript' );

    }

} 


?>