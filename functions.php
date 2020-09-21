<?php
//stylesheet
function load_stylesheets()
{
    wp_register_style('bootstrap',get_template_directory_uri() .'/css/bootstrap.min.css',
    array(),false,'all');
    wp_enqueue_style('bootstrap');
    wp_register_style('main',get_template_directory_uri() .'/css/main.css',
    array(),false,'all');
    wp_enqueue_style('main');

}
add_action('wp_enqueue_scripts','load_stylesheets');
//js
function include_jquery()
{
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery',get_template_directory_uri() .'/js/jquery-3.5.1.min.js','',1,true);
    add_action('wp_enqueue_scripts','jquery');
    wp_deregister_script('scripts');
    wp_enqueue_script('scripts',get_template_directory_uri() .'/js/scripts.js','',1,true);
    add_action('wp_enqueue_scripts','scripts');
}
add_action('wp_enqueue_scripts','include_jquery');
//theme support
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');
//menus
register_nav_menus(
    array(
        'top-menu'=>'top menu Location',
        'mobile-menu'=>'mobile menu Location',
        'footer-menu'=>'footer menu Location',
    )
);
//custom Images Sizes
add_image_size('blog-large',800,400,true);
add_image_size('blog-small',300,200,true);
//custom widgets
function my_sidebars()
{
  register_sidebar(
      array(
          'name'=>'Page Sidebar',
          'id'=>'page-sidebar',
          'before_title'=> '<h3 class="widget-title">',
          'after_title'=> '</h3>'
      )
      );
 register_sidebar(
        array(
            'name'=>'Blog Sidebar',
            'id'=>'blog-sidebar',
            'before_title'=>'<h3 class="widget-title">',
            'after_title'=>'</h3>'
        )
        );
}
add_action('widgets_init','my_sidebars');
