<?php
require "../configuration.php";
require CHEMIN_ACCESSEUR . "MembreDAO.php";

if (isset($_POST['modification'])) {
    if (empty($_POST['mdp']) || $_POST['mdp'] != $_POST['mdp2']) {
        $_SESSION['erreur']  = "Vos mots de passe doivent être identiques";
        header("location: modifier-compte.php");
    }

    if (empty($_POST['pseudonyme']) || !preg_match('/[a-zA-Z0-9]+/', $_POST['pseudonyme'])) {
        $_SESSION['erreur'] = "Votre pseudo n'est pas valide";
        header("location: modifier-compte.php");
    } else {
        $membre = MembreDAO::trouverPseudonyme($_POST['pseudonyme']);

        if ($_POST['pseudonyme-vieux'] != $_POST['pseudonyme'] && $membre) {
            $_SESSION['erreur'] = 'Ce pseudo est déjà utilisé';
            header("location: modifier-compte.php");
        }
    }

    if (empty($_SESSION['erreur'])) {
        $filtreMembre = array(
            'pseudonyme' => FILTER_SANITIZE_ENCODED,
            'mdp' => FILTER_SANITIZE_ENCODED,
        );

        $nouveauMembre = filter_input_array(INPUT_POST, $filtreMembre);
        $_SESSION['membre']['pseudonyme'] = $nouveauMembre['pseudonyme'];

        $_SESSION['membre']['mdp'] = password_hash($_POST['mdp'], PASSWORD_BCRYPT);

        $_SESSION['membre']['id'] = $_POST['id'];

        $reussiteInscription = MembreDAO::modifierMembre($_SESSION['membre']);

        if ($reussiteInscription) {
            header('location: ../membre.php');
        }
    }
}
