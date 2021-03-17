<?php
include "../include/head.php"
?>

<section id="contenu">
    <h2 class="mt-5 text-light text-center fw-lighter">Inscription d'un membre - Avater 3/3</h2>

    <form method="post" class="mx-2 mt-5 text-center" action="traitement.php">

        <div class="mb-5">
            <input class="form-control" type="file" name="avatar" id="formFile" />
        </div>

        <input type="submit" class="btn btn-primary mt-5 mb-5" name="membre-authentification" value="Enregistrer" />
    </form>

</section>

<?php
include "../include/footer.php"
?>