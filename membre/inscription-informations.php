<?php
include "../include/head.php"
?>

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