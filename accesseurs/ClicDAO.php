<?php
require_once CHEMIN_ACCESSEUR . "BaseDeDonnees.php";

class ClicDAO
{

    public static function enregistrerVisite($donnes)
    {
        $MESSAGE_ENREGISTRER_VISITE = "INSERT into clic(ip, langue, page, parametres, /*referant,*/ moment) VALUES(:ip, :langue, :page, :parametres, /*:referant,*/ NOW())";

        $requeteVisite = BaseDeDonnees::getConnection()->prepare($MESSAGE_ENREGISTRER_VISITE);
        $requeteVisite->bindParam(':ip', $donnes['REMOTE_ADDR'], PDO::PARAM_STR);
        $requeteVisite->bindParam(':langue', $donnes['HTTP_ACCEPT_LANGUAGE'], PDO::PARAM_STR);
        $requeteVisite->bindParam(':page', $donnes['PHP_SELF'], PDO::PARAM_STR);
        $requeteVisite->bindParam(':parametres', $donnes['QUERY_STRING'], PDO::PARAM_STR);
        //$requeteVisite->bindParam(':referant', $donnes['HTTP_REFERER'], PDO::PARAM_STR); pas disponible pour https et pas trop nécéssaire
        $requeteVisite->execute();

        return $requeteVisite;
    }

    public static function listerStatsParJour()
    {
        $MESSAGE_STATS_JOUR = "SELECT DAYOFWEEK(moment) as jour, COUNT(id) as clics, COUNT(DISTINCT ip) as visites FROM clic GROUP BY jour";
        $requeteStats = BaseDeDonnees::getConnection()->prepare($MESSAGE_STATS_JOUR);
        $requeteStats->execute();
        $statsParJour = $requeteStats->fetchAll();

        return $statsParJour;
    }

    public static function listerStatsParLangue()
    {
        $MESSAGE_STATS_LANGUE = "SELECT langue as langue, COUNT(id) as clics, COUNT(DISTINCT ip) as visites FROM clic GROUP BY langue";
        $requeteStats = BaseDeDonnees::getConnection()->prepare($MESSAGE_STATS_LANGUE);
        $requeteStats->execute();
        $statsParLangue = $requeteStats->fetchAll();

        return $statsParLangue;
    }
}
