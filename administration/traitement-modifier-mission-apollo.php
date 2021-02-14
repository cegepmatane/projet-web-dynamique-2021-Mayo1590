<?php
$id = $_POST['id'];
$titre = $_POST['titre'];
$astronautes = $_POST['astronautes'];
$date = $_POST['date'];
$resume = addslashes($_POST['resume']);
$progres = addslashes($_POST['progres']);
$reussi = $_POST['reussi'];
$retour = $_POST['retour'];
$image = $_POST['image'];

$SQL_MODIFIER_MISSION = "UPDATE `missionsapollo` SET `titre`='" . $titre . "', `astronautes`='" . $astronautes . "', `date`='" . $date . "', `resume`='" . $resume . "', `progres`='" . $progres . "', `reussi`='" . $reussi . "', `retour`='" . $retour . "' WHERE `id`=" . $id;

include "basededonnees.php";
$requeteModifierMission = $basededonnees->prepare($SQL_MODIFIER_MISSION);
$reussiteModification = $requeteModifierMission->execute();

$fichier_source = $_FILES['image']['tmp'];
$racine_serveur = $_SERVER['DOCUMENT_ROOT'];
$repertoire_projet =  ['/etudiants/2020lennoxm/projet-web-dynamique-2021-Mayo1590/'];
$repertoire_image = "/image";
$image = $_FILES['image']['name'];
$fichier_destination = $racine_serveur . $repertoire_projet . $repertoire_image . $image;
$succes = move_uploaded_file($fichier_source, $fichier_destination);

if ($succes) echo '<img src="../image/' . $image . '">';
?>

<?php
if ($reussiteModification) {
?>
    Votre mission a été modifié dans la base de données.
<?php
}
?>