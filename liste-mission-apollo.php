<?php 
include "basededonnees.php";

$MESSAGE_SQL_LISTE_MISSION_APOLLO = "SELECT titre, astronautes, date from lune.missionsapollo";
//echo $MESSAGE_SQL_LISTE_MISSION_APOLLO;

$requeteListeMissionApollo = $basededonnees->prepare($MESSAGE_SQL_LISTE_MISSION_APOLLO);
$requeteListeMissionApollo->execute();
$listeMissionApollo = $requeteListeMissionApollo->fetchAll();
?>

<!doctype html>
<html lang="fr">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <head>
        <meta charset="utf-8">
        <title>La lune</title>
    </head>

    <body>
        <section>
            <h1 class="mt-5">Les missions Apollo</h1>

            <div id="liste-mission-apollo">
                <?php 
                foreach($listeMissionApollo as $lune)
                {
                ?>
                    <div class="mt-5 mb-5 mx-3 card">
                    <div class="illustration"></div>
                    <div class="card-body bg-light">
                            <h3 class="titre text-primary"><?=$lune['titre']?></h3>
                            <p class="astronautes">Astronautes présent: <?=$lune['astronautes']?></p>
                            <span class="date">Date de la mission: <?=$lune['date']?></span><br>
                            <a class="btn btn-primary mt-2" href="mission-apollo.php?mission-apollo=<?$lune['id'];?>" role="button">Voir plus...</a>
                        </div>
                    </div>
                <?php
                }
                ?>
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