<?php
  function wpevkgrix_styles_scripts() {
    /** REGISTER STYLES **/
    wp_register_style('google-fonts', 'https://fonts.googleapis.com/css?family=Cabin:400,500,600,700|Karla:400,700', array(), '1.0.0', 'all');
    wp_register_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.1', 'all');
    wp_register_style('fontawesome-css', get_template_directory_uri() . '/css/all.min.css', array(), '5.6.3', 'all');
    wp_register_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.1.3', 'all');
    wp_register_style( 'main-css', get_template_directory_uri() . '/css/main.css', array('normalize'), '1.0.0', 'all' );
    wp_register_style( 'style', get_stylesheet_uri() );

    /** ENQUEUE STYLES **/
    wp_enqueue_style('google-fonts');
    wp_enqueue_style('normalize');
    wp_enqueue_style('fontawesome-css');
    wp_enqueue_style('bootstrap-css');
    wp_enqueue_style('main-css');
    wp_enqueue_style('style');

    /** REGISTER SCRIPTS **/
    wp_register_script('popper', get_template_directory_uri() . '/js/popper.min.js', array(), '1.0.0', true);
    wp_register_script('fontawesome-js', get_template_directory_uri() . '/js/all.min.js', array(), '5.6.3', true);
    wp_register_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '4.1.3', true);

    /** ENQUEUE SCRIPTS **/

    wp_enqueue_script('popper');
    wp_enqueue_script('fontawesome-js');
    wp_enqueue_script('bootstrap-js');
  }
  add_action('wp_enqueue_scripts', 'wpevkgrix_styles_scripts');

  /** MAIN CONFIGURATION **/
  function wpevkgrix_config() {
    /** THEME SUPPORT **/
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
  }
  add_action('after_setup_theme', 'wpevkgrix_config');

  /** ADD MENUS **/
  function wpevkgrixdorf_menus() {
    /** NAVIGATION **/
    register_nav_menus(array(
      'header-menu' => __('Header Menu', 'wpevkgrix'),
      'footer-menu' => __('Footer Menu', 'wpevkgrix')
    ));
  }
  add_action('init', 'wpevkgrixdorf_menus');
