<form method="post" class="mx-2 text-center" action="membre/traitement-authentification.php">

    <div class="input-group mt-5">
        <span class="input-group-text">Pseudonyme</span>
        <input type="text" class="form-control" name="pseudonyme" />
    </div>

    <div class="input-group mt-5">
        <span class="input-group-text">Mot de passe</span>
        <input type="password" class="form-control" name="mdp" />
    </div>

    <input type="submit" class="btn btn-primary mt-5" name="membre-authentification" href="membre/traitement-authentification.php" />

    <span id="erreur3">
        <?php if (!empty($_SESSION['erreur3'])) {
            echo $_SESSION['erreur3'];
            unset($_SESSION['erreur3']);
        }
        ?>
    </span>
</form>