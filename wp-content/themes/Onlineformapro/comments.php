<div id="commentaires" class="comments">
    <?php if(have_comments()){
        ?>
            <h2 class="comments__title">
                Commentaire(s) pour cet article : <?= get_comments_number() ?>
            </h2>

        <!--LISTE DES COMMENTAIRES-->
        <ol class="comment__list">
            <?php
                //La liste des commentaires fonction wordpress
                wp_list_comments([
                    //Options
                    'style' => 'ol',
                    'short_ping' => true,
                    'avatar_size' => 74
                ])
            ?>
        </ol>
        <?php

    }else{
        ?>
        <h2 class="alert alert-warning">Pas de commentaire pour cet article</h2>
    <?php
    }
    //Ajout du formulaire
    comment_form();
    ?>


</div>
