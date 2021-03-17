<?php
$_SESSION['membre']['pseudonyme'] = $nouveauMembre['pseudonyme'];
$_SESSION['membre']['mdp'] = $nouveauMembre['pseudonyme'];

$AJOUTER_MEMBRE = "INSERT into membre(prenom, nom, mdp, courriel, organisation) VALUES (:prenom, pseudonyme, :mdp, :courriel, :organisation)";

include "../basededonnees.php";

$requeteAjouterMemebre = $basededonnees->prepare($AJOUTER_MEMBRE);
$requeteAjouterMemebre->execute();
