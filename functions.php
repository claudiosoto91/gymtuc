<?php 

function gymtuc_menus(){
    register_nav_menus( array(
        'menu-principal' => __('Menu Principal', 'gymtuc')
    ));

}
add_action('init', 'gymtuc_menus');

function gymtuc_scripts_styles(){
    wp_enqueue_style('normalize', 'https://necolas.github.io/normalize.css/8.0.1/normalize.css', array(), '8.0.1');
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize'), '1.0.0');
}
add_action('wp_enqueue_scripts', 'gymtuc_scripts_styles');

?>