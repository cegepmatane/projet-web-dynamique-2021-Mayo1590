<?php
include "basededonnees.php";

$MESSAGE_SQL_LISTE_MISSION_APOLLO = "SELECT id, titre, astronautes, date, image from missionsapollo";
//echo $MESSAGE_SQL_LISTE_MISSION_APOLLO;

$requeteListeMissionApollo = $basededonnees->prepare($MESSAGE_SQL_LISTE_MISSION_APOLLO);
$requeteListeMissionApollo->execute();
$listeMissionApollo = $requeteListeMissionApollo->fetchAll();
?>

<!doctype html>
<html lang="fr">
<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">

<head>
    <meta charset="utf-8">
    <title>La lune</title>
</head>

<body>
    <section>
        <h1 class="mt-5 text-light text-center fw-lighter">Les missions Apollo</h1>

        <div id="liste-mission-apollo">
            <?php
            foreach ($listeMissionApollo as $missionApollo) {
            ?>
                <div class="mt-5 mb-5 mx-3 card">
                    <div class="card-body bg-secondary">
                        <div class="image"><img src="image/<?= $missionApollo['image'] ?>" /></div>
                        <h3 class="titre"><?= $missionApollo['titre'] ?></h3>
                        <p class="astronautes">Astronautes présent: <?= $missionApollo['astronautes'] ?></p>
                        <span class="date">Date de la mission: <?= $missionApollo['date'] ?></span><br>
                        <a class="btn btn-primary mt-2" href="mission-apollo.php?mission=<?= $missionApollo['id']; ?>" role="button">Voir plus...</a>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </section>

    <footer>
        <nav class="navbar navbar-light bg-secondary">
            <div class="container-fluid">
                <span class="navbar-text">
                    &copy Maya Lennox
                </span>
            </div>
        </nav>
    </footer>

</body>

</html>