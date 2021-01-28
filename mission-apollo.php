<?php
$idMissionApollo = $_GET['lune.missionsapollo'];

$MESSAGE_SQL_MISSION_APOLLO = "SELECT * from lune.missionsapollo WHERE id " .$idMissionApollo;

include "basededonnees.php";
$requeteMissionApollo = $basededonnees->prepare($MESSAGE_SQL_MISSION_APOLLO);
$requeteMissionApollo->execute();
$MissionApollo = $requeteMissionApollo->fetch();
?>

<!doctype html>
<html lang="fr">
<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<head>
    <meta charset="utf-8">
    <title><?=$missionApollo['titre']; ?></title>
</head>

<body>
<section>
        <div class="mx-3">
            <h1 class="mt-5"><?=$missionApollo['titre']; ?></h1>
			<div class="mission-apollo">
			<div class="illustration"><img/></div>
            <h3 class="titre text-primary"><?=$lune['titre']?></h3>
            <p class="astronautes">Astronautes présent: <?=$lune['astronautes']?></p>
            <span class="date">Date de la mission: <?=$lune['date']?></span><br>
            <a class="btn btn-primary mt-2" href="mission-apollo.php?mission-apollo=<?$lune['id'];?>" role="button">Revenir...</a>
		</div>
	
</section>

<footer>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <span class="navbar-text">
                &copy Maya Lennox
            </span>
        </div>
    </nav>
</footer>

</body>
</html>