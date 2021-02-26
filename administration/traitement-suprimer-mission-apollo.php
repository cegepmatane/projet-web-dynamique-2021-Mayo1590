<?php
$id = filter_var($_GET['mission'], FILTER_SANITIZE_NUMBER_INT);

require "../configuration.php";
require CHEMIN_ACCESSEUR . 'MissionApolloDAO.php';

$listeMissionApollo = MissionApolloDAO::supprimerMissionApollo();
?>

<?php
if ($reussite) {
?>
    Votre mission a été supprimer dans la base de données.
<?php
}
?>