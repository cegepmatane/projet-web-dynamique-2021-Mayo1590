<?php
$pseudonymeSession = $_SESSION['pseudonyme'];

include "../basededonnees.php";

$SQL_LIRE_MEMBRE = "SELECT * FROM membre WHERE pseudonyme = '$pseudonymeSession";

$requeteMemebre = $basededonnees->prepare($SQL_LIRE_MEMBRE);
$requeteMemebre->execute();
$membre = $requeteMemebre->fetch();
?>

<section>

    <h2>Mon compte</h2>

    <form action="" method="">
        <div class="input-group mt-5 col">
            <span class="input-group-text">Prénom</span>
            <input type="text" class="form-control" name="prenom" value="<?= $membre['prenom'] ?>" />
        </div>

        <div class="input-group mt-5 col">
            <span class="input-group-text">Nom</span>
            <input type="text" class="form-control" name="nom" value="<?= $membre['nom'] ?>" />
        </div>

        <div class="input-group mt-5">
            <span class="input-group-text">Organisation</span>
            <input type="text" class="form-control" name="organisation" value="<?= $membre['organisation'] ?>" />
        </div>

        <div class="input-group mt-5">
            <span class="input-group-text">Courriel</span>
            <input type="text" class="form-control" name="courriel" value="<?= $membre['courriel'] ?>" />
        </div>
        <div class="input-group mt-5">
            <span class="input-group-text">Pseudonyme</span>
            <input type="text" class="form-control" name="pseudonyme" value="<?= $membre['pseudonyme'] ?>" />
        </div>

        <div class="input-group mt-5 col">
            <span class="input-group-text">Mot de passe</span>
            <input type="password" class="form-control" name="mdp" value="<?= $membre['mdp'] ?>" />
        </div>

        <div class="input-group mt-5 col">
            <span class="input-group-text">Confirmation mot de passe</span>
            <input type="password" class="form-control" name="mdp2" value="<?= $membre['mdp'] ?>" />
        </div>

        <div class="mb-5 mt-5">
            <input class="form-control" type="file" name="avatar" id="formFile" value="<?= $membre['avatar'] ?>" />
        </div>

    </form>
</section>