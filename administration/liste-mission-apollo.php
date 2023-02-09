<?php
require '../configuration.php';
include_once CHEMIN_ACCESSEUR . 'MissionApolloDAO.php';
$listeMissionApollo = MissionApolloDAO::listerMissionApollo();

include 'include/header.php';
?>

    <section>
        <h1 class="mt-5 text-center fw-lighter text-light">Panneau d'administration - Les missions Apollo</h1>

        <a class="btn btn-lg btn-primary mx-3 mt-2" href="ajouter-mission-apollo.html" role="button">Ajouter</a>

        <div id="liste-mission-apollo">
            <?php
            foreach ($listeMissionApollo as $missionApollo) {
            ?>
                <div class="mt-5 mb-5 mx-3 card text-center">
                    <div class="card-body bg-secondary row">
                        <h3 class="titre"><?= $missionApollo['titre'] ?></h3>
                        <p class="astronautes">Astronautes présent: <?= $missionApollo['astronautes'] ?></p>
                        <span class="date">Date de la mission: <?= $missionApollo['date'] ?></span><br>
                        <div><img src="../image/<?= $missionApollo['image'] ?>" alt="image" class="image" /></div>
                        <a class="btn btn-primary mt-3 col mx-5" href="modifier-mission-apollo.php?mission=<?= $missionApollo['id']; ?>" role="button">Modifier</a>
                        <a class="btn btn-primary mt-3 col mx-5" href="traitement-suprimer-mission-apollo.php?mission=<?= $missionApollo['id']; ?>" role="button">Supprimer</a>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </section>

<?php include 'include/footer.php'; ?>