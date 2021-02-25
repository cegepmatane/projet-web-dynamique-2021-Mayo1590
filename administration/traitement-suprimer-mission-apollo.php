<?php
$id = filter_var($_GET['mission'], FILTER_SANITIZE_NUMBER_INT);

require "../accesseurs/configuration.php";
require CHEMIN_ACCESSEUR . 'DAO.php';
?>

<?php
if ($reussite) {
?>
    Votre mission a été supprimer dans la base de données.
<?php
}
?>