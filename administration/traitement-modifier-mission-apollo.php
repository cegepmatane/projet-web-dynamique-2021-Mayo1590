<?php
    $id = $_POST['id'];
    $titre = $_POST['titre'];
    $astronautes = $_POST['astronautes'];
    $date = $_POST['date'];
    $resume = addslashes($_POST['resume']);
    $progres = addslashes($_POST['progres']);
    $reussi = $_POST['reussi'];
    $retour = $_POST['retour'];

    $SQL_MODIFIER_MISSION = "UPDATE `missionsapollo` SET `titre`='".$titre."', `astronautes`='".$astronautes."', `date`='".$date."', `resume`='".$resume."', `progres`='".$progres."', `reussi`='".$reussi."', `retour`='".$retour."' WHERE `id`=" .$id;

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