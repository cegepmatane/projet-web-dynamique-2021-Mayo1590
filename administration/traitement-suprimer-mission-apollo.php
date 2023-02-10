<?php
$id = filter_var($_GET['mission'], FILTER_SANITIZE_NUMBER_INT);

require "../configuration.php";
require CHEMIN_ACCESSEUR . 'MissionApolloDAO.php';

$reussite = MissionApolloDAO::supprimerMissionApollo($id);
?>

<?php
if ($reussite) {
    header('location: liste-mission-apollo.php');
}
?>