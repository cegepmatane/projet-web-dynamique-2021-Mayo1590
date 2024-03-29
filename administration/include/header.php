<?php
require 'configuration.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous" />
    <link rel="stylesheet" href="../include/style.css" />
    <meta charset="utf-8" />
    <title>Dashboard</title>
</head>

<?php
if (isset($_SESSION['membre']['pseudonyme']) && !empty($_SESSION['membre']['pseudonyme']) && $_SESSION['membre']['permission'] > 0)
{
?> 
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
                        <a class="nav-link active" aria-current="page" href="index.php">Accueil</a>
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
                    <li class="nav-item">
                        <a class="nav-link active" href="https://lune.mayalennox.com/">Revenir au site</a>
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
    <?php
}
else {
    echo '<p class="text-light">Bien essayé :)</p>';
}
?>