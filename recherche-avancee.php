<?php
include "include/head.php";
?>

<section id="contenu">
    <h1 class="mt-5 text-light text-center fw-lighter">Recherche avancée</h1>
    <form method="get" action="resultat-recherche-avancee.php" class="mx-2 row">
        <div class="input-group mt-5">
            <span class="input-group-text" for="recherche-titre">Titre</span>
            <input type="text" class="form-control" name="recherche-titre" id="recherche-titre" />
        </div>

        <div class="input-group mt-5 col">
            <span class="input-group-text" for="recherche-astronautes">Astronautes</span>
            <input type="text" class="form-control" name="recherche-astronautes" id="recherche-astronautes" />
        </div>

        <div class="input-group mt-5 col">
            <span class="input-group-text" for="recherche-date">Date</span>
            <input type="text" class="form-control" name="recherche-date" id="recherche-date" />
        </div>

        <div class="input-group mt-5">
            <span class="input-group-text" for="recherche-resume">Resume</span>
            <input type="text" class="form-control" name="recherche-resume" id="recherche-resume" />
        </div>

        <div class="input-group mt-5 col">
            <span class="input-group-text" for="recherche-progres">Progrès</span>
            <input type="text" class="form-control" name="recherche-progres" id="recherche-progres" />
        </div>

        <div class="input-group mt-5 col">
            <span class="input-group-text" for="recherche-reussi">Réussi</span>
            <input type="text" class="form-control" name="recherche-reussi" id="recherche-reussi" />
        </div>

        <div class="input-group mt-5 mb-5">
            <span class="input-group-text" for="recherche-retour">Retour</span>
            <input type="text" class="form-control" name="recherche-retour" id="recherche-retour" />
        </div>
        <input type="submit" class="btn btn-primary mb-5">
    </form>
</section>

<?php
include "include/footer.php";
?>