<?php
    $titre = $_POST['titre'];
    $astronautes = $_POST['astronautes'];
    $date = $_POST['date'];
    $resume = addslashes($_POST['resume']);
    $progres = addslashes($_POST['progres']);
    $reussi = addslashes($_POST['reussi']);
    $retrour = $_POST['retour'];

    $SQL_AJOUTER_MISSION = "INSERT INTO `missionsapollo` (`titre`, `astronautes`, `date`, `resume`, `progres`, `reussi`, `retour`) VALUES('".$titre."', '".$astronautes."', '".$date."', '".$resume."', '".$progres."', '".$reussi."', '".$retrour."')";

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