<?php
require "configuration.php";
require CHEMIN_ACCESSEUR . "MembreDAO.php";

include "include/head.php";
?>

<section>
    <h1>La lune</h1>
    <div id="bienvenue-membre">
        <?php
        if (isset($_SESSION['membre']['pseudonyme']) && !empty($_SESSION['membre']['pseudonyme'])) {
        ?> Bonjour <?= $_SESSION['membre']['pseudonyme'] . "!";

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

<section>
    <h2>Membre</h2>
    <?php
    if (empty($_SESSION['membre']['pseudonyme'])) {
        include_once "membre/formulaire-membre-autentification.php";
        echo '<div>
                    <a class="btn btn-primary btn-lg mt-2" href="membre/inscription-identification.php" role="button">Créer un compte membre</a>
              </div>';
    } else {
        $membre = MembreDAO::lireMembre($_SESSION['membre']['pseudonyme']);

        include_once "membre/vue-membre-detail.php";
    }
    ?>
</section>
<?php
include "include/footer.php";
?>