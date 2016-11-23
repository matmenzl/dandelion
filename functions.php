<?php 

show_admin_bar( false );



add_theme_support( 'post-thumbnails' );

//enqueues our locally supplied font awesome stylesheet
function enqueue_our_required_stylesheets(){
  wp_enqueue_style('font-awesome', get_stylesheet_directory_uri() . '/css/font-awesome.css'); 
  wp_enqueue_style('font-awesome', get_stylesheet_directory_uri() . '/css/font-awesome.min.css'); 
}
add_action('wp_enqueue_scripts','enqueue_our_required_stylesheets');



function theme_styles() {

  wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css');
  wp_enqueue_style( 'modern_business', get_template_directory_uri() . '/css/modern-business.css');
  wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css');
  wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css' );

}

add_action( 'wp_enqueue_scripts', 'theme_styles' );


function theme_js() {

  global $wp_scripts;

  wp_register_script( 'html5_shiv', 'https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js', '', '', false);
  wp_register_script( 'respond_js', 'https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js', '', '', false);

  $wp_scripts->add_data( 'html5_shiv', 'conditional', 'lt IE 9' );
  $wp_scripts->add_data( 'respond_js', 'conditional', 'lt IE 9' );

  wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );
  wp_enqueue_script( 'main_js', get_template_directory_uri() . '/main.js', array('jquery','bootstrap_js'), '', true );
  wp_enqueue_script( 'theme_js', get_template_directory_uri() . '/js/theme.js', array('jquery', 'bootstrap_js'), '', true );
  wp_enqueue_script( 'jquery-easing', get_template_directory_uri() . '/js/jquery.easing.1.3.js', array() );
}

add_action( 'wp_enqueue_scripts', 'theme_js' );

// hide admin bar for administrators
// add_filter( 'show_admin_bar', '__return_false' );

add_theme_support( 'menus' );

function register_theme_menus() {
    register_nav_menus(
      array(
          'header-menu' => __( 'Header Menu' )
        )
      );
}

add_action( 'init', 'register_theme_menus' );



function create_widget( $name, $id, $description ) {

  register_sidebar(array(
    'name' => __( $name ),   
    'id' => $id, 
    'description' => __( $description ),
    'before_widget' => '<div class="widget">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
  ));

}

create_widget( 'Front Page Left', 'front-left', 'Displays on the left of the homepage' );
create_widget( 'Front Page Center', 'front-center', 'Displays in the center of the homepage' );
create_widget( 'Front Page Right', 'front-right', 'Displays on the right of the homepage' );

create_widget( 'Page Sidebar', 'page', 'Page Sidebar' );
create_widget( 'Blog Sidebar', 'blog', 'Blog Sidebar' );




function google_fonts() {

wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900', false ); 
wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Vidaloka', false ); 
}

add_action( 'wp_enqueue_scripts', 'google_fonts' );

















?>