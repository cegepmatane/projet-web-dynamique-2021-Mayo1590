<!DOCTYPE html>
<html lang="fr">

<head>
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
            Dashboard
        </h1>
    </header>

    <section class="row mx-3">
        <div class="card text-center mb-5 mt-5 bg-success col">
            <img src="../image/liste.jpg" class="card-img-top" alt="liste">
            <div class="card-body">
                <h5 class="card-title mb-3">Ajouter/modifier liste mission Apollo</h5>
                <a href="liste-mission-apollo.php" class="btn btn-light">Voir plus</a>
            </div>
        </div>

        <div class="card mx-2 text-center mb-5 mt-5 bg-success col">
            <img src="../image/pensee.jpg" class="card-img-top" alt="pensée">
            <div class="card-body">
                <h5 class="card-title mb-3">Pensée du jour</h5>
                <a href="#" class="btn btn-light">Voir plus</a>
            </div>
        </div>

        <div class="card mx-2 text-center mb-5 mt-5 bg-success col">
            <img src="../image/contenu.jpg" class="card-img-top" alt="contenu">
            <div class="card-body">
                <h5 class="card-title mb-3">Statistiques de contenu</h5>
                <a href="contenu.php" class="btn btn-light">Voir plus</a>
            </div>
        </div>
    </section>

    <section class="row mx-3">
        <div class="card text-center mb-5 mt-5 bg-success col">
            <img src="../image/visite.jpg" class="card-img-top" alt="liste">
            <div class="card-body">
                <h5 class="card-title mb-3">Statistiques de visites</h5>
                <a href="visites.php" class="btn btn-light">Voir plus</a>
            </div>
        </div>

        <div class="card mx-2 text-center mb-5 mt-5 bg-success col">
            <img src="../image/humeur.jpg" class="card-img-top" alt="pensée">
            <div class="card-body">
                <h5 class="card-title mb-3">Humeur du jour</h5>
                <a href="#" class="btn btn-light">Voir plus</a>
            </div>
        </div>

        <div class="card mx-2 text-center mb-5 mt-5 bg-success col">
            <img src="../image/image.jpg" class="card-img-top" alt="contenu">
            <div class="card-body">
                <h5 class="card-title mb-3">Image du jour</h5>
                <a href="#" class="btn btn-light">Voir plus</a>
            </div>
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