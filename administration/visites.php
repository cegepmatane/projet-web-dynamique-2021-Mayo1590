<?php

include 'include/header.php';
require "../accesseurs/ClicDAO.php";
$listePArJour = ClicDAO::listerStatsParJour();
$joursDeLaSemaine = array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");

$listePArLangue = ClicDAO::listerStatsParLangue();

?>
<!--temp-->
<style>
    body {
        background: no-repeat top / cover url("") !important;
    }
</style>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <header>
        <h1 class="fw-lighter text-center mx-3 mt-5">
            Tableau Statistiques
        </h1>
    </header>

    <section class="contenu">
        <table class="table mt-5">
            <thead>
                <tr>
                    <th scope="col">Jour</th>
                    <th scope="col">Clics</th>
                    <th scope="col">Visites</th>
                </tr>
            </thead>
            <?php
            foreach ($listePArJour as $jourEnregistrer) {
            ?>
                <tbody>
                    <tr>
                        <th scope="row"><?php
                                        echo $joursDeLaSemaine[$jourEnregistrer['jour'] - 1];
                                        ?></th>
                        <td><?= $jourEnregistrer['clics'] ?></td>
                        <td><?= $jourEnregistrer['visites'] ?></td>
                    </tr>
                </tbody>
            <?php
            }
            ?>
        </table>

        <table class="table mt-5">
            <thead>
                <tr>
                    <th scope="col">Langue</th>
                    <th scope="col">Clics</th>
                    <th scope="col">Visites</th>
                </tr>
            </thead>
            <?php
            foreach ($listePArLangue as $langueEnregistrer) {
            ?>
                <tbody>
                    <tr>
                        <th scope="row"><?= $langueEnregistrer['langue'] ?></th>
                        <td><?= $langueEnregistrer['clics'] ?></td>
                        <td><?= $langueEnregistrer['visites'] ?></td>
                    </tr>
                </tbody>
            <?php
            }
            ?>
        </table>

        <div class="chart-container mx-2 mb-5 mt-5">
            <canvas id="graphique-jour"></canvas>
        </div>
    </section>

    <script>
        <?php
        foreach ($listePArJour as $jourEnregistrer) {
            $jour[] = "\"" . $joursDeLaSemaine[$jourEnregistrer['jour'] - 1] . "\"";
            $nombreVisitesParJour[] = $jourEnregistrer['visites'];
        }
        ?>
        const donnees = [<?php echo implode(',', $nombreVisitesParJour); ?>];
        const etiquettes = [<?php echo implode(',', $jour); ?>];

        const cible = document.getElementById('graphique-jour').getContext('2d');
        const graphiqueLigne = new Chart(cible, {
            type: 'line',
            data: {
                labels: etiquettes,
                datasets: [{
                    label: 'Visite par jour',
                    data: donnees,
                    backgroundColor: 'grey',
                    borderColor: 'blue'
                }]
            },
            options: {
                responsive: true
            }
        });
    </script>

<?php include 'include/footer.php'; ?>