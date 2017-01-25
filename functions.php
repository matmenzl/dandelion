<?php 

show_admin_bar( false );

// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

// add_action( 'after_setup_theme', 'custom_theme_setup' );

add_theme_support( 'post-thumbnails' );

add_image_size( 'video-thumb', 300, 9999 ); //300 pixels wide (and unlimited height)

/**
 * Comments Callback.
 */
require get_template_directory() . '/inc/comments-callback.php';



//enqueues our locally supplied font awesome stylesheet
function enqueue_our_required_stylesheets(){
  wp_enqueue_style('font-awesome', get_stylesheet_directory_uri() . '/css/font-awesome.css'); 
  wp_enqueue_style('font-awesome', get_stylesheet_directory_uri() . '/css/font-awesome.min.css'); 
  wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Lato:300,400,700,900|Roboto:100,300,400,500,700,900', false );
}
add_action('wp_enqueue_scripts','enqueue_our_required_stylesheets');



function theme_styles() {
  wp_enqueue_style( 'timeline', get_template_directory_uri() . '/css/style_timeline.css' );
  wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css');
  wp_enqueue_style( 'modern_business', get_template_directory_uri() . '/css/modern-business.css');
  wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css');
  wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css' );
  wp_enqueue_style( 'comments', get_template_directory_uri() . '/css/comments.css' );


}

add_action( 'wp_enqueue_scripts', 'theme_styles' );


