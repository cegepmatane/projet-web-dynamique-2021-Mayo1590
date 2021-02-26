<?php
require "configuration.php";
require CHEMIN_ACCESSEUR . "MissionApolloDAO.php";

include "include/head.php";
$listeMissionApollo = MissionApolloDAO::listerMissionApollo();
?>

<section>
    <h1 class="mt-5 text-light text-center fw-lighter">Les missions Apollo</h1>

    <div id="liste-mission-apollo">
        <?php
        foreach ($listeMissionApollo as $missionApollo) {
        ?>
            <div class="mt-5 mb-5 mx-3 card">
                <div class="card-body bg-secondary row mx-0">
                    <div class="col-3"><img src="image/<?= $missionApollo['image'] ?>" alt="image" class="image" /></div>
                    <div class="col-3">
                        <h3 class="titre"><?= $missionApollo['titre'] ?></h3>
                        <p class="astronautes">Astronautes présent: <?= $missionApollo['astronautes'] ?></p>
                        <span class="date">Date de la mission: <?= $missionApollo['date'] ?></span><br>
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