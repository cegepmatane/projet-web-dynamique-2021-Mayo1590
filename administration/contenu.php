<?php

include "../configuration.php";

require "../accesseurs/MissionApolloDAO.php";
$listeCategorie = MissionApolloDAO::listerCategories();
$contenu = MissionApolloDAO::calculerContenu();
?>
<style>
    body {
        background: no-repeat top / cover url("") !important;
    }
</style>
<!DOCTYPE html>
<html lang="fr">

<head>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous" />
    <link rel="stylesheet" href="../include/style.css" />
    <meta charset="utf-8" />
    <title>Dashboard</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Dashboard</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Acueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="liste-mission-apollo.php">Ajouter/modifier mission apollo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="contenu.php">Contenu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="visites.php">Visites</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Rechercher" aria-label="Search" />
                    <button class="btn btn-outline-primary" type="submit">
                        Rechercher
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <header>
        <h1 class="fw-lighter text-center mx-3 mt-5">
            Statistique des missions Apollo
        </h1>
    </header>

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

    <footer>
        <nav class="navbar navbar-light bg-secondary">
            <div class="container-fluid">
                <span class="navbar-text"> &copy;Maya Lennox </span>
            </div>
        </nav>
    </footer>
</body>

</html>