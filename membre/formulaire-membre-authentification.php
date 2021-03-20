<form method="post" class="mx-2 text-center" action="traitement-authentification">

    <div class="input-group mt-5">
        <span class="input-group-text">Pseudonyme</span>
        <input type="text" class="form-control" name="pseudonyme" />
    </div>

    <div class="input-group mt-5">
        <span class="input-group-text">Mot de passe</span>
        <input type="text" class="form-control" name="mdp" />
    </div>

    <a type="submit" class="btn btn-primary mt-5" name="membre-authentification" href="membre/traitement-authentification.php">Se connecter</a>

    <span class="erreur">
        <?php if (!empty($_SESSION['erreur'])) {
            echo $_SESSION['erreur'];
            unset($_SESSION['erreur']);
        }
        ?>
    </span>
</form>