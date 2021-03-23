<?php
require "../configuration.php";
require CHEMIN_ACCESSEUR . "MembreDAO.php";

    $fichier_source = $_FILES['avatar']['tmp_name'];
    $racine_serveur = $_SERVER['DOCUMENT_ROOT'];
    $repertoire_projet = "etudiants/2020/lennoxm/projet-web-dynamique-2021-Mayo1590";
    $repertoire_avatar = '/image/';
    $avatar = $_FILES['avatar']['name'];
    $fichier_destination = $racine_serveur . $repertoire_projet . $repertoire_avatar . $avatar;
    $succes = move_uploaded_file($fichier_source, $fichier_destination);

    if (isset($_POST['inscription-information'])) {
        if (empty($_POST['mdp']) || $_POST['mdp'] != $_POST['mdp2']) {
            $_SESSION['erreur2']  = "Vos mots de passe doivent être identiques";
            header("location:inscription-informations.php");
        }

        if (empty($_POST['pseudonyme']) || !preg_match('/[a-zA-Z0-9]+/', $_POST['pseudonyme'])) {
            $_SESSION['erreur2'] = "Votre pseudo n'est pas valide";
            header("location:inscription-informations.php");
        } else {
            $membre = MembreDAO::trouverPseudonyme($_POST['pseudonyme']);

            if ($membre) {
                $_SESSION['erreur2'] = 'Ce pseudo est déjà utilisé';
                header("location: inscription-informations.php");
            }
        }

        if (empty($_SESSION['erreur2'])) {
            $filtreMembre = array(
                'pseudonyme' => FILTER_SANITIZE_ENCODED,
                'mdp' => FILTER_SANITIZE_ENCODED,
            );


            $nouveauMembre = filter_input_array(INPUT_POST, $filtreMembre);
            $_SESSION['membre']['pseudonyme'] = $nouveauMembre['pseudonyme'];

            $_SESSION['membre']['mdp'] = password_hash($_POST['mdp'], PASSWORD_BCRYPT);

            $_SESSION['membre']['avatar'] = $avatar;

            $reussiteInscription = MembreDAO::enregistrerMembre($_SESSION['membre'], $nouveauMembre, $avatar);

            if ($reussiteInscription) {
                header('location: ../index.php');
            }
        }
    }
