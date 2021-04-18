<?php
require "configuration.php";
require_once "lib/onesheet/autoload.php";
require CHEMIN_ACCESSEUR . "MissionApolloDAO.php";

$listeMissionApollo = MissionApolloDAO::listerMissionApollo();

$tableur = new OneSheet\Writer('');

$tableur->enableCellAutosizing();

foreach ($listeMissionApollo as $missionApollo) {
    $tableur->addRow(array(
        $missionApollo["titre"],
        $missionApollo["astronautes"],
        $missionApollo["date"]
    ));
}

$tableur->writeToFile('liste-mission.xlsx');

$fichier = "liste-mission.xlsx";

if (!file_exists($fichier)) {
    die("Fichier introuvable!");
}

header("Content-Disposition: attachment; filename=" . basename($fichier));
header("Content-Length:" . "'" . filesize($fichier) . "'");
header("Content-Type: application/octet-stream;");
readfile($fichier);
