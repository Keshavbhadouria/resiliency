<?php 


/* Add Featured Image Support To Your WordPress Theme */
function add_featured_image_support_to_day_theme() {
	add_theme_support( 'post-thumbnails' );

}
 
add_action( 'after_setup_theme', 'add_featured_image_support_to_day_theme' );

function get_the_top_ancestor_id() {
    global $post;
    if ( $post->post_parent ) {
        $ancestors = array_reverse( get_post_ancestors( $post->ID ) );
        
        return $ancestors[0];
    } else {
        return $post->ID;
    }
}
 
/* sets the excerpt length */
function customize_the_excerpt_length() {
    return 30;
}
 
add_filter( 'excerpt_length', 'customize_the_excerpt_length' );
 
/* Add Featured Image Support To Your WordPress Theme */
function add_featured_image_support_to_your_wordpress_theme() {
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'small-thumbnail', 100, 100, true );
    add_image_size( 'single-post-image', 960, 250, true );
    add_theme_support( 'post-formats', [
        'aside',
        'gallery',
        'link',
        'image',
        'quote',
        'status',
        'video',
        'audio',
        'chat',
        'standard'
    ] );
}
 
add_action( 'after_setup_theme', 'add_featured_image_support_to_your_wordpress_theme' );


//menu
register_nav_menus( array( 
        'header' => 'Header menu', 
        'footer' => 'Footer menu',
        'topbar' => 'Topbar menu'
      ) );

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);



//add active class in menu

function special_nav_class ($classes, $item) {
  if (in_array('current-menu-item', $classes) ){
    $classes[] = 'active';
  }
  return $classes;
}




// widget
if (function_exists('register_sidebar')) {

        register_sidebar(array(
                'name' => 'Widgetized Area',
                'id'   => 'katuhu',
                'description'   => 'This is a widgetized area.',
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h4>',
                'after_title'   => '</h4>'
        ));

         register_sidebar(array(
                'name' => 'Widgetized Area 1',
                'id'   => 'katuhu1',
                'description'   => 'This is a widgetized area.',
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h4>',
                'after_title'   => '</h4>'
        ));

}