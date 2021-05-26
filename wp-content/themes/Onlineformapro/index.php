<?php
get_header();
//La boucle wordpress
//Si on a des articles
if (have_posts()) {
    ?>
    <div class="row mt-3">

        <?php

        while (have_posts()) {
            the_post();
            ?>
            <div class="col-md-4 col-sm-12">
                <div class="card">
                    <p class="card-img-top"><?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid', 'style' => 'width:100%']) ?></p>
                    <div class="card-body">
                        <h5 class="card-title"><?php the_title() ?></h5>
                        <p class="card-text"><?php the_content(); ?></p>
                        <a href="<?php the_permalink(); ?>" class="btn btn-primary">Plus d'infos</a>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>

    </div>
    <nav aria-label="Page navigation example">
        <ul class="pagination mt-3">
           <?= paginate_links() ?>
        </ul>
    </nav>


    <?php
} else {
    ?>
    <h1 class="alert alert-danger">Aucun article</h1>
    <?php
}
get_footer();
