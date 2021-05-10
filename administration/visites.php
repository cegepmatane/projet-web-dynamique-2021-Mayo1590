<?php

include "../configuration.php";
require CHEMIN_ACCESSEUR . "ClicDAO.php";
$listePArJour = ClicDAO::listerStatsParJour();
$joursDeLaSemaine = array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");

$listePArLangue = ClicDAO::listerStatsParLangue();
?>
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
            <a class="navbar-brand" href="index.php">La lune</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../index.php">Acueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="../liste-mission-apollo.php">Les missions Apollo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="../membre.php">Page membre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="../recherche-avancee.php">Recherche avancée</a>
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
            Tableau Statistiques
        </h1>
    </header>

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

    <footer>
        <nav class="navbar navbar-light bg-secondary">
            <div class="container-fluid">
                <span class="navbar-text"> &copy;Maya Lennox </span>
            </div>
        </nav>
    </footer>
</body>

</html>