<?php 
// menu de navegacion 
if (function_exists('register_nav_menus')){
    register_nav_menus(array('superior' => 'Menu Principal Superior'));
}


// Clase para darle formato al <a>

add_filter('nav_menu_link_attributes', 'class_menu_Prueba', 10,3);
function class_menu_Prueba($atts, $item, $args){
    $class = 'nav-link';
    $atts ['class'] = $class;
    return $atts;
}


// agrega imagen destacadas 
if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
    
 }


 // SIDEBAR
 function themename_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Primary Sidebar', 'theme_name' ),
        'id'            => 'sidebar-1',
        'before_widget' => '<aside id="%1$s" class="widget %2$s" my-3>',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

}
?>




