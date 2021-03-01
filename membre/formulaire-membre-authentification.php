<form method="post" action="traitement-authentification">

    <div class="input-group mt-5">
        <span class="input-group-text">Pseudonyme</span>
        <input type="text" class="form-control" name="pseudonyme" />
    </div>

    <div class="input-group mt-5">
        <span class="input-group-text">Mot de passe</span>
        <input type="text" class="form-control" name="mdp" />

        <input type="submit" class="btn btn-primary mt-2" name="membre-authentification" value="Envoyer" />
    </div>

    <span class="erreur">
        <?php if (!empty($_SESSION['erreur'])) {
            echo $_SESSION['erreur'];
            unset($_SESSION['erreur']);
        }
        ?>
    </span>
</form>