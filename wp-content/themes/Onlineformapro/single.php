<?php
get_header();
//Affiche les details de chasue articles//

//La boucle wordpress
//Si on a des articles = alors tant qu'on a des article = tu les affiche
if (have_posts()) {
    ?>
    <?php
    while (have_posts()) {
        the_post();
        ?>

        <article id="single-content" class="post single-post mt-5">
            <div class="text-center">
                <!--Appel de l'image mise en avant dans le dashboard-->
                <img src="<?php the_post_thumbnail_url(); ?>" width="50%" alt="" title="">
            </div>
            <div class="alert alert-warning mt-3">
                <p>Catégorie :</p>
                <!--La catégorie-->
                <?php the_category(); ?>
            </div>

            <div class="post__meta">
                <!--Ajout de la photo de l'avatar-->
                <?= get_avatar(get_the_author_meta('ID'), 60) ?>
                <!--Nom de l'auteur -->
                <?php the_author() ?>
                <br /><br />
                <!--Date de publication-->
                <p>Publié le : <?php the_date() ?></p>
                <!--Les etiquettes des articles dans le dashboard-->
                <?php the_tags(); ?>
                <!--REVENIR UN CRAN EN ARRIERE-->
                <hr>
                <!--Retour à la page précédente-->
                <button onclick="history.go(-1);" class="btn btn-danger">RETOUR</button>
                <hr>
            </div>

            <div class="post__content">
                <!--Le contenu de l'article-->
                <?php the_content(); ?>
            </div>

        </article>
        <br >
        <div class="single-post">
            <div class="text-center">
                <h4 class="text-info text-center">
                    AVIS SUR L'ARTICLE :
                </h4>

                <p>

		            <?= get_post_meta(get_the_ID(), 'avis', true) ?>
                </p>

                <h5 class="text-success">LA NOTE SUR 10 :</h5>
                <p class="alert alert-primary">
	            <?= get_post_meta(get_the_ID(), 'note', true) ?> / 10
                </p>
            </div>

            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <p>
                    <h5 class="alert alert-info text-danger">LES -</h5>
	                <?= get_post_meta(get_the_ID(), 'moins', true) ?>
                    </p>
                </div>

                <div class="col-md-6 col-sm-12">
                    <p>
                    <h5 class="alert alert-info  text-success">LES +</h5>
	                <?= get_post_meta(get_the_ID(), 'plus', true) ?>
                    </p>
                </div>
            </div>
        </div>
        <br />
        <div class="single-post">
            <!--Les commentaires-->
            <?php comments_template(); ?>
        </div>

        <?php
    }
    ?>


    <?php
} else {
    ?>
    <h1 class="alert alert-danger">Aucun article</h1>
    <?php
}
get_footer();
