<?php
// Includes
//require get_template_directory() . '/includes/widgets.php';
require get_template_directory() . '/includes/queries.php';

function gymfitness_setup() {
    // Imagenes Destacadas
    add_theme_support('post-thumbnails');

    // Titulos para SEO
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'gymfitness_setup');

function gymfitness_menus() {
    register_nav_menus( array(
        'menu-principal' => __('Menu Principal', 'gymfitness')
    ) );
}
function lapizzeria_setup(){
    //imagenes destacadas
    add_theme_support( 'post-thumbnails');
    //tamaños de imagenes
    add_image_size( 'nosotros', 437, 291, true );
    add_image_size( 'especialidades', 768, 515, true );
    add_image_size( 'especialidades_portrait', 435, 526, true );
    add_image_size( 'img-destacada', 1200, 920, true);
    add_image_size( 'thumbnail', 780, 520, true );
}
add_action( 'after_setup_theme', 'lapizzeria_setup' );
/******** CSS ********/
function paginas_styles(){
    //hojas de estilos
    wp_enqueue_style( 'normalize', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css', array(), '8.0.1' );
    wp_enqueue_style( 'slicknavcss', 'https://cdnjs.cloudflare.com/ajax/libs/SlickNav/1.0.0/slicknav.min.css', array('normalize'), '1.0.10' );
    wp_enqueue_style( 'googlefonts', 'https://fonts.googleapis.com/css2?family=Open+Sans&family=Raleway:wght@400;700;900&display=swap', array(), '1.0.0' );
    wp_enqueue_style( 'style', get_stylesheet_uri(), array('normalize'), '1.0.0');

    //scripts
    wp_enqueue_script( 'slicknavjs', 'https://cdnjs.cloudflare.com/ajax/libs/SlickNav/1.0.0/jquery.slicknav.min.js', array('jquery'), '1.0.10', true);
    wp_enqueue_script( 'scripts', get_template_directory_uri() .'/js/scripts.js', array('jquery') ,'1.0.0', true);
    wp_register_script( 'typing', get_template_directory_uri() .'/js/typing.js', array('') ,'1.0.0', true);
    wp_enqueue_script( 'typing' );
}
add_action( 'wp_enqueue_scripts', 'paginas_styles');

/********** Funcion de menu *********/
function paginas_menus(){
    register_nav_menus( array(
        'header-menu' => 'Header Menu',
        'redes-sociales' => 'Redes Sociales'

    ));
}
add_action( 'init', 'paginas_menus');

/** function widgets() **/
function paginas_widgets(){
    register_sidebar( array(
        'name' => 'Blog Sidebar',
        'id' => 'blog_sidebar',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ) );
}
add_action('widgets_init', 'paginas_widgets');
/** botones paginador **/
function botones_paginador(){
    return 'class="boton boton-secundario"';
}
add_filter( 'next_posts_link_attributes',  'botones_paginador' );
add_filter( 'previous_posts_link_attributes',  'botones_paginador' );