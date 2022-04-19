<?php
function isConnected()
{
    return isset($_SESSION["id_utilisateur"]);
}

function isAdmin()
{
    return isConnected() && $_SESSION["id_utilisateur"]['groupe'] == 'ADMIN';
}

function connectUser($login, $password)
{
    // Vérification si l'utilisateur existe
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM utilisateursgreta WHERE email=? AND password=SHA2(?, 512)");
    $stmt->execute([$login, $password]);
    $utilisateurs = $stmt->fetchAll(\PDO::FETCH_ASSOC);

    // La personne existe en base de données (nous allons donc la connecter)
    if (count($utilisateurs) == 1) {
        $_SESSION['id_utilisateur'] = $utilisateurs[0];
        header("location: index.php?page=accueil");
        die();
    } else {
        return false;
    }
}
