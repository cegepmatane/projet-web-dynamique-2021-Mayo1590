<?php
require "configuration.php";
require "accesseurs/MissionApolloDAO.php";

include "include/head.php";
$listeMissionApollo = MissionApolloDAO::listerMissionApollo();

require "accesseurs/ClicDAO.php";
ClicDAO::enregistrerVisite($_SERVER);
?>

<section class="marge">
    <h1 class="mt-5 text-light text-center fw-lighter">Les missions Apollo</h1>

    <a class="btn btn-primary ms-5 mt-2 mx-2" href="liste-mission-exel.php" role="button">Exporter la liste vers Excel</a>
    <div id="liste-mission-apollo">
        <?php
        foreach ($listeMissionApollo as $missionApollo) {
        ?>
            <div class="ms-5 me-5 mt-3 mb-5 mx-3 card">
                <div class="card-body bg-secondary row mx-0">
                    <div class="col-3"><img src="image/<?= $missionApollo['image'] ?>" alt="image" class="image" /></div>
                    <div class="col-3">
                        <h3 class="titre"><?= $missionApollo['titre'] ?></h3>
                        <p class="astronautes">Astronautes présent: <?= $missionApollo['astronautes'] ?></p>
                        <span class="date">Date de la mission: <?= $missionApollo['date'] ?></span>
                        <a class="btn btn-primary mt-2" href="mission-apollo.php?mission=<?= $missionApollo['id']; ?>" role="button">Voir plus...</a>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</section>

<?php include "include/footer.php"; ?>