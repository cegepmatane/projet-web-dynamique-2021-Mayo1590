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

    public static function ajouterMissionApollo()
    {
        $SQL_AJOUTER_MISSION = "INSERT INTO missionsapollo (titre, astronautes, date, resume, progres, reussi, retour, image) VALUES( :titre, :astronautes, :date, :resume, :progres, :reussi, :retour, :image)";
        $requeteAjouterMission = BaseDeDonnees::getConnection()->prepare($SQL_AJOUTER_MISSION);
        $requeteAjouterMission->bindParam(':titre', $titre, PDO::PARAM_STR);
        $requeteAjouterMission->bindParam(':astronautes', $astronautes, PDO::PARAM_STR);
        $requeteAjouterMission->bindParam(':date', $date, PDO::PARAM_INT);
        $requeteAjouterMission->bindParam(':resume', $resume, PDO::PARAM_STR);
        $requeteAjouterMission->bindParam(':progres', $progres, PDO::PARAM_STR);
        $requeteAjouterMission->bindParam(':reussi', $reussi, PDO::PARAM_STR);
        $requeteAjouterMission->bindParam(':retour', $retrour, PDO::PARAM_STR);
        $requeteAjouterMission->bindParam(':image', $image, PDO::PARAM_STR);
        $reussiteAjout = $requeteAjouterMission->execute();

        return $reussiteAjout;
    }

    public static function modifierMissionApollo()
    {
        $SQL_AJOUTER_MISSION = "INSERT INTO missionsapollo (titre, astronautes, date, resume, progres, reussi, retour, image) VALUES( :titre, :astronautes, :date, :resume, :progres, :reussi, :retour, :image)";

        $requeteAjouterMission = BaseDeDonnees::getConnection()->prepare($SQL_AJOUTER_MISSION);
        $requeteAjouterMission->bindParam(':titre', $titre, PDO::PARAM_STR);
        $requeteAjouterMission->bindParam(':astronautes', $astronautes, PDO::PARAM_STR);
        $requeteAjouterMission->bindParam(':date', $date, PDO::PARAM_INT);
        $requeteAjouterMission->bindParam(':resume', $resume, PDO::PARAM_STR);
        $requeteAjouterMission->bindParam(':progres', $progres, PDO::PARAM_STR);
        $requeteAjouterMission->bindParam(':reussi', $reussi, PDO::PARAM_STR);
        $requeteAjouterMission->bindParam(':retour', $retrour, PDO::PARAM_STR);
        $requeteAjouterMission->bindParam(':image', $image, PDO::PARAM_STR);
        $reussiteModification = $requeteAjouterMission->execute();

        return $reussiteModification;
    }

    public static function supprimerMissionApollo()
    {
        $SQL_SUPPRIMER_MISSION = "DELETE FROM `missionsapollo` WHERE `id`= :id";

        $requeteSupprimerMission = BaseDeDonnees::getConnection()->prepare($SQL_SUPPRIMER_MISSION);
        $reussite = $requeteSupprimerMission->execute();

        return $reussite;
    }
}
