<?php
require "configuration.php";
require CHEMIN_ACCESSEUR . "MissionApolloDAO.php";

include "include/head.php";

$reussite = MissionApolloDAO::rechercherAvanceeMissionApollo();
?>

<section id="contenu">
    <h2 class="mt-5 text-light text-center fw-lighter">Résultats de recherche</h2>
    <p class="mt-5 mx-3 text-light">Il y a <?= count($reussite); ?> resultat(s)</p>

    <div id="resultats-recherche">

        <?php
        foreach ($reussite as $reussite) {
            $titre = $reussite['titre'];
            $astronautes = $reussite['astronautes'];
            $id = $reussite['id'];
            $date = $reussite['date'];
        ?>
            <div class="mt-5 mb-5 mx-3 card">
                <div class="card-body bg-secondary">
                    <h4 class="titre">
                        <?= $titre; ?>
                    </h4>
                    <div class="astronaues">
                        Astronautes présent: <?= $astronautes ?>
                    </div>
                    <div class="date">
                        Date de la mission: <?= $date ?>
                    </div>
                    <a class="btn btn-primary mt-2" href="mission-apollo.php?mission=<?= $id; ?>" role="button">Voir plus...</a>
                </div>
            </div>
        <?php
        }
        ?>

</section>

<?php
include "include/footer.php";
?>