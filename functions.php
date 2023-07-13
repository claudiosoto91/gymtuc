<?php


//Includes
require get_template_directory() . '/includes/widgets.php';
require get_template_directory() . '/includes/queries.php';
function gymtuc_setup()
{
    /**Imagenes Destacadas */
    add_theme_support('post-thumbnails');

    //Titulos para SEO
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'gymtuc_setup');

function gymtuc_menus()
{
    register_nav_menus(array(
        'menu-principal' => __('Menu Principal', 'gymtuc')
    ));
}
add_action('init', 'gymtuc_menus');

function gymtuc_scripts_styles()
{
    wp_enqueue_style('normalize', 'https://necolas.github.io/normalize.css/8.0.1/normalize.css', array(), '8.0.1');
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize'), '1.0.0');
    wp_enqueue_style('lightboxcss', get_template_directory_uri() . '/css/lightbox.min.css', array(), '2.11.3');
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css', array(), '10.0.4');

    //Archivos js
    wp_enqueue_script('jquery');
    wp_enqueue_script('lightboxjs', get_template_directory_uri() . '/js/lightbox.min.js', array(), '2.11.3', true);
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js', array(), '10.0.4', true);
    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('swiper-js'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'gymtuc_scripts_styles');

//Definir zona de widgets

function gymtuc_widgets()
{
    register_sidebar(array(
        'name' => 'Sidebar 1',
        'id' => 'sidebar_1',
        'before_widget' => '<div class="widget"> ',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="text-center text-primary">',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name' => 'Sidebar 2',
        'id' => 'sidebar_2',
        'before_widget' => '<div class="widget"> ',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="text-center text-primary">',
        'after_title' => '</h3>',
    ));
}
add_action('widgets_init', 'gymtuc_widgets');

//Crear ShortCode

function gymtuc_ubicacion_shortcode()
{
?>
    <div class="mapa">
        <?php
        if (is_page('contacto')) {
            the_field('ubicacion');
        }
        ?>
    </div>
    <h2 class="text-center text-primary">Formulario de Contacto</h2>
<?php
    echo do_shortcode('[contact-form-7 id="90" title="Formulario de contacto 1"]');
}
add_shortcode('gymtuc_ubicacion', 'gymtuc_ubicacion_shortcode');
