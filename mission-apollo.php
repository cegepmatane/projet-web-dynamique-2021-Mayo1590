<?php

require "configuration.php";
require CHEMIN_ACCESSEUR . 'MissionApolloDAO.php';

$idMissionApollo = filter_var($_GET['mission'], FILTER_SANITIZE_NUMBER_INT);

include "include/head.php";
$missionApollo = MissionApolloDAO::lireMissionApollo($idMissionApollo);

require CHEMIN_ACCESSEUR . "ClicDAO.php";
ClicDAO::enregistrerVisite($_SERVER);
?>

<section class="marge">

    <a class="btn btn-primary ms-5 mt-3 mx-2" href="mission-pdf.php?mission=<?= $idMissionApollo ?>" role="button">Exporter la liste vers un format PDF</a>

    <div class="mx-3 mt-3 mb-5 ms-5 me-5 card text-center">
        <div class="card-body bg-secondary text-light">
            <h1 class="text-light fw-lighter text-center"><?= $missionApollo['titre']; ?></h1>
            <div class="ms-5">
                <div class="image"><img src="image/<?= $missionApollo['image'] ?>" alt="image" /></div>

                <h4>Astronautes présent :</h4>
                <p class="astronautes"><?= $missionApollo['astronautes'] ?></p>

                <h4>Date de la mission :</h4>
                <span class="date"><?= $missionApollo['date'] ?></span>

                <h4>Mission :</h4>
                <p class="resume"><?= $missionApollo['resume'] ?></p>

                <h4>Progrès que cette mission a procuré :</h4>
                <p class="progres"><?= $missionApollo['progres'] ?></p>

                <h4>Réussite de la mission :</h4>
                <p class="reussi"><?= $missionApollo['reussi'] ?></p>

                <h4>Astronaute encore vivant aujourd'hui :</h4>
                <p class="retour-astronautes"><?= $missionApollo['retour'] ?></p>
            </div>
            <a class="btn btn-primary btn-lg mt-2" href="liste-mission-apollo.php" role="button">Revenir...</a>
        </div>
    </div>
</section>

<?php
include "include/footer.php";
?>