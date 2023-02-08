<?php
require '../configuration.php';
include_once CHEMIN_ACCESSEUR . 'MissionApolloDAO.php';
$listeMissionApollo = MissionApolloDAO::listerMissionApollo();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous" />
    <link rel="stylesheet" href="../include/style.css" />
    <meta charset="utf-8" />
    <title>La lune</title>
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

    <section>
        <h1 class="mt-5 text-center fw-lighter">Panneau d'administration-Les missions Apollo</h1>

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

    <footer>
        <nav class="navbar navbar-light bg-secondary">
            <div class="container-fluid">
                <span class="navbar-text"> &copy;Maya Lennox </span>
            </div>
        </nav>
    </footer>
</body>

</html>