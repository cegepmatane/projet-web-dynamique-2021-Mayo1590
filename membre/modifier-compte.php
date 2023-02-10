<?php
require "../configuration.php";
include "../include/head-membre.php";
$pseudonymeSession = $_SESSION['membre']['pseudonyme'];

include CHEMIN_ACCESSEUR . "MembreDAO.php";

$membre = MembreDAO::lireMembre($pseudonymeSession);
?>

<section>

    <h2 class="text-light text-center fw-lighter mt-5">Modifier compte</h2>

    <form action="" method="">
        <div class="row w-75 centre">
            <div class="input-group mt-5 col">
                <span class="input-group-text">Prénom</span>
                <input type="text" class="form-control" name="prenom" value="<?= $membre['prenom'] ?>" />
            </div>

            <div class="input-group mt-5 col">
                <span class="input-group-text">Nom</span>
                <input type="text" class="form-control" name="nom" value="<?= $membre['nom'] ?>" />
            </div>
        </div>

        <div class="input-group mt-5 w-75 centre">
            <span class="input-group-text">Organisation</span>
            <input type="text" class="form-control" name="organisation" value="<?= $membre['organisation'] ?>" />
        </div>

        <div class="input-group mt-5 w-75 centre">
            <span class="input-group-text">Courriel</span>
            <input type="text" class="form-control" name="courriel" value="<?= $membre['courriel'] ?>" />
        </div>
        <div class="input-group mt-5 w-75 centre">
            <span class="input-group-text">Pseudonyme</span>
            <input type="text" class="form-control" name="pseudonyme" value="<?= $membre['pseudonyme'] ?>" />
        </div>

        <div class="row w-75 centre">
            <div class="input-group mt-5 col">
                <span class="input-group-text">Mot de passe</span>
                <input type="password" class="form-control" name="mdp" />
            </div>

            <div class="input-group mt-5 col">
                <span class="input-group-text">Confirmation mot de passe</span>
                <input type="password" class="form-control" name="mdp2" />
            </div>
        </div>

        <?php 
        if($_SESSION['membre']['pseudonyme'] == "AdminLune")
        {
        ?>
            <p class="text-warning text-center mt-5">Avertissement! Vous ne pouvez pas midifier ce compte.</p>
            <input type="" class="btn btn-primary mb-5 centre-pourcentage disabled" value="Suivant" />
        <?php
        }
        else {
        ?>
            <input type="submit" class="btn btn-primary mt-5 mb-5 centre-pourcentage" name="modification" value="Suivant" />
        <?php
        }
        ?>
    </form>
</section>

<?php include "../include/footer-membre.php"; ?>