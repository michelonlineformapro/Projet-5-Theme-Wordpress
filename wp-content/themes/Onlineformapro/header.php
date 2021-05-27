<!doctype html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Unity Theme Wordpress</title>
    <!--NAVBAR WORDPRE-->
    <?php wp_head(); ?>
</head>
<body>

<!--Barre de nav horizontale bootrap + btn burger responsive-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">

	                <?php
	                //Appel du menu boostrap navbar-->
	                wp_nav_menu([
		                'theme_location', 'header',
		                'container' => false,
		                //Ajout de classe boostrap
		                'menu_class' => 'navbar-nav me-auto mb-2 mb-lg-0'
	                ]);

	                ?>

                    <!--Appel du fichier archives.php qui recupère l'utilisateur connecté ou non-->
	                <?= get_template_part('archive'); ?>
                </li>

            </ul>
            <form class="d-flex">
                <!--Appel du template formulaire de recherche et implicitement searchform.php-->
	            <?= get_search_form() ?>
            </form>
        </div>
    </div>
</nav>

<div class="container">
