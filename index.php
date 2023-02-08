<?php

require "configuration.php";
include "include/head.php";

require "accesseurs/ClicDAO.php";
ClicDAO::enregistrerVisite($_SERVER);
?>

<div class="contenu">
    <h1 class="mt-5 text-light text-center fw-lighter">La lune</h1>

    <section class="row">
        <form method="post" class="ms-5 mx-2 mt-5 text-center col" action="membre.php">
            <div class="card mb-5 mx-2" style="width: 20rem;">
                <div class="card-body bg-secondary text-center">
                    <h4 class="card-title text-light">Vous êtes membre ?</h4>
                    <input type="submit" class="btn btn-primary btn-lg mt-2 mb-2" name="membre-authentification" value="Se connecter" />
                </div>
            </div>
        </form>
        <p class="me-5 mt-5 col text-light fs-5">
            Bienvenue sur mon site, vous pouvez voir les missions apollo sous ou si vous souhaiter en ajouter vous pouvez utiliser le compte administrateur 
            AdminLune avec le mot de passe AdminLune1234, il permet aussi d'explorer le panneau admin. Veuillez noter que ce compte permet seulement d'ajouter des éléments
            vous pouvez seulement explorer la page de modification. 
        </p>
    </section>

    <section class="mx-2  mb-5 text-light">
        <div id="bienvenue-membre">
            <?php
            if (isset($_SESSION['membre']['pseudonyme']) && !empty($_SESSION['membre']['pseudonyme'])) {
            ?> <h5 class="ms-5">Bonjour <?= $_SESSION['membre']['pseudonyme'] . "!</h5>";

                            echo '<div>
                        <a class="ms-5 btn btn-primary btn-lg mt-2" href="membre/modifier-compte.php" role="button">Modifier compte</a>
                    </div>';
                            echo '<div>
                        <a class="ms-5 btn btn-primary btn-lg mt-2" href="membre/deconnexion.php" role="button">Se déconnecter</a>
                    </div>';
                        }
                            ?>
        </div>
        
    </section>
</div>


<?php
include "include/footer.php"
?>