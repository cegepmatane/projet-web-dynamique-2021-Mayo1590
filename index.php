<?php

require "configuration.php";
include "include/head.php"
?>

<h1 class="mt-5 text-light text-center fw-lighter">La lune</h1>

<form method="post" class="mx-2 mt-5 text-center" action="membre.php">
    <div class="card mb-5 mx-2" style="width: 20rem;">
        <div class="card-body bg-secondary text-center">
            <h4 class="card-title text-light">Vous êtes membre ?</h4>
            <input type="submit" class="btn btn-primary btn-lg mt-2 mb-2" name="membre-authentification" value="Se connecter" />
        </div>
    </div>
</form>

<section class="mx-2  mb-5 text-light">
    <div id="bienvenue-membre">
        <?php
        if (isset($_SESSION['membre']['pseudonyme']) && !empty($_SESSION['membre']['pseudonyme'])) {
        ?> <h5>Bonjour <?= $_SESSION['membre']['pseudonyme'] . "!</h5>";

                        echo '<div>
                    <a class="btn btn-primary btn-lg mt-2" href="membre/modifier-compte.php" role="button">Modifier compte</a>
                </div>';
                        echo '<div>
                    <a class="btn btn-primary btn-lg mt-2" href="membre/deconnexion.php" role="button">Se déconnecter</a>
                </div>';
                    }
                        ?>
    </div>
</section>

<?php
include "include/footer.php"
?>