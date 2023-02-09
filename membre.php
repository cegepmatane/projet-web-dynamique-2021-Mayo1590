<?php
require "configuration.php";
require "accesseurs/MembreDAO.php";

include "include/head.php";
?>

<section>
    <h1 class="mt-5 text-light text-center fw-lighter">Page membre</h1>
    <?php
    if (empty($_SESSION['membre']['pseudonyme'])) {
        
        echo '<div>
                    <a class="btn btn-lg btn-primary centre-pourcentage mt-5 mb-5" href="membre/inscription-identification.php" role="button">Créer un compte</a>
              </div>';
        include_once "membre/formulaire-membre-authentification.php";
    } else {
        $membre = MembreDAO::lireMembre($_SESSION['membre']['pseudonyme']);

        include_once "membre/vue-membre-detail.php";
    }
    ?>
</section>

<section class="mx-2 text-light mb-5">
    <div id="bienvenue-membre">
        <?php
        if (isset($_SESSION['membre']['pseudonyme']) && !empty($_SESSION['membre']['pseudonyme'])) {
        ?> <h5 class="mt-5">Bonjour <?= $_SESSION['membre']['pseudonyme'] . "!</h5>";

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
include "include/footer.php";
?>