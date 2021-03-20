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

<div id="bienvenue">
    <?php
    if (!empty($SESSION['membre'])) {
    ?> Bonjour <?php echo $_SESSION['membre']['pseudonyme'] . "!";
                echo $_SESSION['membre']['avatar'];
            }
                ?>
</div>

<?php
include "include/footer.php"
?>