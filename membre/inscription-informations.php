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
        header("location: inscription-identification.php");
    } elseif (empty($_POST['courriel']) || !filter_var($_POST['courriel'], FILTER_SANITIZE_EMAIL)) {
        $_SESSION['erreur'] = "Courriel invalide !";
        header("location: inscription-identification.php");
    } else {
        require CHEMIN_ACCESSEUR . "MembreDAO.php";
        $membre = MembreDAO::trouverCourriel($_POST['courriel']);

        if ($membre) {
            $_SESSION['erreur'] = "Ce courriel est déjà utilisé";
            header("location: inscritpion-identification.php");
        }

        if (empty($_POST['inscription-identification'])) {

            $filtreMemebre = array(
                'prenom' => FILTER_SANITIZE_ENCODED,
                'nom' => FILTER_SANITIZE_ENCODED,
                'organisation' => FILTER_SANITIZE_STRING,
                'courriel' => FILTER_SANITIZE_EMAIL,
            );
            $_SESSION['membre'] = filter_var_array($_POST, $filtreMembre);
        }
    }
}
?>

<span id="erreur2">
    <?php if (!empty($_SESSION['erreur2'])) {
        echo $_SESSION['erreur2'];
        unset($_SESSION['erreur2']);
    }
    ?>
</span>

<section id="contenu">
    <h2 class="mt-5 text-light text-center fw-lighter">Inscription d'un membre - Information 2/3</h2>

    <form method="post" class="mx-2 mt-5 text-center row" action="inscription-avatar.php">

        <div class="input-group mt-5">
            <span class="input-group-text">Pseudonyme</span>
            <input type="text" class="form-control" name="pseudonyme" />
        </div>

        <div class="input-group mt-5 col">
            <span class="input-group-text">Mot de passe</span>
            <input type="text" class="form-control" name="mdp" />
        </div>

        <div class="input-group mt-5 col">
            <span class="input-group-text">Confirmation mot de passe</span>
            <input type="text" class="form-control" name="mdp2" />
        </div>

        <input type="submit" class="btn btn-primary mt-5 mb-5" name="membre-authentification" value="Suivant" />
    </form>

</section>

<?php
include "../include/footer.php"
?>