<?php
$idMissionApollo = $_GET['mission'];

$MESSAGE_SQL_MISSION_APOLLO = "SELECT * from missionsapollo WHERE id =" .$idMissionApollo;

include "basededonnees.php";
$requeteMissionApollo = $basededonnees->prepare($MESSAGE_SQL_MISSION_APOLLO);
$requeteMissionApollo->execute();
$missionApollo = $requeteMissionApollo->fetch();
?>

<!doctype html>
<html lang="fr">
<!-- Bootstrap -->
<link rel="stylesheet" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

<head>
    <meta charset="utf-8">
    <title><?=$missionApollo['titre']; ?></title>
</head>

<body>
<section>
        <div class="mx-3 mt-5 card">
            <div class="card-body bg-secondary text-light text-center">
                <h1 class="text-light fw-lighter"><?=$missionApollo['titre']; ?></h1>
                <div class="fs-5">
                    <div class="illustration"><img/></div>
                    <p class="astronautes">Astronautes présent: <?=$missionApollo['astronautes']?></p>
                    <span class="date">Date de la mission: <?=$missionApollo['date']?></span>
                    <p class="resume">Mission: <?=$missionApollo['resume']?></p>
                    <p class="progres">Progrès que cette mission a procuré: <?=$missionApollo['progres']?></p>
                    <p class="reussi">Réussite de la mission: <?=$missionApollo['reussi']?></p>
                    <p class="retour-astronautes">Astronaute encore vivant aujourd'hui: <?=$missionApollo['retour-astronautes']?></p><br>
                </div>
                <a class="btn btn-primary btn-lg mt-2" href="liste-mission-apollo.php" role="button">Revenir...</a>
            </div>
		</div>
	
</section>

<footer>
    <nav class="navbar navbar-light bg-secondary mt-5">
        <div class="container-fluid">
            <span class="navbar-text">
                &copy Maya Lennox
            </span>
        </div>
    </nav>
</footer>

</body>
</html>