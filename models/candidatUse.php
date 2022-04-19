<?php
function createCandidat($pdoP,$values){
    $nom_de_la_formmation=htmlspecialchars(@$values["nom_de_la_formation"]);
    $civilite=htmlspecialchars(@$values["civilite"]);
    $date_de_l_entretien=htmlspecialchars(@$values["date_de_l_entretien"]);
    $nom=htmlspecialchars($values["nom"]);
    $prenom=htmlspecialchars($values["prenom"]);
    $nom_de_naissance=htmlspecialchars($values["nom_de_naissance"]);
    $adresse=htmlspecialchars(@$values["adresse"]);
    $code_postal=htmlspecialchars(@$values["code_postal"]);
    $ville=htmlspecialchars(@$values["ville"]);
    $telephone_mobile=htmlspecialchars(@$values["telephone_mobile"]);
    $date_de_naissance=htmlspecialchars(@$values["date_de_naissance"]);
    $age=htmlspecialchars(@$values["age"]);
    $numero_pole_emploie=htmlspecialchars(@$values["numero_pole_emploie"]);
    $email=htmlspecialchars(@$values["email"]);
    $notes=htmlspecialchars(@$values["notes"]);
    $niveau_de_formation=htmlspecialchars(@$values["niveau_de_formation"]);
    $annee_dernier_diplome=htmlspecialchars(@$values["annee_dernier_diplome"]);
    $intitule_diplome=htmlspecialchars(@$values["intitule_diplome"]);
    $lieu_de_naisssance=htmlspecialchars(@$values["lieu_de_naissance"]);
    $nationnalite=htmlspecialchars(@$values["nationnalite"]);
    $situation_familial=htmlspecialchars(@$values["situation_familial"]);
    $nbre_enfants=htmlspecialchars(@$values["nbre_enfants"]);
    $n_securite_sociale=htmlspecialchars(@$values["n_securite_sociale"]);
    $regime=htmlspecialchars(@$values["regime"]);
    $ville_regime=htmlspecialchars(@$values["ville_regime"]);
    $ville_rattachement=htmlspecialchars(@$values["ville_rattachement"]);
    $rqth=htmlspecialchars(@$values["rqth"]);
    $n_devis=htmlspecialchars(@$values["n_devis"]);
    $dates_de_formations=htmlspecialchars(@$values["dates_de_formations"]);
    $nbre_h_en_centre=htmlspecialchars(@$values["nbre_h_en_centre"]);
    $h_en_entreprise=htmlspecialchars(@$values["h_en_entreprise"]);
    $n_stagiaire=htmlspecialchars(@$values["n_stagiaire"]);
    $structure_acc=htmlspecialchars(@$values["structure_acc"]);
    $agence_pole_emploie=htmlspecialchars(@$values["agence_pole_emploie"]);
    $inscrit_ml=htmlspecialchars(@$values["inscrit_ml"]);
    $nom_ref_acc=htmlspecialchars(@$values["nom_ref_acc"]);
    $indem=htmlspecialchars(@$values["indem"]);
    $employeur=htmlspecialchars(@$values["employeur"]);
    $personne_contact=htmlspecialchars(@$values["personne_contact"]);
    $mobilite=htmlspecialchars(@$values["mobilite"]);
    $ressources=htmlspecialchars(@$values["ressources"]);
    $contraintes_familiales=htmlspecialchars(@$values["contraintes_familiales"]);
    $disponibilites=htmlspecialchars(@$values["disponibilites"]);
    $date_debut_suivi=htmlspecialchars(@$values["date_debut_suivi"]);
    $emploie_occupe=htmlspecialchars(@$values["emploie_occupe"]);
    $date_debut_emploie=htmlspecialchars(@$values["date_debut_emploie"]);
    $date_fin_emploie=htmlspecialchars(@$values["date_fin_emploie"]);
    $type_contrat=htmlspecialchars(@$values["type_contrat"]);
    $nom_employeur=htmlspecialchars(@$values["nom_employeur"]);
    $id_coordinateur=htmlspecialchars(@$values["id_coordinateur"]);
    $id_statut=htmlspecialchars(@$values["id_statut"]);
    $id_entretien=htmlspecialchars(@$values["id_entretien"]);
    $autre=htmlspecialchars(@$values["autre"]);



    $stmt = $pdoP->prepare("INSERT INTO 'candidats'  VALUES (NULL,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
    $result = $stmt->execute(
        [
            $nom_de_la_formmation, $date_de_l_entretien, $civilite, $nom, $prenom, $nom_de_naissance, $adresse, $code_postal, $ville, $telephone_mobile,
            $date_de_naissance,$age, $numero_pole_emploie, $email, $notes, $niveau_de_formation, $annee_dernier_diplome,
            $intitule_diplome, $lieu_de_naisssance, $nationnalite, $situation_familial, $nbre_enfants,
            $n_securite_sociale, $regime, $ville_regime, $ville_rattachement, $rqth, $structure_acc,
            $agence_pole_emploie, $inscrit_ml, $nom_ref_acc, $indem, $employeur, $personne_contact,
            $mobilite, $ressources, $contraintes_familiales, $disponibilites, $date_debut_suivi,
            $emploie_occupe, $date_debut_emploie, $date_fin_emploie, $type_contrat, $nom_employeur, $id_coordinateur, $id_statut,
            $id_entretien, $autre, $n_devis, $dates_de_formations, $nbre_h_en_centre, $h_en_entreprise, $n_stagiaire
        ]
    );

    return $result ? $pdoP->lastInsertId() : false;
}
?>
