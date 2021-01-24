<?php 
include "basededonnees.php";

$MESSAGE_SQL_LISTE_MISSION_APOLLO = "SELECT titre, astronautes, date from lune";
//echo $MESSAGE_SQL_LISTE_MISSION_APOLLO;

$requeteListeMissionApollo = $basededonnees->prepare($MESSAGE_SQL_LISTE_MISSION_APOLLO);
$requeteListeMissionApollo->execute();
$listeMissionApollo = $requeteListeMissionApollo->fetchAll();
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>La lune</title>
</head>

<body>
<section>
<h2>Les missions Apollo</h2>

<div id="liste-mission-apollo">
<?php 
foreach($listeMissionApollo as $lune)
{
    ?>
    <div class="mission-apollo">
        <div class="illustration"></div>
        <h3 class="titre"><?=$lune['titre']?></h3>
        <p class="astronautes"><?=$lune['astronautes']?></p>
        <span class="date"><?=$lune['date']?></span>
    </div>
<?php
}
?>
</div>
</section>

<footer></footer>

</body>
</html>