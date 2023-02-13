<?php
require_once CHEMIN_ACCESSEUR . "secret/BaseDeDonnees.php";

class MembreDAO
{
    public static function trouverMembre($membre)
    {
        $SQL_AUTHENTIFICATION = "SELECT * FROM membre WHERE pseudonyme = :pseudonyme";

        $requeteAuthentification = BaseDeDonnees::getConnection()->prepare($SQL_AUTHENTIFICATION);
        $requeteAuthentification->bindParam(':pseudonyme', $membre['pseudonyme'], PDO::PARAM_STR);
        $requeteAuthentification->execute();
        $membreTrouve = $requeteAuthentification->fetch();

        return $membreTrouve;
    }

    public static function lireMembre($pseudonyme)
    {
        $SQL_LIRE_MEMBRE = "SELECT * FROM membre WHERE pseudonyme = :pseudonyme";

        $requeteMemebre = BaseDeDonnees::getConnection()->prepare($SQL_LIRE_MEMBRE);
        $requeteMemebre->bindParam(':pseudonyme', $pseudonyme, PDO::PARAM_STR);
        $requeteMemebre->execute();
        $membre = $requeteMemebre->fetch();

        return $membre;
    }

    public static function enregistrerMembre($nouveauMembre)
    {
        $AJOUTER_MEMBRE = "INSERT into membre(prenom, nom, pseudonyme, mdp, courriel, organisation, avatar) VALUES (:prenom, :nom, :pseudonyme, :mdp, :courriel, :organisation, :avatar)";

        $requeteAjouterMemebre = BaseDeDonnees::getConnection()->prepare($AJOUTER_MEMBRE);
        $requeteAjouterMemebre->bindParam(':prenom', $nouveauMembre['prenom'], PDO::PARAM_STR);
        $requeteAjouterMemebre->bindParam(':nom', $nouveauMembre['nom'], PDO::PARAM_STR);
        $requeteAjouterMemebre->bindParam(':pseudonyme', $nouveauMembre['pseudonyme'], PDO::PARAM_STR);
        $requeteAjouterMemebre->bindParam(':courriel', $nouveauMembre['courriel'], PDO::PARAM_STR);
        $requeteAjouterMemebre->bindParam(':organisation', $nouveauMembre['organisation'], PDO::PARAM_STR);
        $requeteAjouterMemebre->bindParam(':mdp', $nouveauMembre['mdp'], PDO::PARAM_STR);
        $requeteAjouterMemebre->bindParam(':avatar', $_SESSION['membre']['avatar'], PDO::PARAM_STR);

        $reussiteInscription = $requeteAjouterMemebre->execute();

        return $reussiteInscription;
    }

    public static function modifierMembre($membre)
    {
        $AJOUTER_MEMBRE = "UPDATE membre SET prenom = :prenom, nom = :nom, pseudonyme = :pseudonyme, mdp = :mdp, courriel = :courriel, organisation = :organisation, avatar = :avatar WHERE id = :id";

        $requeteMemebre = BaseDeDonnees::getConnection()->prepare($AJOUTER_MEMBRE);
        $requeteMemebre->bindParam(':prenom', $membre['prenom'], PDO::PARAM_STR);
        $requeteMemebre->bindParam(':nom', $membre['nom'], PDO::PARAM_STR);
        $requeteMemebre->bindParam(':pseudonyme', $membre['pseudonyme'], PDO::PARAM_STR);
        $requeteMemebre->bindParam(':courriel', $membre['courriel'], PDO::PARAM_STR);
        $requeteMemebre->bindParam(':organisation', $membre['organisation'], PDO::PARAM_STR);
        $requeteMemebre->bindParam(':mdp', $membre['mdp'], PDO::PARAM_STR);
        $requeteMemebre->bindParam(':avatar', $_SESSION['membre']['avatar'], PDO::PARAM_STR);
        $requeteMemebre->bindParam(':id', $membre['membre']['id'], PDO::PARAM_STR);
        $reussiteInscription = $requeteMemebre->execute();

        return $reussiteInscription;
    }

    public static function trouverCourriel($user)
    {
        $TROUVER_COURRIEL = "SELECT id FROM membre WHERE courriel = :courriel";
        $requete = BaseDeDonnees::getConnection()->prepare($TROUVER_COURRIEL);
        $requete->bindParam(':courriel', $user, PDO::PARAM_STR);
        $requete->execute();
        $membre = $requete->fetch();

        return $membre;
    }

    public static function trouverPseudonyme($user)
    {
        $TROUVER_PSEUDO = "SELECT id FROM membre WHERE pseudonyme = :pseudonyme";
        $requete = BaseDeDonnees::getConnection()->prepare($TROUVER_PSEUDO);
        $requete->bindParam(':pseudonyme', $user, PDO::PARAM_STR);
        $requete->execute();
        $membre = $requete->fetch();

        return $membre;
    }
}
