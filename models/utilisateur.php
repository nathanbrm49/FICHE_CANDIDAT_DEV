<?php

//include('./utils/db.php');
function connectUser($data, $pdoP)
    {
        $email = htmlspecialchars($data['email']);
        $pwd = $data['password'];
        $stmt = $pdoP->prepare("SELECT id_utilisateur, email, nom, password, prenom FROM utilisateur WHERE email=?");
        $stmt->execute([$email]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        echo 'connectUser';
        print_r($data);
        if ($result) {
            //il y a un résultat donc l'utilisateur existe, maintenant vérification du mot de passe
            $pwdHashBD = $result['password'];
            if (password_verify($pwd, $pwdHashBD)) {
                $_SESSION["etatConnexion"] = "1";
                //toutes les informations concernant l'utilisateur pourront être accessible durant la session
                $_SESSION["prenom"] = $result['prenom'];
                $_SESSION["nom"] = $result['nom'];
                $_SESSION["email"] = $result['email'];
                $_SESSION["id_utilisateur"] = $result['id_utilisateur'];
                header('Location: index.php?page=home');
                die();
            } else {
                
                return false;
            }
        }
        return false;

    }
function create($data, $pdoP)
{
    //création de l'utilisateur
    $mail = htmlspecialchars($_POST['email']);
    $pwd = htmlspecialchars($_POST['password']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $nom = htmlspecialchars($_POST['nom']);
    $pwdHash = password_hash($pwd, PASSWORD_DEFAULT);
    $stmt = $pdoP->prepare("INSERT INTO utilisateur (nom, prenom, email, password) VALUES (?,?,?,?)");
    $result = $stmt->execute(
        [
            $nom, $prenom, $mail, $pwdHash
        ]
    );

    return $result ? $pdoP->lastInsertId() : false;
}

    // function update($pdoP, $id, $data)
    // {

    //     if ($data["password"]) {
    //         $sql = "UPDATE `utilisateursgreta` SET nom=:nom, prenom=:prenom, groupe=:groupe, email=:email, password=:password  WHERE id_utilisateur=:id_utilisateur";

    //     } else {
    //         $sql = "UPDATE `utilisateursgreta` SET nom=:nom, prenom=:prenom, groupe=:groupe, email=:email WHERE id_utilisateur=:id_utilisateur";
    //     }
    //     $stmt = $pdoP->prepare($sql);
    //     $stmt->bindParam(':nom', $data['nom']);
    //     $stmt->bindParam(':prenom', $data['prenom']);
    //     $stmt->bindParam(':groupe', $data['groupe']);
    //     $stmt->bindParam(':email', $data['email']);

    //     if ($data["password"]) {

    //         $stmt->bindParam(':password', $data['password']);
    //     }
    //         $stmt->bindParam(':id_utilisateur', $id);
    //         return $stmt->execute();

    //     }
