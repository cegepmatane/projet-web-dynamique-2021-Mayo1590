<?php
    $id = $_GET['mission'];

    $SQL_SUPPRIMER_MISSION = "DELETE FROM `missionsapollo` WHERE `id`=" .$id;

    include "basededonnees.php";
    $requeteSupprimerMission = $basededonnees->prepare($SQL_SUPPRIMER_MISSION);
    $reussite = $requeteSupprimerMission->execute();
?>

<?php
if($reussite) 
{
?>
	Votre mission a été supprimer dans la base de données.
<?php	
}
?>