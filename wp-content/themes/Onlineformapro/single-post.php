<?php
get_header();
//La boucle wordpress
//Si on a des articles
if (have_posts()) {
    ?>
    <?php
    while (have_posts()) {
        the_post();
        ?>

        <div id="single-content" class="single-post mt-5">
            <h1 class="alert alert-warning">
                <?php the_title() ?>
            </h1>
            <img src="<?php the_post_thumbnail_url(); ?>" width="50%">
            <p>Catégorie : <?php the_category(); ?></p>
            <p><?php the_content(); ?></p>
            <!--REVENIR UN CRAN EN ARRIERE-->
            <button onclick="history.go(-1);" class="btn btn-danger">RETOUR</button>
        </div>

        <div class="single-post">
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
