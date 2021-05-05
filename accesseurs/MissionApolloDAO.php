<?php
require_once CHEMIN_ACCESSEUR . "BaseDeDonnees.php";

class MissionApolloDAO
{
    public static function listerMissionApollo()
    {
        $MESSAGE_SQL_LISTE_MISSION_APOLLO = "SELECT id, titre, astronautes, date, image from missionsapollo";
        $requeteListeMissionApollo = BaseDeDonnees::getConnection()->prepare($MESSAGE_SQL_LISTE_MISSION_APOLLO);
        $requeteListeMissionApollo->execute();
        $listeMissionApollo = $requeteListeMissionApollo->fetchAll();

        return $listeMissionApollo;
    }

    public static function lireMissionApollo($idMissionApollo)
    {
        $MESSAGE_SQL_MISSION_APOLLO = "SELECT * from missionsapollo WHERE id = :id";

        $requeteMissionApollo = BaseDeDonnees::getConnection()->prepare($MESSAGE_SQL_MISSION_APOLLO);
        $requeteMissionApollo->bindParam(':id', $idMissionApollo, PDO::PARAM_INT);
        $requeteMissionApollo->execute();
        $missionApollo = $requeteMissionApollo->fetch();

        return $missionApollo;
    }

    public static function ajouterMissionApollo($titre, $astronautes, $date, $resume, $progres, $reussi, $retrour, $image)
    {
        $SQL_AJOUTER_MISSION = "INSERT INTO missionsapollo (titre, astronautes, date, resume, progres, reussi, retour, image) VALUES( :titre, :astronautes, :date, :resume, :progres, :reussi, :retour, :image)";
        $requeteAjouterMission = BaseDeDonnees::getConnection()->prepare($SQL_AJOUTER_MISSION);
        $requeteAjouterMission->bindParam(':titre', $titre, PDO::PARAM_STR);
        $requeteAjouterMission->bindParam(':astronautes', $astronautes, PDO::PARAM_STR);
        $requeteAjouterMission->bindParam(':date', $date, PDO::PARAM_STR);
        $requeteAjouterMission->bindParam(':resume', $resume, PDO::PARAM_STR);
        $requeteAjouterMission->bindParam(':progres', $progres, PDO::PARAM_STR);
        $requeteAjouterMission->bindParam(':reussi', $reussi, PDO::PARAM_STR);
        $requeteAjouterMission->bindParam(':retour', $retrour, PDO::PARAM_STR);
        $requeteAjouterMission->bindParam(':image', $image, PDO::PARAM_STR);
        $reussiteAjout = $requeteAjouterMission->execute();

        return $reussiteAjout;
    }

    public static function modifierMissionApollo($titre, $astronautes, $date, $resume, $progres, $reussi, $retrour)
    {
        $SQL_AJOUTER_MISSION = "INSERT INTO missionsapollo (titre, astronautes, date, resume, progres, reussi, retour, image) VALUES( :titre, :astronautes, :date, :resume, :progres, :reussi, :retour, :image)";

        $requeteAjouterMission = BaseDeDonnees::getConnection()->prepare($SQL_AJOUTER_MISSION);
        $requeteAjouterMission->bindParam(':titre', $titre, PDO::PARAM_STR);
        $requeteAjouterMission->bindParam(':astronautes', $astronautes, PDO::PARAM_STR);
        $requeteAjouterMission->bindParam(':date', $date, PDO::PARAM_STR);
        $requeteAjouterMission->bindParam(':resume', $resume, PDO::PARAM_STR);
        $requeteAjouterMission->bindParam(':progres', $progres, PDO::PARAM_STR);
        $requeteAjouterMission->bindParam(':reussi', $reussi, PDO::PARAM_STR);
        $requeteAjouterMission->bindParam(':retour', $retrour, PDO::PARAM_STR);
        $requeteAjouterMission->bindParam(':image', $image, PDO::PARAM_STR);
        $reussiteModification = $requeteAjouterMission->execute();

        return $reussiteModification;
    }

    public static function supprimerMissionApollo($id)
    {
        $SQL_SUPPRIMER_MISSION = "DELETE FROM `missionsapollo` WHERE `id`= :id";

        $requeteSupprimerMission = BaseDeDonnees::getConnection()->prepare($SQL_SUPPRIMER_MISSION);
        $requeteSupprimerMission->bindParam(':id', $id, PDO::PARAM_INT);
        $reussite = $requeteSupprimerMission->execute();

        return $reussite;
    }

