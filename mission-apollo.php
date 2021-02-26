<?php

require "configuration.php";
require CHEMIN_ACCESSEUR . 'MissionApolloDAO.php';

$idMissionApollo = filter_var($_GET['mission'], FILTER_SANITIZE_NUMBER_INT);

include "include/head.php";
$listeMissionApollo = MissionApolloDAO::lireMissionApollo($idMissionApollo);
?>

<section>
    <div class="mx-3 mt-5 mb-5 card">
        <div class="card-body bg-secondary text-light text-center">
            <h1 class="text-light fw-lighter"><?= $missionApollo['titre']; ?></h1>
            <div class="fs-5">
                <p class="astronautes">Astronautes présent: <?= $missionApollo['astronautes'] ?></p>
                <span class="date">Date de la mission: <?= $missionApollo['date'] ?></span>
                <p class="resume">Mission: <?= $missionApollo['resume'] ?></p>
                <p class="progres">Progrès que cette mission a procuré: <?= $missionApollo['progres'] ?></p>
                <p class="reussi">Réussite de la mission: <?= $missionApollo['reussi'] ?></p>
                <p class="retour-astronautes">Astronaute encore vivant aujourd'hui: <?= $missionApollo['retour'] ?></p>
                <div class="image"><img src="image/<?= $missionApollo['image'] ?>" alt="image" /></div><br>
            </div>
            <a class="btn btn-primary btn-lg mt-2" href="liste-mission-apollo.php" role="button">Revenir...</a>
        </div>
    </div>

</section>

<?php
include "include/footer.php";
?>