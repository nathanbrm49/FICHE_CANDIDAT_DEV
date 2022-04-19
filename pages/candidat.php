<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<br /><br />
<div class="tabs">
    <div class="tab-button-outer">
        <ul id="tab-button">
            <li><a href="#fiche_de_candidature">Fiche de candidature</a></li>
            <li><a href="#identite_du_candidat">Identité candidat</a></li>
            <li><a href="#informations">Informations</a></li>
            <li><a href="#statut_a_l_entree_de_la_formation">Statut formation</a></li>
            <li><a href="#si_vous_etes_a_la_recherche_d_un_emploi">Recherche emploi</a></li>
            <li><a href="#si_vous_etes_en_activite_professionnelle">Activité professionnelle</a></li>
            <li><a href="#motivation_et_projet_du_demandeur_de_formation">Demandeur formation</a></li>
            <li><a href="#informations_complementaires">Informations complémentaires</a></li>
            <li><a href="#identifiez_et_precisez_vos_freins_a_l_entree_de_la_formation">Freins formation</a></li>
            <li><a href="#grille_de_synthese_de_l_entretien">Synthèse entretien</a></li>
            <li><a href="#fonds_prives">Fonds privés</a></li>
            <li><a href="#fonds_public">Fonds publics</a></li>
        </ul>
    </div>
    <div class="tab-select-outer">
        <select id="tab-select">
            <option value="#fiche_de_candidature">Fiche de candidature</option>
            <option value="#identite_du_candidat">Identité candidat</option>
            <option value="#informations">Informations</option>
            <option value="#statut_a_l_entree_de_la_formation">Statut formation/option>
            <option value="#si_vous_etes_a_la_recherche_d_un_emploi">Recherche emploi</option>
            <option value="#si_vous_etes_en_activite_professionnelle">Activité professionnelle</option>
            <option value="#motivation_et_projet_du_demandeur_de_formation">Demandeur formation</option>
            <option value="#informations_complementaires">Informations complémentaires</option>
            <option value="#identifiez_et_precisez_vos_freins_a_l_entree_de_la_formation">Freins formation</option>
            <option value="#grille_de_synthese_de_l_entretien">Synthèse entretien</option>
            <option value="#fonds_prives">Fonds privés</option>
            <option value="#fonds_prives">Fonds publics</option>
        </select>
    </div>

    <div id="fiche_de_candidature" class="tab-contents">
        <h2>Fiche de candidature</h2>
        <?php
        include("./models/candidatUse.php");
        include("./utils/db.php");
        if (isset($_POST["valideForm"])) {
            createCandidat($pdo, $_POST);?>
<script>
    $('#msg').text("Fiche candidat enregistrée").fadeIn().delay(2000).fadeOut();
</script>
        <?php  ?> {   
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
                        <label>Liste comité :</label>
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
    </div>
    <div id="identite_du_candidat" class="tab-contents">
        <h2>Identité du candidat</h2>
        <div class="m-3">
            <div class="card">
                <div class="card-header text-center">
                    <h3 class="text-center">Identité du candidat</h3>
                </div>
                <small><em>Cette partie est à remplir par le candidat</em></small>
            </div>
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
                    <label for="annee_obtention_diplome">Année d'obtention du dernier diplôme</label> <input type="month" class="form-control" name="annee_dernier_diplome" />
                </div>
                <div class="col-sm-12 col-md-3">
                    <label for="Intitule">Intitulé : </label> <input type="text" class="form-control" name="intitule_diplome" />
                </div>

                <div class="row m-3">
                    <div class="col-sm-12 col-md-2">
                        <label for="Date_de_naissance">Date de naissance : </label> <input type="text" name="date_de_naissance" class="form-control" />
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <label for="Age">Âge : </label> <input type="text" name="age" class="form-control" />
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <label for="Lieu_de_naissance">Lieu de naissance : </label> <input type="text" name="lieu_de_naissance" class="form-control" />
                    </div>
                </div>
                <div class="row m-3">
                    <div class="col-sm-12 col-md-3">
                        <label for="Nationalite">Nationalité : </label> <input type="text" name="nationalite" class="form-control" />
                    </div>
                    <div class="col-sm-12 col-md-2">
                        <label for="Situation_familial">Situation familial : </label> <input type="text" name="situation_familial" class="form-control" />
                    </div>
                    <div class="col-sm-12 col-md-2">
                        <label for="Nbre_denfants">Nbre d'enfants : </label> <input type="text" name="nbre_enfants" class="form-control" />
                    </div>
                    <div class="col-sm-12 col-md-5">
                        <label for="Numero_de_securite_social">Nᵒ de sécurité sociale : </label> <input type="text" name="n_securite_sociale" class="form-control" />
                    </div>
                </div>
                <div class="row m-3">
                    <div class="col-sm-12 col-md-4">
                        <label>Régime :</label>
                        <select class="form-control" name="regime">
                            <option></option>
                            <option>MSA</option>
                            <option>CPAM</option>
                        </select>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <label for="Ville_de_rattachement">Ville de rattachement : </label> <input type="text" name="ville_de_rattachement" class="form-control" />
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <label>Titulaire d'une reconnaisance en qualité de travailleur handicapé (RQTH) :</label>
                        <select class="form-control" name="rqth">
                            <option></option>
                            <option>Oui</option>
                            <option>Non</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="informations" class="tab-contents">
        <h2>Informations</h2>
        <div class="m-3">
            <div class="card">
                <div class="card-header text-center">
                    <h3 class="text-center">Informations</h3>
                </div>
            </div>
            <small><em>Cette partie est à remplir par le GRETA-CFA 49</em></small>
        </div>
        <div class="card">
            <div class="row m-3">
                <div class="col-sm-12 col-md-3">
                    <label for="n_devis">Nᵒ Devis : </label> <input type="text" name="n_devis" class="form-control" />
                </div>
                <div class="col-sm-12 col-md-3">
                    <label for="dates_de_formations">Dates de formations : </label> <input type="date" name="dates_de_formations" class="form-control" />
                </div>
                <div class="col-sm-12 col-md-2 mt-3">
                    <label for="nombre_heures">Nombre d'heures : </label>
                </div>
                <div class="col-sm-12 col-md-2">
                    <label for="nbre_h_en_centre">En centre : </label> <input type="text" name="nbre_h_en_centre" class="form-control" />
                </div>
                <div class="col-sm-12 col-md-2">
                    <label for="h_en_entreprise">En entreprise : </label> <input type="text" name="h_en_entreprise" class="form-control" />
                </div>
            </div>
        </div>
        <div class="row m-3">
            <div class="col-sm-12 col-md-4">
                <label for="n_stagiaire">Nᵒ Stagiaire : </label> <input type="text" name="n_stagiaire" class="form-control" />
            </div>
            <div class="col-sm-12 col-md-4">
                <label for="n_inscription">Nᵒ Inscription : </label> <input type="text" name="n_inscription" class="form-control" />
            </div>
            <div class="col-sm-12 col-md-4">
                <label for="das">Das : </label> <input type="text" name="das" class="form-control" />
            </div>
        </div>
        <div class="row m-3">
            <div class="col-sm-12 col-md-4">
                <label for="n_convention">Nᵒ Convention : </label> <input type="text" name="n_convention" class="form-control" />
            </div>
            <div class="col-sm-12 col-md-4">
                <label for="Client">Client : </label> <input type="text" name="client" class="form-control" />
            </div>
            <div class="col-sm-12 col-md-4">
                <label for="n_forpro">Nᵒ FORPRO : </label> <input type="text" name="n_forpro" class="form-control" />
            </div>
        </div>
    </div>
</div>
<div id="statut_a_l_entree_de_la_formation" class="tab-contents">
    <h2>Statut à l'entrée de la formation</h2>
    <div class="m-3">
        <div class="card">
            <div class="card-header text-center">
                <h3 class="text-center">Statut à l'entrée de la formation</h3>
            </div>
        </div>
    </div>
    <div class="row m-3">
        <div class="col-sm-12 col-md-6">
            <label>Statut à l'entrée de la formation</label>
            <select class="form-control" name="statut">
                <option>Salarié(e)</option>
                <option>Profession libérale</option>
                <option>Demandeur d'emploi</option>
            </select>
        </div>
        <div class="col-sm-12 col-md-6">
            <label for="autres">Autres (CSP, Etudiant ...) précisez : </label> <input type="text" name="autres" class="form-control" />
        </div>
    </div>
</div>
<div id="si_vous_etes_a_la_recherche_d_un_emploi" class="tab-contents">
    <h2>Si vous êtes à la recherche d'un emploi</h2>
    <div class="m-3">
        <div class="card">
            <div class="card-header text-center">
                <h3 class="text-center">Si vous êtes à la recherche d'un emploi</h3>
            </div>
        </div>
    </div>
    <div class="row m-3">
        <div class="col-sm-12 col-md-3">
            <label>Structure d'accompagnement</label>
            <select class="form-control" name="statut">
                <option>Pole emploi</option>
                <option>Mission locale</option>
                <option>Cellule reclassement</option>
                <option>Cap emploi</option>
                <option>SIAE</option>
                <option>Dispositif spécifique</option>
            </select>
        </div>
        <div class="col-sm-12 col-md-3">
            <label for="n_id_pole_emploie">Nᵒ Identifiant Pole Emploi : </label> <input type="text" name="n_id_pole_emploie" class="form-control" />
        </div>
        <div class="col-sm-12 col-md-3">
            <label for="date_inscription">Date d'inscription : </label> <input type="text" name="date_inscription" class="form-control" />
        </div>
        <div class="col-sm-12 col-md-3">
            <label for="inscription_agence_pole_emploie">Inscription à l'agence Pole Emploi de : </label> <input type="text" name="inscription_agence_pole_emploie" class="form-control" />
        </div>
    </div>
    <div class="row m-3">
        <div class="col-sm-12 col-md-3">
            <label for="inscription_mission_locale">Inscription à la mission locale, PAIO: </label> <input type="text" name="inscription_mission_locale" class="form-control" />
        </div>
        <div class="col-sm-12 col-md-3">
            <label for="oui">Oui</label>
            <input type="checkbox" id="oui" name="oui" class="form-control">
            <label for="non">Non</label>
            <input type="checkbox" id="non" name="non" class="form-control">
        </div>
        <div class="col-sm-12 col-md-3">
            <label for="nom_referent_structure_accompagnement">Nom du référent de la structure d'accompagnement : </label> <input type="text" name="nom_referent_structure_accompagnement" class="form-control" />
        </div>
        <div class="col-sm-12 col-md-3">
            <label>Indemnisé :</label>
            <select class="form-control" name="statut">
                <option>Oui</option>
                <option>Non</option>
            </select>
        </div>
    </div>
</div>
<div id="si_vous_etes_en_activite_professionnelle" class="tab-contents">
    <h2>Si vous êtes en activité professionnelle</h2>
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
                <label for="type_de_contrat">Type de contrat :</label>
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
</div>
<div id="motivation_et_projet_du_demandeur_de_formation" class="tab-contents">
    <h2>Motivation et projet du demandeur de formation</h2>
    <div class="m-3 mt-6">
        <div class="card">
            <div class="card-header text-center">
                <h3 class="text-center">Motivation et projet du demandeur de formation</h3>
            </div>
        </div>
    </div>
    <textarea cols="200" rows="10" name="link" placeholder="Indiquer votre motivation" class="form-control">
    </textarea>
</div>
<div id="informations_complementaires" class="tab-contents">
    <h2>Informations complémentaires</h2>
    <div class="m-3">
        <div class="card">
            <div class="card-header text-center">
                <h3 class="text-center">Informations complémentaires</h3>
            </div>
        </div>
    </div>
    <div class="row m-3">
        <div class="col-sm-12 col-md-3">
            <label for="type_de_contrat">Votre mobilité : Précisez</label>
            <select class="form-control" name="mobilités" id="mobilités">
                <option>Transport en commun</option>
                <option>Véhicule personnel</option>
            </select>
        </div>
        <div class="col-sm-12 col-md-3">
            <label for="vos_ressources">Vos ressources :</label> <input type="text" name="vos_ressources" class="form-control" />
        </div>
        <div class="col-sm-12 col-md-3">
            <label for="vos_contraintes_familiale">Vos contraintes familiales :</label> <input type="text" name="vos_contraintes_familiales" class="form-control" />
        </div>
        <div class="col-sm-12 col-md-3">
            <label for="vos_disponibilites">Vos disponibilités :</label> <input type="text" name="vos_disponibilites" class="form-control" />
        </div>
    </div>
</div>
<div id="identifiez_et_precisez_vos_freins_a_l_entree_de_la_formation" class="tab-contents">
    <h2>Identifiez et précisez vos freins à l'entrée de la formation</h2>
    <p>
    <div class="m-3">
        <div class="card">
            <div class="card-header text-center">
                <h3 class="text-center">Identifiez et précisez vos freins à l'entrée de la formation</h3>
            </div>
        </div>
    </div>
    <div class="row m-3">
        <div class="col-sm-12 col-md-3">
            <label for="logement">Logement</label> <input type="text" name="logement" class="form-control" />
        </div>
        <div class="col-sm-12 col-md-3">
            <label for="autonomie">Autonomie</label> <input type="text" name="autonomie" class="form-control" />
        </div>
        <div class="col-sm-12 col-md-3">
            <label for="autonomie">Environnement familial</label> <input type="text" name="environnement_familial" class="form-control" />
        </div>
        <div class="col-sm-12 col-md-3">
            <label for="autonomie">Isolement</label> <input type="text" name="isolement" class="form-control" />
        </div>
    </div>
    <div class="row m-3">
        <div class="col-sm-12 col-md-3">
            <label for="logement">Santé</label> <input type="text" name="sante" class="form-control" />
        </div>
        <div class="col-sm-12 col-md-3">
            <label for="logement">Absence de formation</label> <input type="text" name="absence_de_formation" class="form-control" />
        </div>
        <div class="col-sm-12 col-md-3">
            <label for="demobilisation">Démobilisaion</label> <input type="text" name="demobilisattion" class="form-control" />
        </div>
        <div class="col-sm-12 col-md-3">
            <label for="probleme_de_justice">Problème de justice</label> <input type="text" name="probleme_de_justice" class="form-control" />
        </div>
    </div>
    <div class="row m-3">
        <div class="col-sm-12 col-md-6">
            <label for="com_oral_ecrite_en_lang_maternelle">Communication orale et écrite en langague maternelle</label> <input type="text" name="com_oral_ecrite_en_lang_maternelle" class="form-control" />
        </div>
        <div class="col-sm-12 col-md-6">
            <label for="autres">Autres</label> <input type="text" name="autres" class="form-control" />
        </div>
    </div>
</div>
<div id="grille_de_synthese_de_l_entretien" class="tab-contents">
    <h2>Grille de synthèse de l'entretien</h2>
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
    <div>
        <p class="text-center">
            <strong>
                <p size="5s">Conclusion du binôme</p>
            </strong>
    </div>
    <div class="row m-3">
        <div class="col-sm-12 col-md-4">
            <label for="noms_du_binome">Nom du binôme : </label> <input type="text" name="nom_du_binome" class="form-control" />
        </div>
        <div class="col-sm-12 col-md-4">
            <label for="noms_du_binome">Date :</label> <input type="date" name="nom_du_binome" class="form-control" />
        </div>
        <div class="col-sm-12 col-md-4">
            <label for="avis">Avis</label>
            <select class="form-control" name="avis" id="avis">
                <option>Avis très favorable</option>
                <option>Avis favorable</option>
                <option>Avis défavorable</option>
                <option>Avis réservé</option>
            </select>
        </div>
    </div>
</div>
<div id="fonds_prives" class="tab-contents">
    <h2>Fonds privés</h2>
    <p>
    <div class="m-3">
        <div class="card">
            <div class="card-header text-center">
                <h3 class="text-center">Fonds privés</h3>
            </div>
        </div>
    </div>
    <div class="m-3">
        <div class="card">
            <div class="card-header text-center">
                <h3 class="text-center">Modalités de financement envisagées</h3>
            </div>
        </div>
    </div>
    <div class="row m-3">
        <div class="col-sm-12 col-md-4">
            <label>Droit</label>
            <select class="form-control" name="droit">
                <option>Droit Public</option>
                <option>Droit Privé</option>
            </select>
        </div>
        <div class="col-sm-12 col-md-4">
            <label>Statut salarié</label>
            <select class="form-control" name="statut_salarie">
                <option>Plan de développement de compétences / Plan de formation</option>
                <option>CPF monétisé</option>
                <option>CPF monétisé + abondement entreprise</option>
                <option>CPF Transition Professionnelle (Droit Privé)</option>
                <option>Congé de formation (Droit Public)</option>
                <option>Fonds Congé de Reclassement</option>
                <option>Apprentissage</option>
            </select>
        </div>
        <div class="col-sm-12 col-md-4">
            <label>Statut demandeur d'emploi</label>
            <select class="form-control" name="statut_demandeur_emploi">
                <option>CPF monétisé</option>
                <option>CPF monétisé + abondement Pôle Emploi | ML</option>
                <option>Individuel payant</option>
                <option>Fonds statut licencié économique</option>
                <option>AGEFIPH</option>
                <option>Apprentissage</option>
                <option>AIF Pôle Emploi</option>
            </select>
        </div>
    </div>
    <div class="m-3">
        <div class="card">
            <div class="card-header text-center">
                <h3 class="text-center">Motifs du refus</h3>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-12">
        <label>Motifs du refus</label>
        <select class="form-control" name="motifs_du_refus">
            <option>En liste d'attente</option>
            <option>Absent(e) à l'entretien</option>
            <option>N'est plus disponible</option>
            <option>N'est plus intéressé(e) par la formation</option>
            <option>Problème concernant la carte de séjour</option>
            <option>Projet professionnel ou motivations à clarifier, représentation du métier insuffisante</option>
            <option>Ne remplit pas les conditions de prérequis</option>
        </select>
    </div>
    <div class="m-3">
        <div class="card">
            <div class="card-header text-center">
                <h3 class="text-center">Commentaires</h3>
            </div>
        </div>
    </div>
    <textarea cols="200" rows="10" name="link" placeholder="Indiquer les commentaires ici" class="form-control"></textarea>
</div>
</div>
<div id="fonds_public" class="tab-contents">
    <h2>Fonds publics</h2>
    <div class="card m-3">
        <div class="card-header text-center">
            <h3 class="text-center">Fonds publics</h3>
        </div>

        <div class="col-12">
            <label>Motifs du refus</label>
            <select class="form-control" name="motifs_du_refus">
                <option>En liste d'attente</option>
                <option>Absent(e) à l'entretien</option>
                <option>N'est plus disponible</option>
                <option>N'est plus intéressé(e) par la formation</option>
                <option>Problème concernant la carte de séjour</option>
                <option>Projet professionnel ou motivations à clarifier, représentation du métier insuffisante</option>
                <option>Ne remplit pas les conditions de prérequis</option>
            </select>
        </div>
        <div>
            <strong>
                <p class="m-3">Commentaires</p>
            </strong>
            <textarea placeholder="Indiquer les commentaires ici" class="form-control mx-3" name="commentaires" cols="120" rows="6"></textarea>
        </div>
        <div class="text-center mt-3">
            <input type="submit" name="valideForm" class="btn btn_secondary" value="Enregistrer">
        </div>
    </div>
</div>
</form>
<div id='msg' style="display:none"></div>
