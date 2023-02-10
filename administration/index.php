<?php
include 'include/header.php';
if (isset($_SESSION['membre']['pseudonyme']) && !empty($_SESSION['membre']['pseudonyme']) && $_SESSION['membre']['permission'] > 0)
{
?>
    <header>
        <h1 class="fw-lighter text-center mx-3 mt-5 text-light">
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
            <img src="../image/contenu.jpg" class="card-img-top" alt="contenu">
            <div class="card-body">
                <h5 class="card-title mb-3">Statistiques de contenu</h5>
                <a href="contenu.php" class="btn btn-light">Voir plus</a>
            </div>
        </div>

        <div class="card text-center mb-5 mt-5 bg-success col">
            <img src="../image/visite.jpg" class="card-img-top" alt="liste">
            <div class="card-body">
                <h5 class="card-title mb-3">Statistiques de visites</h5>
                <a href="visites.php" class="btn btn-light">Voir plus</a>
            </div>
        </div>
    </section>
        

<?php } include 'include/footer.php'  ?>