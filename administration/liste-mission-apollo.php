<?php

include "basededonnees.php";

$MESSAGE_SQL_LISTE_MISSION_APOLLO = "SELECT `id`, `titre`, `astronautes`, `date`, `image` FROM `missionsapollo`";

$requeteListeMissionApollo = $basededonnees->prepare($MESSAGE_SQL_LISTE_MISSION_APOLLO);
$requeteListeMissionApollo->execute();
$listeMissionApollo = $requeteListeMissionApollo->fetchAll();
?>

<!doctype html>
<html lang="fr">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    <head>
        <meta charset="utf-8">
        <title>Panneau d'administration-Les missions Apollo</title>
    </head>

    <body>
        <section>
            <h1 class="mt-5 text-light text-center fw-lighter">Panneau d'administration-Les missions Apollo</h1>

            <a class="btn btn-lg btn-primary mx-3 mt-2" href="ajouter-mission-apollo.html" role="button">Ajouter</a>

            <div id="liste-mission-apollo">
                <?php
                foreach($listeMissionApollo as $missionApollo)
                {
                ?>
                    <div class="mt-5 mb-5 mx-3 card text-center">
                        <div class="card-body bg-secondary row">
                            <h3 class="titre"><?=$missionApollo['titre']?></h3>
                            <p class="astronautes">Astronautes présent: <?=$missionApollo['astronautes']?></p>
                            <span class="date">Date de la mission: <?=$missionApollo['date']?></span><br>
                            <div class="image"><img src="../image/<?=$missionApollo['image']?>"/></div>
                            <a class="btn btn-primary mt-3 col mx-5" href="modifier-mission-apollo.php?mission=<?=$missionApollo['id'];?>" role="button">Modifier</a>
                            <a class="btn btn-primary mt-3 col mx-5" href="traitement-suprimer-mission-apollo.php?mission=<?=$missionApollo['id'];?>" role="button">Supprimer</a>
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