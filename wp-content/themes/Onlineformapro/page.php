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
            <div class="container single-post">

                    <h1 class="text-info text-center"><?php the_title() ?></h1>
                    <p class="card-img-top"><?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid', 'style' => 'width:100%']) ?></p>
                    <div class="card-body">
                        <p class="card-text"><?php the_content(); ?></p>
                        <p style="color: #0a4b78" class="post__meta">
                            Publié le : <?php the_time(get_option('date_format')); ?>
                            par : <?php the_author() ?>
                        </p>
                    </div>

            </div>
            <?php
        }
        ?>

    </div>
    <nav aria-label="Page navigation example">
        <ul class="pagination mt-3">
            <!--Pagination a regeler deans le dashbosrd regale -> general -> nombre article a fficher par page-->
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
