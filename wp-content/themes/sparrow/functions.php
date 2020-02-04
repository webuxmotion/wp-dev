<?php

add_action( 'wp_enqueue_scripts', 'style_theme' );
add_action( 'wp_footer', 'script_theme' );
add_action( 'after_setup_theme', 'theme_register_nav_menus' );
add_action( 'widgets_init', 'register_my_widgets' );

function register_my_widgets(){
	register_sidebar( array(
		'name' => "Правая боковая панель сайта",
		'id' => 'right-sidebar',
    'description' => 'Эти виджеты будут показаны в правой колонке сайта',
    'before_widget' => '<div class="widget %2$s">',
    'after_widget'  => "</div>\n",
    'before_title'  => '<h5 class="widget-title">',
		'after_title'   => "</h5>\n",
	) );
}

function theme_register_nav_menus() {
  register_nav_menus(
    array(
      'new-menu' => __( 'New Menu' ),
      'another-menu' => __( 'Another Menu' ),
      'an-extra-menu' => __( 'An Extra Menu' )
    )
  );
}

function style_theme() {
  wp_enqueue_style('style', get_stylesheet_uri());
  wp_enqueue_style('style-default', getCssPath() . 'default.css');
  wp_enqueue_style('style-layout', getCssPath() . 'layout.css');
  wp_enqueue_style('style-media-queries', getCssPath() . 'media-queries.css');
}

function script_theme() {
  addJquery();
  wp_enqueue_script('script-modernizr', getJsPath() . 'modernizr.js');
  wp_enqueue_script('script-jquery-migrate', getJsPath() . 'jquery-migrate-1.2.1.min.js');
  wp_enqueue_script('script-jquery-flex-slider', getJsPath() . 'jquery.flexslider.js');
  wp_enqueue_script('script-doubletaptogo', getJsPath() . 'doubletaptogo.js');
  wp_enqueue_script('script-init', getJsPath() . 'init.js');
}

function addJquery() {
  // отменяем зарегистрированный jQuery
  wp_deregister_script('jquery-core');
  wp_deregister_script('jquery');

  // регистрируем
  wp_register_script( 'jquery-core', 'http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js', false, null, true );
  wp_register_script( 'jquery', false, array('jquery-core'), null, true );

  // подключаем
  wp_enqueue_script( 'jquery' );
}

function getAssetsPath() {
  return get_template_directory_uri() . '/assets/';
}

function getCssPath() {
  return getAssetsPath() . 'css/';
}

function getJsPath() {
  return getAssetsPath() . 'js/';
}