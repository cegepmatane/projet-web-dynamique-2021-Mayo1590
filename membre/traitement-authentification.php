<?php
require "../configuration.php";
require CHEMIN_ACCESSEUR . "MembreDAO.php";

if (isset($_POST['membre-authetification'])) {
    $filtreMemebre = array();
    $filtreMemebre['pseudonyme'] = FILTER_SANITIZE_STRING;
    $filtreMemebre['mdp'] = FILTER_SANITIZE_STRING;
    $membre = filter_var_array($_POST, $filtreMemebre);

    $membreTrouve = MembreDAO::trouverMembre($membre);

    if (password_verify($membre['mdp'], $membreTrouve['mdp'])) {
        $_SESSION['membre']['pseudonyme'] = $membreTrouve['pseudonyme'];
        $_SESSION['membre']['prenom'] = $membreTrouve['prenom'];
        $_SESSION['membre']['nom'] = $membreTrouve['nom'];
        $_SESSION['membre']['courriel'] = $membreTrouve['courriel'];
        $_SESSION['membre']['organisation'] = $membreTrouve['organisation'];
        $_SESSION['membre']['avatar'] = $membreTrouve['avatar'];

        header('Location: ../index.php');
    } else {
        $_SESSION['erreur'] = "Votre pseudonyme ou votre mot de passe est invalide";
        header('Location: ../membre.php');
    }
}
