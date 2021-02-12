<?php
$titre = $_POST['titre'];
$astronautes = $_POST['astronautes'];
$date = $_POST['date'];
$resume = addslashes($_POST['resume']);
$progres = addslashes($_POST['progres']);
$reussi = addslashes($_POST['reussi']);
$retrour = $_POST['retour'];

$SQL_AJOUTER_MISSION = "INSERT INTO `missionsapollo` (`titre`, `astronautes`, `date`, `resume`, `progres`, `reussi`, `retour`) VALUES('" . $titre . "', '" . $astronautes . "', '" . $date . "', '" . $resume . "', '" . $progres . "', '" . $reussi . "', '" . $retrour . "')";

include "basededonnees.php";
$requeteAjouterMission = $basededonnees->prepare($SQL_AJOUTER_MISSION);
$reussiteAjout = $requeteAjouterMission->execute();

$fichier_source = $_FILES['mission']['tmp'];
$racine_serveur = $_SERVER['DOCUMENT_ROOT'];
$repertoire_projet =  ['/etudiants/2020lennoxm/projet-web-dynamique-2021-Mayo1590/'];
$repertoire_image = "/image";
$nom_image = $_FILES['mission']['name'];
$fichier_destination = $racine_serveur . $repertoire_projet . $repertoire_image . $nom_image;
$succes = move_uploaded_file($fichier_source, $fichier_destination);

if ($succes) echo '<img src="image/' . $nom_image . '">';
?>

<?php
if ($reussiteAjout) {
?>
    Votre mission a été ajouté à la base de données.
<?php
}
?>