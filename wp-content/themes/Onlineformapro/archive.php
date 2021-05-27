<?php
//Si utilisateur est connesté
if (is_user_logged_in()){
	//Creation d'une variable  = recup user en cours
    $current_user = wp_get_current_user();
    //Puis on l'affiche dans la navbar
    echo '<p class="alert alert-warning" style="margin-right: 20px">' . $current_user->user_email; '</p>';
}else{
	//Sinon on affiche par defaut:
     echo "Bonjour, visiteur !";
}





