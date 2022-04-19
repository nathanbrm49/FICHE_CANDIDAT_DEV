<?php
include("./models/utilisateur.php");
include('./utils/db.php');
if (@$_POST['connexion'] != "") {
    echo 'submit';
    if (!connectUser($_POST, $pdo)) {
        // Action en cas d'echec de connexion
        echo "<div class='alert alert-danger text-center mt-2' role='alert'>Les informations ne sont pas correctes, Si vous rencontrez un problème <a href='mailto:assistancedev49@ac-nantes.fr'><u>Contacter-nous</u></a></div>";
    }
}

?>
<div class="container text-center mt-5">

    <form class="form-signin" action="index.php?page=authentif" method=POST>
        <img class="mb-5" src="./public/media/GRETA_CFA_logo.jpeg" alt="" width="10%">
        <!-- email -->
        <label for="email"></label>
        <input required type="email" class="form-control text-center my-2  " placeholder="Votre identifiant" name="email" required>

        <!-- password -->
        <div class="input-group mb-3">
            <input required type="password" class="form-control text-center " placeholder="Mot de Passe" name="password" required>

        </div>
        <!-- button connect -->
        <div>
            <label for="connexion"></label>
            <input type="submit" class="btn btn-success mt-3" value="Connexion" name="connexion" id="connexion">
        </div>
        <a href="index.php?page=inscription">Inscription</a>
    </form>
</div>