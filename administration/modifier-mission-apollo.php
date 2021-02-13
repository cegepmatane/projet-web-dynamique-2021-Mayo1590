<?php
$noMission = $_GET['mission'];

$SQL_MISSION_APOLLO = "SELECT * FROM `missionsapollo` WHERE `id` =" . $noMission;

include "basededonnees.php";
$requeteMissionApollo = $basededonnees->prepare($SQL_MISSION_APOLLO);
$requeteMissionApollo->execute();
$missionApollo = $requeteMissionApollo->fetch();

include "../include/head.php";
?>


<body>
    <header>
        <h1 class="text-light fw-lighter text-center mx-3 mt-5">Panneau d'administration-Les missions Apollo</h1>
    </header>

    <section id="contenu" class="mt-5 mb-5 mx-3 card">
        <div class="card-body bg-secondary text-center">
            <h2>Modifier une mission Apollo</h2>

            <form action="traitement-modifier-mission-apollo.php" method="post" class="row">
                <div class="input-group mt-5 col">
                    <span for="titre" class="input-group-text">Mission</span>
                    <input type="text" class="form-control" name="titre" id="titre" value="<?= $missionApollo['titre'] ?>" />
                </div>

                <div class="input-group mt-5 col">
                    <span for="astronaute" class="input-group-text">Astronaute</span>
                    <input type="text" class="form-control" name="astronautes" id="astronautes" value="<?= $missionApollo['astronautes'] ?>" />
                </div>

                <div class="input-group mt-5">
                    <span for="date" class="input-group-text">Date</span>
                    <input type="text" placeholder="ex: 2021-02-03" class="form-control" name="date" id="date" value="<?= $missionApollo['date'] ?>" />
                </div>

                <div class="input-group mt-5">
                    <span for="resume" class="input-group-text">Résumé</span>
                    <input type="text" class="form-control" name="resume" id="resume" value="<?= $missionApollo['resume'] ?>"></input>
                </div>

                <div class="input-group mt-5">
                    <span for="progres" class="input-group-text">Progrès</span>
                    <input type="text" class="form-control" name="progres" id="progres" value="<?= $missionApollo['progres'] ?>" />
                </div>

                <div class="input-group mt-5 mb-5 col">
                    <span for="reussis" class="input-group-text">Réussite</span>
                    <input type="text" class="form-control" name="reussi" id="reussis" value="<?= $missionApollo['reussi'] ?>" />
                </div>

                <div class="input-group mt-5 mb-5 col">
                    <span for="retour-astronaute" class="input-group-text">Astronaute en vie</span>
                    <input type="text" class="form-control" name="retour" id="retour-astronaute" value="<?= $missionApollo['retour'] ?>" />
                </div>

                <div class="mb-5">
                    <input class="form-control" type="file" id="formFile" value="<?= $missionApollo['image'] ?>" />
                </div>

                <input type="submit" class="btn btn-primary mt-2" value="Enregistrer" role="button" />
                <input type="hidden" name="id" value="<?= $missionApollo['id'] ?>">
            </form>
        </div>
    </section>

    <?php include "../inlude/footer.php"; ?>