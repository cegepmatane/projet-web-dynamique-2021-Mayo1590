<?php
require "../configuration.php";
include "../include/head-membre.php";

if (isset($_POST['inscription-identification'])) {
    if (
        empty($_POST['prenom'])
        || empty($_POST['nom'])
        || empty($_POST['organisation'])
    ) {
        $_SESSION['erreur'] = "Veuillez renseigner tous les champs !";
        header("location: inscripion-identification.php");
    } elseif (empty($_POST['courriel']) || !filter_var($_POST['courriel'], FILTER_VALIDATE_EMAIL)) {
        $_SESSION['erreur'] = "Courriel invalide !";
        header("location: inscripion-identification.php");
    } else {
        require CHEMIN_ACCESSEUR . "MembreDAO.php";
        $membre = MembreDAO::trouverCourriel($_POST['courriel']);

        if ($membre) {
            $_SESSION['erreur'] = "Ce courriel est déjà utilisé";
            header("location: inscription-identification.php");
        }

        if (!empty($_POST['inscription-identification'])) {

            $filtreMemebre = array(
                'prenom' => FILTER_SANITIZE_ENCODED,
                'nom' => FILTER_SANITIZE_ENCODED,
                'organisation' => FILTER_SANITIZE_STRING,
                'courriel' => FILTER_SANITIZE_EMAIL,
            );
            $_SESSION['membre'] = filter_var_array($_POST, $filtreMemebre);
        }
    }
}
?>

<span id="erreur2">
    <?php if (!empty($_SESSION['erreur2'])) {
         echo '<p class="text-warning">' . $_SESSION['erreur2'] . '</p>';
        unset($_SESSION['erreur2']);
    }
    ?>
</span>

<section id="contenu">
    <h2 class="mt-5 text-light text-center fw-lighter">Inscription d'un membre - Information 2/2</h2>

    <form method="post" class="mx-2 mt-5 text-center" enctype="multipart/form-data" action="traitement.php">

        <div class="input-group mt-5 w-75 centre">
            <span class="input-group-text">Pseudonyme</span>
            <input type="text" class="form-control" name="pseudonyme" />
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

        <div class="mb-5 mt-5 w-75 centre">
            <input class="form-control" type="file" name="avatar" id="formFile" />
        </div>

        <input type="submit" class="btn btn-primary mt-5 mb-5" name="inscription-information" value="Enregistrer" />
    </form>

</section>

<?php
include "../include/footer-membre.php"
?>