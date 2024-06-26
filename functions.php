<?php 
/**
 * Theme Functions and Definations
 */

 if (! function_exists('mse_book_setup')) {
    function mse_book_setup(){

        /**
         * Make theme availble for translations.
         */
        
         load_theme_textdomain('mse-book-shop', get_template_directory() . '/languages');

         /**
          * Include theme supports
          */

          add_theme_support('automatic-feed-links'); //Add default posts and comments RSS feed links to head.
          add_theme_support('title-tag'); //Let WordPress manage the document title.
          add_theme_support('post-thumbnails'); //Enable support for Post Thumbnails on posts and pages.
          add_theme_support('aside', 'gallery', 'link', 'image', 'quote', 'video', 'audio'); //Add post type format support.

          /**
           * Add support for core custom logo.
           */

           add_theme_support( 'custom-logo', [
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		] );

           /**
            * Register menu locations
            */

            register_nav_menus(
                [
                    'primary' => esc_html__('Header Menu', 'mse-book-shop'),
                ]
        );
    }
 }

 add_action('after_setup_theme', 'mse_book_setup');

 /**
  * Include theme scripts and styles
  */

  function mse_book_shop_assets(){
    // Register style.
    wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', [], wp_rand(), 'all');
    wp_register_style('mse-book-shop-main', get_template_directory_uri() . '/assets/css/main.css', ['bootstrap'], wp_rand(), 'all');

    // Register scripts
    wp_register_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', [], wp_rand(), true);
    wp_register_script('mse-book-shop-main', get_template_directory_uri() . '/assets/js/main.js', [], wp_rand(), true);

    // Enqueue scripts.
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('mse-book-shop-main');

    wp_enqueue_script('bootstrap');
    wp_enqueue_script('mse-book-shop-main');
  }

  add_action('wp_enqueue_scripts', 'mse_book_shop_assets');

  /**
   * Widges function
   */

   function mse_bs_theme_widgets(){
    register_sidebar(
        [
            'name' => __('Footer Widget', 'mse-book-shop'),
            'id'   => 'mse-bs-footer-wdg',
            'before_widget' => '<div class="text-center">',
            'after_widget' => '</div>',
            'before_title' => '',
            'after_title' => '',
        ]
    );
   }

   add_action('widgets_init', 'mse_bs_theme_widgets');