    public static function rechercherMissionApollo()
    {
        $recherche = filter_var($_GET['recherche'], FILTER_SANITIZE_STRING);
        $SQL_RECHERCHE_RAPIDE = "SELECT * FROM missionsapollo WHERE titre LIKE '%$recherche%' OR resume LIKE '%$recherche%' OR date LIKE '%$recherche%' OR astronautes LIKE '%$recherche%' OR progres LIKE '%$recherche%' OR reussi LIKE '%$recherche%' OR retour LIKE '%$recherche%'";
        $requeteRechercheRapide = BaseDeDonnees::getConnection()->prepare($SQL_RECHERCHE_RAPIDE);
        $requeteRechercheRapide->execute();
        $resultat = $requeteRechercheRapide->fetchAll();

        return $resultat;
    }

    public static function rechercherAvanceeMissionApollo()
    {
        $titreRecherche = filter_var($_GET['recherche-titre'], FILTER_SANITIZE_STRING);
        $astronautesRecherche = filter_var($_GET['recherche-astronautes'], FILTER_SANITIZE_STRING);
        $dateRecherche = filter_var($_GET['recherche-date'], FILTER_SANITIZE_STRING);
        $resumeRecherche = filter_var($_GET['recherche-resume'], FILTER_SANITIZE_STRING);
        $progresRecherche = filter_var($_GET['recherche-progres'], FILTER_SANITIZE_STRING);
        $reussiRecherche = filter_var($_GET['recherche-reussi'], FILTER_SANITIZE_STRING);
        $retourRecherche = filter_var($_GET['recherche-retour'], FILTER_SANITIZE_STRING);

        if (!empty($titreRecherche) || !empty($astronautesRecherche) || !empty($dateRecherche) || !empty($resumeRecherche) || !empty($progresRecherche)) {
            $SQL_RECHERCHE_AVANCEE = "SELECT * FROM missionsapollo WHERE 1 = 1 ";

            if (!empty($titreRecherche)) {
                $SQL_RECHERCHE_AVANCEE = $SQL_RECHERCHE_AVANCEE . " AND titre like '%$titreRecherche%'";
            }

            if (!empty($astronautesRecherche)) {
                $SQL_RECHERCHE_AVANCEE = $SQL_RECHERCHE_AVANCEE . " AND astronautes like '%$astronautesRecherche%'";
            }

            if (!empty($dateRecherche)) {
                $SQL_RECHERCHE_AVANCEE = $SQL_RECHERCHE_AVANCEE . " AND date like '%$dateRecherche%'";
            }

            if (!empty($resumeRecherche)) {
                $SQL_RECHERCHE_AVANCEE = $SQL_RECHERCHE_AVANCEE . " AND resume like '%$resumeRecherche%'";
            }
            if (!empty($progresRecherche)) {
                $SQL_RECHERCHE_AVANCEE = $SQL_RECHERCHE_AVANCEE . " AND progres like '%$progresRecherche%'";
            }
            if (!empty($reussiRecherche)) {
                $SQL_RECHERCHE_AVANCEE = $SQL_RECHERCHE_AVANCEE . " AND reussi like '%$reussiRecherche%'";
            }
            if (!empty($retourRecherche)) {
                $SQL_RECHERCHE_AVANCEE = $SQL_RECHERCHE_AVANCEE . " AND reussi like '%$retourRecherche%'";
            }
            $requeteRecherche = BaseDeDonnees::getConnection()->prepare($SQL_RECHERCHE_AVANCEE);
            $requeteRecherche->execute();
            $resultat = $requeteRecherche->fetchAll();
        }

        return $resultat;
    }

    public static function listerCategories()
    {
        $MESSAGE_LISTER_CATEGORIE = "SELECT categorie,COUNT(*) as nombre,AVG(temps) as nombresJoursMoyen,SUM(temps) as nombresJoursTotals,MAX(temps) as nombresJoursMax,MIN(temps) as nombresJoursMin FROM missionsapollo GROUP BY categorie";
        $requeteCategorie = BaseDeDonnees::getConnection()->prepare($MESSAGE_LISTER_CATEGORIE);
        $requeteCategorie->execute();
        $categories = $requeteCategorie->fetchAll();

        return $categories;
    }
}
