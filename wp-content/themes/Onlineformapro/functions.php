<?php

//Appel de bootstrap css
function montheme_bootstrap()
{

    //appel de boostrap css = cle + url cdn
	//Ici style. css chemin absolu
    wp_register_style('mytheme-style', get_stylesheet_uri());
    //CDN bootstrap
    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css', []);
    //CDN js boostrap
    wp_register_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js', [], false, true);
    //Appel du style + js
    wp_enqueue_style('bootstrap');
    wp_enqueue_script('bootstrap');

    //Mon style
    wp_enqueue_style('mytheme-style', get_stylesheet_uri());
}

//Creation du menu
function montheme_menu()
{
	//Ajoute les images mise en avant dans le dashboard
    add_theme_support('post-thumbnails');
    //Ajoute la creation de menu dans le dashboard
    add_theme_support('menus');
    //Creation de la zone d'enplacement dans le dashboard
    register_nav_menu('header', 'En tête du menu');
    //Idem pour le footer
    register_nav_menu('footer', 'Pied de page');
}
/*
function alert(){
	echo 'Salut';
}
Fonction de test a appel dans n'importe quelle fichier php
*/

//Appel de la fonction Style et script sur le hook wp_enque_script
add_action('wp_enqueue_scripts', 'montheme_bootstrap');

//Appel dde la fonction menu = zone de menu WordPress sur le hook after setup theme
add_action('after_setup_theme', 'montheme_menu');
