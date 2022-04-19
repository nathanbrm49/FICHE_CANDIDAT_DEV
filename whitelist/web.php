<?php 
 $whitelist = array('connexion', 'inscription');
if(isset($_SESSION["etatConnexion"]) && $_SESSION["etatConnexion"]==1) {
    //la connexion a été établie
    array_push($whitelist, 'home', 'deconnexion', 'candidat');
}
//déclarer des accès specifique admin
?>