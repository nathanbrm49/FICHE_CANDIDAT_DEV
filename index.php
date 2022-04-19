<?php 
    include('common/functions.php');
    // accessibilité à la session courante de l'utilisateur
    session_start();
   
    // Affichage « de la partie haute » de votre site, commun à l'ensemble de votre site
    include('./common/header.php');
    $page = isset($_GET['page']) ? $_GET['page'] : "authentif";
    if($page != "authentif" && $page != "inscription") {
        include('./common/nav.php');
    }
    // Pages autorisées : whitelist
    include('./whitelist/web.php');

    // Gestion de l'affichage de la page demandée
    if(in_array($page, $whitelist)) {
        include("pages/" . $page . '.php');
    } else {
        //si le champ page n'est pas accessible dans l'URL OU que l'accès à la page n'est pas possible
        //alors on demande une authentification 
        include('pages/authentif.php');
    }

    // Affichage de la partie basse de votre site, commun à l'ensemble de votre site. 
    include('./common/footer.php');
    ?>
   