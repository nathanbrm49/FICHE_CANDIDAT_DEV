<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <?php
    include("./models/utilisateur.php");
    include('./utils/db.php');
    if (@$_POST['save'] != "") {

        if (create($_POST, $pdo)) { //création en BD se passe bien
            header('Location: index.php?page=authentif');
            die();
        } else {
            //si pb de création en BD
            //gérer un message pour l'utilisateur
        }
    }
  
    ?>

    <!-- formulaire permettant de créer un nouvel identifiant-->
    <div class="container mt-3">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <img class="mb-5" src="./public/media/GRETA_CFA_logo.jpeg" alt="" width="10%">
            </div>
            <div class="col-sm-12 col-md-6 mt-5">
                <h3>Inscription</h3>
            </div>
        </div>
        <div class="card">
            <form action="index.php?page=inscription" method="POST">
                <div class="row m-2 ">
                    <div class="col-sm-12 col-md-6">
                        <label for="nom">Nom</label>
                        <input required type="text" class="form-control" id="nom" name="nom">
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <label for="prenom">Prénom</label>
                        <input required type="text" class="form-control" id="prenom" name="prenom">
                    </div>
                </div>
                <div class="row m-2">
                    <div class="col-sm-12 col-md-6">
                        <label for="email">Votre email</label>
                        <input required type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <label for="password">Mot de passe</label>
                        <input required type="password" class="form-control" id="password" name="password" required>
                    </div>
                </div>
                <div class="row m-2">
                    <label for="save"></label>
                    <div class="text-center my-4"><input type="submit" class="btn btn-secondary" name="save" id="save">
                    </div>
            </form>
        </div>
    </div>
</main>