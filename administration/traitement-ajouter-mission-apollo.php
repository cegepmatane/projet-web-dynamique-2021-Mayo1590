<?php
    $titre = $_POST['titre'];
    $astronautes = $_POST['astronautes'];
    $date = $_POST['date'];
    $resume = $_POST['resume'];
    $progres = $_POST['progres'];
    $reussi = $_POST['reussi'];
    $retrour = $_POST['retour-astronautes'];

    $SQL_AJOUTER_MISSION = "INSERT INTO `missionsapollo` (`titre`, `astronautes`, `date`, `resume`, `progres`, `reussi`, `retour-astronautes`) VALUES(".$titre.", ".$astronautes.", ".$date.", ".$resume.", ".$progres.", ".$reussi.", ".$retrour.")";

    include "basededonnees.php";
    $requeteAjouterMission = $basededonnees->prepare($SQL_AJOUTER_MISSION);
    $reussiteAjout = $requeteAjouterMission->execute(); 
?>

<?php
if($reussiteAjout)
{
?>
    Votre mission a été ajouté à la base de données.
<?php
}
?>