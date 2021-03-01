<?php
require_once CHEMIN_ACCESSEUR . "BaseDeDonnes.php";

class MembreDAO
{
    public static function trouverMembre($membre)
    {
        $SQL_AUTHENTIFICATION = "SELECT * FROM membre WHERE pseudonyme = :pseudonyme";

        $requeteAuthentification = BaseDeDonnees::getConnection()->prepare($SQL_AUTHENTIFICATION);
        $requeteAuthentification->bindParam(':pseudonyme', $pseudonyme, PDO::PARAM_STR);
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
}
