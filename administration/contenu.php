<?php
include 'include/header.php';

require "../accesseurs/MissionApolloDAO.php";
$listeCategorie = MissionApolloDAO::listerCategories();
$contenu = MissionApolloDAO::calculerContenu();

if (isset($_SESSION['membre']['pseudonyme']) && !empty($_SESSION['membre']['pseudonyme']) && $_SESSION['membre']['permission'] > 0)
{
?>
<style>
    body {
        background: no-repeat top / cover url("") !important;
    }
</style>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <header>
        <h1 class="fw-lighter text-center mx-3 mt-5">
            Statistique des missions Apollo
        </h1>
    </header>

    <section class="contenu">
        <table class="table mt-5">
            <thead>
                <tr>
                    <th scope="col">Type de missions</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Nombres de jours moyen</th>
                    <th scope="col">Nombres de jours total</th>
                    <th scope="col">Nombres de jour maximum</th>
                    <th scope="col">Nombre de jours minimum</th>
                </tr>
            </thead>
            <?php
            foreach ($listeCategorie as $categorie) {
            ?>
                <tbody>
                    <tr>
                        <th scope="row"><?= $categorie['categorie'] ?></th>
                        <td><?= $categorie['nombre'] ?></td>
                        <td><?= floor($categorie['nombresJoursMoyen']) ?></td>
                        <td><?= $categorie['nombresJoursTotals'] ?></td>
                        <td><?= $categorie['nombresJoursMax'] ?></td>
                        <td><?= $categorie['nombresJoursMin'] ?></td>
                    </tr>
                </tbody>
            <?php
            }
            ?>
        </table>

        <div class="mx-2">
            <?php
            foreach ($contenu as $contenus) {
            ?>
                <p>Durée moyenne des missions: <?= floor($contenus["moyenne"]) . " jours" ?></p>
                <p>Écart-type: <?= round($contenus["ecartType"], 1) ?></p>
            <?php
            }
            ?>
        </div>

        <div class="chart-container mx-2 mb-5 mt-5">
            <canvas id="graphique"></canvas>
        </div>
    </section>
    <script>
        <?php
        foreach ($listeCategorie as $categorie) {
            $categories[] = "\"" . $categorie['categorie'] . "\"";
            $nombreParCategorie[] = $categorie['nombre'];
        }
        ?>
        const donnees = [<?php echo implode(',', $nombreParCategorie); ?>];
        const etiquettes = [<?php echo implode(',', $categories); ?>];
        const couleurs = ['red', 'blue', 'orange'];

        const cible = document.getElementById('graphique');
        const graphiqueTarte = new Chart(cible, {
            type: 'pie',
            data: {
                labels: etiquettes,
                datasets: [{
                    label: 'Contenu par catégorie',
                    data: donnees,
                    backgroundColor: couleurs
                }]
            },
            options: {
                responsive: true
            }
        });
    </script>

<?php 
}
include 'include/footer.php';
?>