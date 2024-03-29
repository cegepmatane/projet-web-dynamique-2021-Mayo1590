<?php
require "../configuration.php";
include "../include/head-membre.php"
?>

<section id="contenu">
    <h2 class="mt-5 text-light text-center fw-lighter">Inscription d'un membre - Identification 1/2</h2>

    <?php if (!empty($_SESSION['erreur'])) {
        echo '<p class="text-warning">' . $_SESSION['erreur'] . '</p>';
        unset($_SESSION['erreur']);
    }
    ?>

    <form method="post" class="mx-2 mt-5 text-center" action="inscription-informations.php">

        <div class="row w-75 centre">
            <div class="input-group mt-5 col">
                <span class="input-group-text">Prénom</span>
                <input type="text" class="form-control" name="prenom" />
            </div>

            <div class="input-group mt-5 col">
                <span class="input-group-text">Nom</span>
                <input type="text" class="form-control" name="nom" />
            </div>
        </div>

        <div class="input-group mt-5 w-75 centre">
            <span class="input-group-text">Organisation</span>
            <input type="text" class="form-control" name="organisation" />
        </div>

        <div class="input-group mt-5 w-75 centre">
            <span class="input-group-text">Courriel</span>
            <input type="text" class="form-control" name="courriel" />
        </div>

        <input type="submit" class="btn btn-primary mt-5 mb-5" name="inscription-identification" value="Suivant" />
    </form>

</section>

<?php
include "../include/footer-membre.php"
?>