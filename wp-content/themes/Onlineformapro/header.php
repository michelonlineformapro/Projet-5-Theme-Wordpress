<!doctype html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Odibee+Sans&display=swap" rel="stylesheet">
    <title>Unity Theme Wordpress</title>
    <!--NAVBAR WORDPRE-->
    <?php wp_head(); ?>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning" id="navigation">
        <a class="navbar-brand" href="<?php the_permalink(); ?>">
            <img src="http://assets.stickpng.com/images/5847f592cef1014c0b5e4896.png" width="15%">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php
                wp_nav_menu([
                        'theme_location', 'header',
                        'container' => false,
                    //Ajout de classe boostrap
                    'menu_class' => 'navbar-nav me-auto mb-2 mb-lg-0'
                ])

            ?>
            <?= get_search_form() ?>
        </div>
    </nav>
</header>

<div class="container">