function theme_js() {

  global $wp_scripts;

  wp_register_script( 'html5_shiv', 'https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js', '', '', false);
  wp_register_script( 'respond_js', 'https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js', '', '', false);
  $wp_scripts->add_data( 'html5_shiv', 'conditional', 'lt IE 9' );
  $wp_scripts->add_data( 'respond_js', 'conditional', 'lt IE 9' );
  wp_enqueue_script( 'main_js', get_template_directory_uri() . '/main.js', array('jquery',''), '', true );
  wp_enqueue_script( 'jquery-easing', get_template_directory_uri() . '/js/jquery.easing.1.3.js', array() );
  wp_enqueue_script( 'map', get_template_directory_uri() . '/js/map.js', array() );
  wp_enqueue_script( 'lettering_js', get_template_directory_uri() . '/js/jquery.lettering.js', array('jquery') );
  wp_enqueue_script( 'theme_js', get_template_directory_uri() . '/js/theme.js', array());
  wp_enqueue_script( 'sameheight_js', get_template_directory_uri() . '/js/sameheightjs.js', array());
  wp_enqueue_script( 'jumble_js', get_template_directory_uri() . '/js/jumble.js', array('jquery', ''), true );
  // wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.js', array('jquery'), '', true );
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

// create_widget( 'Front Page Left', 'front-left', 'Displays on the left of the homepage' );
// create_widget( 'Front Page Center', 'front-center', 'Displays in the center of the homepage' );
// create_widget( 'Front Page Right', 'front-right', 'Displays on the right of the homepage' );
// create_widget( 'Front Page Left Bottom Row', 'bottom-front-left', 'Displays on the right of the homepage' );
// create_widget( 'Front Page Center Bottom Row', 'bottom-front-center', 'Displays on the right of the homepage' );
// create_widget( 'Front Page Right Bottom Row', 'bottom-front-right', 'Displays on the right of the homepage' );

create_widget( 'Page Sidebar', 'page', 'Page Sidebar' );
create_widget( 'Blog Sidebar', 'blog', 'Blog Sidebar' );
create_widget( 'Lernphilosophie Sidebar', 'lernphilosophie', 'Lernphilosophie Sidebar' );
create_widget( 'Kosten Sidebar', 'kosten', 'Kosten Sidebar' );
create_widget( 'FAQ Sidebar', 'faq', 'FAQ Sidebar' );





function google_fonts() {

wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900', false ); 
wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Vidaloka', false ); 
}

add_action( 'wp_enqueue_scripts', 'google_fonts' );


function wpse_allowedtags() {
    // Add custom tags to this string
        return '<script>,<style>,<br>,<em>,<i>,<ul>,<ol>,<li>,<a>,<p>,<img>,<video>,<audio>';
    }

if ( ! function_exists( 'wpse_custom_wp_trim_excerpt' ) ) : 

    function wpse_custom_wp_trim_excerpt($wpse_excerpt) {
    global $post;
    $raw_excerpt = $wpse_excerpt;
        if ( '' == $wpse_excerpt ) {

            $wpse_excerpt = get_the_content('');
            $wpse_excerpt = strip_shortcodes( $wpse_excerpt );
            $wpse_excerpt = apply_filters('the_content', $wpse_excerpt);
            $wpse_excerpt = str_replace(']]>', ']]>', $wpse_excerpt);
            $wpse_excerpt = strip_tags($wpse_excerpt, wpse_allowedtags()); /*IF you need to allow just certain tags. Delete if all tags are allowed */

            //Set the excerpt word count and only break after sentence is complete.
                $excerpt_word_count = 75;
                $excerpt_length = apply_filters('excerpt_length', $excerpt_word_count);
                $tokens = array();
                $excerptOutput = '';
                $count = 0;

                // Divide the string into tokens; HTML tags, or words, followed by any whitespace
                preg_match_all('/(<[^>]+>|[^<>\s]+)\s*/u', $wpse_excerpt, $tokens);

                foreach ($tokens[0] as $token) { 

                    if ($count >= $excerpt_word_count && preg_match('/[\,\;\?\.\!]\s*$/uS', $token)) {
                    // Limit reached, continue until , ; ? . or ! occur at the end
                        $excerptOutput .= trim($token);
                        break;
                    }

                    // Add words to complete sentence
                    $count++;

                    // Append what's left of the token
                    $excerptOutput .= $token;
                }

            $wpse_excerpt = trim(force_balance_tags($excerptOutput));

                

                //$pos = strrpos($wpse_excerpt, '</');
                //if ($pos !== false)
                // Inside last HTML tag
                //$wpse_excerpt = substr_replace($wpse_excerpt, $excerpt_end, $pos, 0); /* Add read more next to last word */
                //else
                // After the content
                $wpse_excerpt .= $excerpt_end; /*Add read more in new paragraph */

            return $wpse_excerpt;   

        }
        return apply_filters('wpse_custom_wp_trim_excerpt', $wpse_excerpt, $raw_excerpt);
    }

endif; 

remove_filter('get_the_excerpt', 'wp_trim_excerpt');
add_filter('get_the_excerpt', 'wpse_custom_wp_trim_excerpt');


function exclude_category($query) {
if ( $query->is_home() ) {
$query->set('cat', '-1, -2, -5');
}
return $query;
}
add_filter('pre_get_posts', 'exclude_category');


register_sidebar( array(
  'name'          => __( 'Contact', 'dandelion' ),
  'id'            => 'contact',
  'description'   => '',
  'before_widget' => '<aside id="%1$s" class="widget %2$s">',
  'after_widget'  => '</aside>',
  'before_title'  => '<h4 class="widget-title">',
  'after_title'   => '</h4>',
) );


register_sidebar( array(
  'name'          => __( 'Application', 'dandelion' ),
  'id'            => 'application',
  'description'   => '',
  'before_widget' => '<aside id="%1$s" class="widget %2$s">',
  'after_widget'  => '</aside>',
  'before_title'  => '<h4 class="widget-title">',
  'after_title'   => '</h4>',
) );

// breadcrumb
function nav_breadcrumb() {
 
 $delimiter = '&raquo;';
 $home = 'Home'; 
 $before = '<span class="current-page">'; 
 $after = '</span>'; 
 
 if ( !is_home() && !is_front_page() || is_paged() ) {
 
 // echo '<nav class="breadcrumb">Du bist hier: ';
 
 global $post;
 $homeLink = get_bloginfo('url');
 echo '<a href="' . $homeLink . '">' . $home . '</a> ' . $delimiter . ' ';
 
 if ( is_category()) {
 global $wp_query;
 $cat_obj = $wp_query->get_queried_object();
 $thisCat = $cat_obj->term_id;
 $thisCat = get_category($thisCat);
 $parentCat = get_category($thisCat->parent);
 if ($thisCat->parent != 0) echo(get_category_parents($parentCat, TRUE, ' ' . $delimiter . ' '));
 echo $before . single_cat_title('', false) . $after;
 
 } elseif ( is_day() ) {
 echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
 echo '<a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $delimiter . ' ';
 echo $before . get_the_time('d') . $after;
 
 } elseif ( is_month() ) {
 echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
 echo $before . get_the_time('F') . $after;
 
 } elseif ( is_year() ) {
 echo $before . get_the_time('Y') . $after;
 
 } elseif ( is_single() && !is_attachment() ) {
 if ( get_post_type() != 'post' ) {
 $post_type = get_post_type_object(get_post_type());
 $slug = $post_type->rewrite;
 echo '<a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a> ' . $delimiter . ' ';
 echo $before . get_the_title() . $after;
 } else {
 $cat = get_the_category(); $cat = $cat[0];
 echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
 echo $before . get_the_title() . $after;
 }
 
 } elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
 $post_type = get_post_type_object(get_post_type());
 echo $before . $post_type->labels->singular_name . $after;
 

 } elseif ( is_attachment() ) {
 $parent = get_post($post->post_parent);
 $cat = get_the_category($parent->ID); $cat = $cat[0];
 echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
 echo '<a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a> ' . $delimiter . ' ';
 echo $before . get_the_title() . $after;
 
 } elseif ( is_page() && !$post->post_parent ) {
 echo $before . get_the_title() . $after;
 
 } elseif ( is_page() && $post->post_parent ) {
 $parent_id = $post->post_parent;
 $breadcrumbs = array();
 while ($parent_id) {
 $page = get_page($parent_id);
 $breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
 $parent_id = $page->post_parent;
 }
 $breadcrumbs = array_reverse($breadcrumbs);
 foreach ($breadcrumbs as $crumb) echo $crumb . ' ' . $delimiter . ' ';
 echo $before . get_the_title() . $after;
 
 } elseif ( is_search() ) {
 echo $before . 'Ergebnisse für Ihre Suche nach "' . get_search_query() . '"' . $after;
 
 } elseif ( is_tag() ) {
 echo $before . 'Beiträge mit dem Schlagwort "' . single_tag_title('', false) . '"' . $after;

 } elseif ( is_tag() ) {
 echo $before . 'Beiträge mit dem Schlagwort "' . single_tag_title('', false) . '"' . $after;

 } elseif ( is_404() ) {
 echo $before . 'Fehler 404' . $after;
 }
 
 if ( get_query_var('paged') ) {
 if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';
 echo ': ' . __('Seite') . ' ' . get_query_var('paged');
 if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';
 }
 
 echo '</nav>';
 
 } 
} 


?>