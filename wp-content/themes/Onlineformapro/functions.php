<?php

//Appel de bootstrap css
function montheme_bootstrap(){

    //appel de boostrap css = cle + url cdn
    wp_register_style('mytheme-style',get_stylesheet_uri());
    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css', []);
    wp_register_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js', [], false, true);
    //Appel du style + js
    wp_enqueue_style('bootstrap');
    wp_enqueue_script('bootstrap');
    //Mon style
    wp_enqueue_style( 'mytheme-style', get_stylesheet_uri());
}

//Creation du menu
function montheme_menu(){
   add_theme_support('menus');
   register_nav_menu('header', 'En tête du menu');
   register_nav_menu('footer', 'Pied de page');
}

//Appel de la fonction Style et script
add_action('wp_enqueue_scripts', 'montheme_bootstrap');

//Appel du menu = zone de menu WordPress
add_action('after_setup_theme', 'montheme_menu');
