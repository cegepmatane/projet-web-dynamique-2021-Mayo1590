<?php
    $id = $_POST['id'];
    $titre = $_POST['titre'];
    $astronautes = $_POST['astronautes'];
    $date = $_POST['date'];
    $resume = $_POST['resume'];
    $progres = $_POST['progres'];
    $reussi = $_POST['reussi'];
    $retour = $POST['retour-astronautes'];

    $SQL_MODIFIER_MISSION = "UPDATE missionapollo SET titre = '$titre', astronautes='$astronautes', date='$date', resume='$resume', progres='$progres', reussi='$reussi', retour='$retour', WHERE id = " .$id;

    include "basededonnees.php"; 
    $requeteModifierMission = $basededonnees->prepare($SQL_MODIFIER_MISSION);
    $reussiteModification = $requeteModifierMission->execute();
?>

<?php
if($reussiteModification) 
{
?>
	Votre mission a été modifié dans la base de données.
<?php	
}
?>