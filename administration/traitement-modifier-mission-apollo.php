<?php
require "../configuration.php";
require CHEMIN_ACCESSEUR . 'MissionAppolloDAO.php';

$fichier_source = $_FILES['image']['tmp_name'];
$racine_serveur = $_SERVER['DOCUMENT_ROOT'];
$repertoire_projet = "etudiants/2020/lennoxm/projet-web-dynamique-2021-Mayo1590";
$repertoire_image = '/image/';
$image = $_FILES['image']['name'];
$fichier_destination = $racine_serveur . $repertoire_projet . $repertoire_image . $image;
$succes = move_uploaded_file($fichier_source, $fichier_destination);

$reussiteModification = MissionApolloDAO::modifierMissionApollo($titre, $astronautes, $date, $resume, $progres, $reussi, $retrour);

if ($succes) {
    echo '<img src="../image/' . $image . '">';
}
?>
<?php
$id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
$titre = filter_var($_POST['titre'], FILTER_SANITIZE_STRING);
$astronautes = filter_var($_POST['astronautes'], FILTER_SANITIZE_STRING);
$date = filter_var($_POST['date'], FILTER_SANITIZE_STRING);
$resume = addslashes(filter_var($_POST['resume'], FILTER_SANITIZE_STRING));
$progres = addslashes(filter_var($_POST['progres'], FILTER_SANITIZE_STRING));
$reussi = addslashes(filter_var($_POST['reussi'], FILTER_SANITIZE_STRING));
$retour = filter_var($_POST['retour'], FILTER_SANITIZE_STRING);


?>

<?php
if ($reussiteModification) {
?>
    Votre mission a été modifié dans la base de données.
<?php
}
?>