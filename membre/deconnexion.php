<?php
require "../configuration.php";

if (isset($_SESSION['membre']['pseudonyme'])) {
    session_unset();

    session_destroy();

    header('location: ../membre.php');
} else {
    echo "Vous n'êtes pas connecté !";
}
