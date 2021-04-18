<?php
require "configuration.php";
require CHEMIN_ACCESSEUR . 'MissionApolloDAO.php';

$idMissionApollo = filter_var($_GET['mission'], FILTER_SANITIZE_NUMBER_INT);

$missionApollo = MissionApolloDAO::lireMissionApollo($idMissionApollo);

function convertir($texte)
{
    return iconv('UTF-8', 'windows-1252', $texte);
}

require "lib/fpdf/fpdf.php";


$doc = new FPDF();

$doc->AddPage();
$doc->SetFont('Arial', 'B', 25);
$doc->Write(5, convertir($missionApollo['titre']));
$doc->SetY(25);
$doc->SetFont('Arial', '', 16);
$doc->Write(5, convertir($missionApollo['astronautes']));
$doc->SetY(35);
$doc->Write(5, convertir($missionApollo['date']));
$doc->SetY(45);
$doc->Write(5, convertir($missionApollo['resume']));
$doc->SetY(75);
$doc->Write(5, convertir($missionApollo['progres']));
$doc->SetY(85);
$doc->Write(5, convertir($missionApollo['reussi']));
$doc->SetY(95);
$doc->Write(5, convertir($missionApollo['retour']));
$doc->Output();
