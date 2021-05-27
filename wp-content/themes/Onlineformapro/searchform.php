
<!-- Creation d'un formulaire avec action retour a la racine du projet + un slash / -->
<form class="d-flex search-form" action="<?= esc_url(home_url('/')) ?>">
    <!-- input name = s + valeur est une requète $_GET['mot cle entrer dans le formulaire de recherhce']-->
    <input name="s" class="form-control me-2" type="search" placeholder="Rechercher" aria-label="Search" value="<?= get_search_query() ?>">
    <button class="btn btn-outline-success" type="submit">Rechercher</button>
</form>
