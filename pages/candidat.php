<?php
include("./models/candidatUse.php");
include("./utils/db.php");
if (isset($_POST["valideForm"])) {
    createCandidat($pdo, $_POST);
    echo "L'enregistrement à été pris en compte";
}
?>
<div class="m-3">
    <div class="card">
        <div class="card-header text-center">
            <h3 class="text-center">Fiche de candidature</h3>
        </div>
    </div>
</div>
<form method="POST" autocomplete="off" enctype="multipart/form-data" action="index.php?page=candidat">
    <small><em>
            <p> Cette partie est à remplir par le GRETA-CFA 49 </p>
        </em></small>
    <div class="text-center mt-3">
        <h4> Conclusion du comité de recrutement</h4>
    </div>
    <div class="card m-3">
        <div class="row m-3">
            <div class="col-sm-12 col-md-3">
                <label></label>
                <select class="form-control" name="liste_comite">
                    <option value=""></option>
                    <option value="">Liste principale</option>
                    <option value="">Liste d'attente</option>
                    <option value="">Refusé</option>
                    <option value="">Parcours total</option>
                    <option value="">Parcours aménagé</option>
                    <option value="">Dispense:</option>
                </select>
            </div>
            <div class="col-sm-12 col-md-7">
                <label class="text-center ">Nom de la formation :</label>
                <input type="text" class="form-control" name="nom_de_la_formation" />
            </div>
            <div class="col-sm-12 col-md-2">
                <label class="text-center">Date de l'entretien :</label>
                <input type="date" class="form-control" name="date_de_l_entretien" />
            </div>
        </div>
    </div>
    <div class="m-3">
        <div class="card">
            <div class="card-header text-center">
                <h3 class="text-center">Identité du candidat</h3>
            </div>
        </div>
        <br>
        <small><em>Cette partie est à remplir par le candidat</em></small>
    </div>
    <div class="card m-3">
        <div class="row m-3">
            <div class="col-sm-12 col-md-3">
                <label>Civilité</label>
                <select name="civilite" class="form-control">
                    <option></option>
                    <option>Monsieur</option>
                    <option>Madame</option>
                </select>
            </div>
            <div class="col-sm-12 col-md-3">
                <label for="nom">Nom : </label> <input type="text" class="form-control" name="nom" required />
            </div>
            <div class="col-sm-12 col-md-3">
                <label for="prenom">Prénom : </label> <input type="text" class="form-control" name="prenom" required />
            </div>
            <div class="col-sm-12 col-md-3">
                <label for="nom_de_naissance">Nom de naissance : </label> <input type="text" class="form-control" name="nom_de_naissance" />
            </div>
        </div>
        <div class="row m-3">
            <div class="col-sm-12 col-md-4">
                <label for="adresse">Adresse : </label> <input type="text" class="form-control" name="adresse" />
            </div>
            <div class="col-sm-12 col-md-4">
                <label for="code_postal">Code postal : </label> <input type="text" class="form-control" name="code_postal" />
            </div>
            <div class="col-sm-12 col-md-4">
                <label for="ville">Commune : </label> <input type="text" class="form-control" name="ville" />
            </div>
        </div>
        <div class="row m-3">
            <div class="col-sm-12 col-md-2">
                <label for="prenom">Téléphone mobile:</label> <input type="tel" class="form-control" name="telephone_mobile" />
            </div>
            <div class="col-sm-12 col-md-3">
                <label for="email">Email : </label> <input type="email" class="form-control" name="email" />
            </div>
            <div class="col-sm-12 col-md-2">
                <label>Niveau de formation :</label>
                <select class="form-control" name="niveau_de_formation">
                    <option></option>
                    <option>Primaire Niv. 1</option>
                    <option>3ème Niv. 2</option>
                    <option>CAP/BEP Niv. 3</option>
                    <option>Bac Niv. 4</option>
                    <option>Bac +2 Niv. 5</option>
                    <option>Cycle univ. Niv. 6</option>
                </select>
            </div>
            <div class="col-sm-12 col-md-2">
            <label for="annee_obtention_diplome">Année d'obtention du dernier diplôme : </label> <input type="month" class="form-control" name="annee_dernier_diplome" />
            </div>
            <div class="col-sm-12 col-md-3">
            <label for="Intitule">Intitulé : </label> <input type="text" class="form-control" name="intitule_diplome" />
            </div>

        </div>
    </div>
    <div>
        <label for="Date_de_naissance">Date de naissance : </label> <input type="text" name="date_de_naissance" />
        &nbsp &nbsp
        <label for="Age">Âge : </label> <input type="text" name="age" />
        &nbsp &nbsp
        <label for="Lieu_de_naissance">Lieu de naissance : </label> <input type="text" name="lieu_de_naissance" />
    </div>
    <br>
    <div>
        <label for="Nationalite">Nationalité : </label> <input type="text" name="nationalite" />
        &nbsp &nbsp
        <label for="Situation_familial">Situation familial : </label> <input type="text" name="situation_familial" />
    </div>
    <br>
    <div>
        <label for="Nbre_denfants">Nbre d'enfants : </label> <input type="text" name="nbre_enfants" />
        &nbsp &nbsp
        <label for="Numero_de_securite_social">Nᵒ de sécurité sociale : </label> <input type="text" name="n_securite_sociale" />
    </div>
    <br>
    <div>
        <label>Régime :</label>
        <select class="m-3" name="regime">
            <option></option>
            <option>MSA</option>
            <option>CPAM</option>
        </select>
        &nbsp &nbsp
        <label for="Ville_de_rattachement">Ville de rattachement : </label> <input type="text" name="ville_de_rattachement" />
    </div>
    <br>
    <div>
        <label for="rqth">Titulaire d'une reconnaisance en qualité de travailleur handicapé (RQTH) : </label>
        <input type="checkbox" id="rqth" name="rqth" class="m-2">
    </div>
    <div class="m-3">
        <div class="card">
            <div class="card-header text-center">
                <h3 class="text-center">Informations</h3>
            </div>
        </div>
        <br>
        <small><em>Cette partie est à remplir par le GRETA-CFA 49</em></small>
    </div>
    <div>
        <label for="n_devis">Nᵒ Devis : </label> <input type="text" name="n_devis" />
        &nbsp &nbsp
        <label for="dates_de_formations">Dates de formations : </label> <input type="text" name="dates_de_formations" />
    </div>
    <br>
    <div>
        <label for="nombre_heures">Nombre d'heures : </label>
        <br>
        <label for="nbre_h_en_centre">En centre : </label> <input type="text" name="nbre_h_en_centre" />
        &nbsp &nbsp
        <label for="h_en_entreprise">En entreprise : </label> <input type="text" name="h_en_entreprise" />
    </div>
    <br>
    <div>
        <label for="n_stagiaire">Nᵒ Stagiaire : </label> <input type="text" name="n_stagiaire" />
        &nbsp &nbsp
        <label for="n_inscription">Nᵒ Inscription : </label> <input type="text" name="n_inscription" />
    </div>
    <br>
    <div>
        <label for="das">Das : </label> <input type="text" name="das" />
    </div>
    <br>
    <div>
        <label for="n_convention">Nᵒ Convention : </label> <input type="text" name="n_convention" />
        &nbsp &nbsp
        <label for="Client">Client : </label> <input type="text" name="client" />
        &nbsp &nbsp
        <label for="n_forpro">Nᵒ FORPRO : </label> <input type="text" name="n_forpro" />
    </div>
    <br>
    <div class="m-3">
        <div class="card">
            <div class="card-header text-center">
                <h3 class="text-center">Statut à l'entrée de la formation</h3>
            </div>
        </div>
    </div>
    <div>
        <label for="salarie">Salarié(e) : </label>
        <input type="checkbox" id="salarie" name="salarie" class="m-2">
        <label for="profession_liberale">Profession libérale : </label>
        <input type="checkbox" id="profession_liberale" name="profession_liberale" class="m-2">
        <label for="demandeur_emploie">Demandeur d'emploi : </label>
        <input type="checkbox" id="demandeur_emploie" name="demandeur_emploie" class="m-2">
    </div>
    <br>
    <div>
        <label for="autres">Autres (CSP, Etudiant ...) précisez : </label> <input type="text" name="autres" />
    </div>
    <div class="m-3">
        <div class="card">
            <div class="card-header text-center">
                <h3 class="text-center">Si vous êtes à la recherche d'un emploi</h3>
            </div>
        </div>
    </div>
    <div>
        <label for="structure_accompagnement">Structure d'accompagnement : </label>
        &nbsp &nbsp
        <label for="pole_emploi">Pole emploi</label>
        <input type="checkbox" id="pole_emploi" name="pole_emploi" class="m-2">
        &nbsp &nbsp
        <label for="mission_locale">Mission locale </label>
        <input type="checkbox" id="mission_locale" name="mission_locale" class="m-2">
        &nbsp &nbsp
        <label for="cellule_reclassement">Cellule reclassement </label>
        <input type="checkbox" id="cellule_reclassement" name="cellule_reclassement" class="m-2">
        <br>
        <label for="cap_emploi">Cap emploi </label>
        <input type="checkbox" id="cap_emploi" name="cap_emploi" class="m-2">
        &nbsp &nbsp
        <label for="SIAE">SIAE </label>
        <input type="checkbox" id="SIAE" name="SIAE" class="m-2">
        &nbsp &nbsp
        <label for="dispositif_specifique">Dispositif spécifique </label>
        <input type="checkbox" id="dispositif_specifique" name="dispositif_specifique" class="m-2">
        <input type="text" name="dispositif_specitifique" />
    </div>
    <br>
    <div>
        <label for="n_id_pole_emploie">Nᵒ Identifiant Pole Emploi : </label> <input type="text" name="n_id_pole_emploie" />
        &nbsp &nbsp
        <label for="date_inscription">Date d'inscription : </label> <input type="text" name="date_inscription" />
    </div>
    <br>
    <div>
        <label for="inscription_agence_pole_emploie">Inscription à l'agence Pole Emploi de : </label> <input type="text" name="inscription_agence_pole_emploie" />
    </div>
    <br>
    <div>
        <label for="inscription_mission_locale">Inscription à la mission locale, PAIO: </label> <input type="text" name="inscription_mission_locale" />
        &nbsp
        <label for="oui">Oui</label>
        <input type="checkbox" id="oui" name="oui" class="m-2">
        &nbsp &nbsp
        <label for="non">Non</label>
        <input type="checkbox" id="non" name="non" class="m-2">
    </div>
    <br>
    <div>
        <label for="nom_referent_structure_accompagnement">Nom du référent de la structure d'accompagnement : </label> <input type="text" name="nom_referent_structure_accompagnement" />
    </div>
    <br>
    <div>
        <label for="Indemnise">Indemnisé : </label>
        &nbsp &nbsp
        <label for="oui">Oui</label>
        <input type="checkbox" id="oui" name="oui" class="m-2">
        &nbsp &nbsp
        <label for="non">Non</label>
        <input type="checkbox" id="non" name="non" class="m-2">
        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
        <label for="are">ARE</label>
        <input type="checkbox" id="are" name="are" class="m-2">
        &nbsp &nbsp
        <label for="ass">ASS</label>
        <input type="checkbox" id="ass" name="ass" class="m-2">
        &nbsp &nbsp
        <label for="rsa">RSA</label>
        <input type="checkbox" id="rsa" name="rsa" class="m-2">
        &nbsp &nbsp
        <label for="autre_allocation">Autre allocation</label>
        <input type="checkbox" id="autre_allocation" name="autre_allocation" class="m-2">
    </div>
    <div class="m-3">
        <div class="card">
            <div class="card-header text-center">
                <h3 class="text-center">Si vous êtes en activité professionnelle</h3>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="row m-3">
            <div class="col-sm-12 col-md-4">
                <label for="employeur">Employeur : </label> <input type="text" class="form-control" name="employeur" />
            </div>
            <div class="col-sm-12 col-md-4">
                <label for="personne_a_contacter">Personne à contacter : </label> <input type="text" class="form-control" name="personne_a_contacter" />
            </div>
        </div>
        <div class="row m-3">
            <div class="col-sm-12 col-md-4">
                <label for="adresse">Adresse : </label> <input type="text" class="form-control" name="adresse" />
            </div>
            <div class="col-sm-12 col-md-2">
                <label for="code_postal">Code postal : </label> <input type="text" class="form-control" name="code_postal" />
            </div>
            <div class="col-sm-12 col-md-3">
                <label for="ville">Ville : </label> <input type="text" class="form-control" name="ville" />
            </div>
        </div>
        <div class="row m-3">
            <div class="col-sm-12 col-md-4">
                <label for="telephone">Téléphone : </label> <input type="text" class="form-control" name="telephone" />
            </div>
            <div class="col-sm-12 col-md-4">
                <label for="adresse_mail">Adresse mail : </label> <input type="text" class="form-control" name="adresse_mail" />
            </div>
            <div class="col-sm-12 col-md-4">
                <label for="type_de_contrat">type_de_contrat</label>
                <select class="form-control" name="type_de_contrat" id="type_de_contrat">
                    <option></option>
                    <option>CDI</option>
                    <option>CDD</option>
                    <option>Intérim</option>
                    <option>Autre</option>
                </select>
            </div>
        </div>
        <div class="row m-3">
            <div class="col-sm-12 col-md-4">
                <label for="emploi_occupe">Emploi occupé : </label> <input type="text" class="form-control" name="emploi_occupe" />
            </div>
            <div class="col-sm-12 col-md-4">
                <label for="depuis_le">Depuis le : </label> <input type="date" class="form-control" name="depuis_le" />
            </div>
            <div class="col-sm-12 col-md-4">
                <label for="jusqu_au">Jusqu'au : </label> <input type="date" class="form-control" name="jusqu_au" />
            </div>
        </div>
    </div>
    <hr>
    <div class="m-3 mt-6">
        <div class="card">
            <div class="card-header text-center">
                <h3 class="text-center">Motivation et projet du demandeur de formation</h3>
            </div>
        </div>
    </div>
    <textarea cols="200" rows="10" name="link" placeholder="Indiquer votre motivation" class="form-control"></textarea>
    <br>
    <div class="m-3">
        <div class="card">
            <div class="card-header text-center">
                <h3 class="text-center">Informations complémentaires</h3>
            </div>
        </div>
    </div>
    <div>
        <h3 class="m-3">Votre mobilité : Précisez</h3>
        &nbsp &nbsp
        <label for="transport_en_commun">Transport en commun</label>
        <input type="checkbox" id="transport_en_commun" name="transport_en_commun" class="m-2">
        &nbsp &nbsp
        <label for="vehicule_personnel">Véhicule personnel</label>
        <input type="checkbox" id="vehicule_personnel" name="vehicule_personnel" class="m-2">
        <div>
            <br>
            <div>
                <label for="vos_ressources">Vos ressources :</label> <input type="text" name="vos_ressources" />
            </div>
            <br>
            <div>
                <label for="vos_contraintes_familiale">Vos contraintes familiales :</label> <input type="text" name="vos_contraintes_familiales" />
            </div>
            <br>
            <div>
                <label for="vos_disponibilites">Vos disponibilités :</label> <input type="text" name="vos_disponibilites" />
            </div>
            <div class="m-3">
                <div class="card">
                    <div class="card-header text-center">
                        <h3 class="text-center">Identifiez et précisez vos freins à l'entrée de la formation</h3>
                    </div>
                </div>
            </div>
            <div>
                <label for="logement">Logement</label>
                <input type="checkbox" id="logement" name="logement" class="m-2"> <input type="text" name="logement" />
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                <label for="autonomie">Autonomie</label>
                <input type="checkbox" id="autonomie" name="autonomie" class="m-2"> <input type="text" name="autonomie" />
            </div>
            <br>
            <div>
                <label for="environnement_familial">Environnement familial</label>
                <input type="checkbox" id="envrironnement_familial" name="logement" class="m-2"> <input type="text" name="environnement_familial" />
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                <label for="isolement">Isolement</label>
                <input type="checkbox" id="isolement" name="isolement" class="m-2"> <input type="text" name="isolement" />
            </div>
            <br>
            <div>
                <label for="sante">Santé</label>
                <input type="checkbox" id="sante" name="sante" class="m-2"> <input type="text" name="sante" />
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                <label for="absence_de_formation">Absence de formation</label>
                <input type="checkbox" id="absence_de_formation" name="absence_de_formation" class="m-2"> <input type="text" name="absence_de_formation" />
            </div>
            <br>
            <div>
                <label for="demobilisation">Démobilisation</label>
                <input type="checkbox" id="demobilisation" name="demobilisation" class="m-2"> <input type="text" name="demobilisation" />
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                <label for="probleme_de_justice">Problème de justice</label>
                <input type="checkbox" id="probleme_de_justice" name="autonomie" class="m-2"> <input type="text" name="probleme_de_justice" />
            </div>
            <br>
            <div>
                <label for="communication">Communication orale et écrite en langue maternelle (savoir de base) </label>
                <input type="checkbox" id="communication" name="communication" class="m-2"> <input type="text" name="communication" />
            </div>
            <br>
            <div>
                <label for="autres">Autres</label>
                <input type="checkbox" id="autres" name="autres" class="m-2"> <input type="text" name="autres" />
            </div>
            <div class="m-3">
                <div class="card">
                    <div class="card-header text-center">
                        <h3 class="text-center">Grille de synthèse de l'entretien</h3>
                    </div>
                </div>
            </div>
            <div>
                <small><em>
                        <p> Cette partie est à remplir par le GRETA-CFA 49 </p>
                    </em></small>
            </div>


            <!-- Tableau -->
            <br>
            <table class="table table-bordered">
                <!-- Ici, on écrira le contenu du tableau -->
                <tr>
                    <td>Critères d'appréciations</td>
                    <td>--</td>
                    <td>-</td>
                    <td>+</td>
                    <td>++</td>
                    <td>Commentaires obligatoire</td>
                </tr>
                <tr>
                    <td>Cohérence du parcours</td>
                    <td><input type="checkbox" id="--" name="--" class="m-2"></td>
                    <td><input type="checkbox" id="-" name="-" class="m-2"></td>
                    <td><input type="checkbox" id="+" name="+" class="m-2"></td>
                    <td><input type="checkbox" id="++" name="++" class="m-2"></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Motivation</td>
                    <td><input type="checkbox" id="--" name="--" class="m-2"></td>
                    <td><input type="checkbox" id="-" name="-" class="m-2"></td>
                    <td><input type="checkbox" id="+" name="++" class="m-2"></td>
                    <td><input type="checkbox" id="++" name="++" class="m-2"></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Les freins</td>
                    <td><input type="checkbox" id="--" name="--" class="m-2"></td>
                    <td><input type="checkbox" id="-" name="-" class="m-2"></td>
                    <td><input type="checkbox" id="+" name="+" class="m-2"></td>
                    <td><input type="checkbox" id="++" name="++" class="m-2"></td>
                    <td></td>
                </tr>
                <tr>
                    <td> Qualité de l'échange <br> Personnalité <br> Comportement <br> Savoir-être </td>
                    <td><input type="checkbox" id="--" name="--" class="m-2"></td>
                    <td><input type="checkbox" id="-" name="-" class="m-2"></td>
                    <td><input type="checkbox" id="+" name="+" class="m-2"></td>
                    <td><input type="checkbox" id="++" name="++" class="m-2"></td>
                    <td></td>
                </tr>
                <tr>
                    <td> <u> Validation du projet </u> <br> Immerssion professionnelle <br> Bilan de compétences <br>
                        Enquête métier <br> Accompagnement CEP* <br> Autres </td>
                    <td><input type="checkbox" id="--" name="--" class="m-2"></td>
                    <td><input type="checkbox" id="-" name="-" class="m-2"></td>
                    <td><input type="checkbox" id="+" name="+" class="m-2"></td>
                    <td><input type="checkbox" id="++" name="++" class="m-2"></td>
                    <td><textarea type="text" placeholder="précisez" rows="6" cols="36"></textarea></td>
                </tr>
                <tr>
                    <td>Résultat test <br> de recrutement</td>
                    <td><input type="checkbox" id="--" name="--" class="m-2"></td>
                    <td><input type="checkbox" id="-" name="-" class="m-2"></td>
                    <td><input type="checkbox" id="+" name="+" class="m-2"></td>
                    <td><input type="checkbox" id="++" name="++" class="m-2"></td>
                    <td></td>
                </tr>
            </table>
            <br>
            <div>
                <p class="text-center">
                    <strong>
                        <p size="5s">Conclusion du binôme</p>
                    </strong>
                </p>
            </div>
            <br>
            <div>
                <label for="noms_du_binome">Nom du binôme : </label> <input type="text" name="nom_du_binome" />

            </div>
            <div class="text-center mt-3">
                <input type="submit" name="valideForm" value="Enregistrer">
            </div>
</form>