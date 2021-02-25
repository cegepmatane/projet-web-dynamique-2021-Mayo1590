<?php

class BaseDeDonnees
{
    public static function getConnection()
    {
        error_reporting(E_ALL);
        ini_set('display_errors', 1);

        $adresseCourante = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

        $estSurServeurTim = strpos($adresseCourante, 'tiweb.cgmatane.qc.ca') !== false ? true : false;

        if ($estSurServeurTim) {
            $usager = 'tiweb_lennoxm';
            $motdepasse = 'n2vjdfzpF9';
            $hote = 'localhost';
            $base = 'tiweb_lennoxm';
        } else {
            $usager = 'root';
            $motdepasse = '';
            $hote = 'localhost';
            $base = 'lune';
        }

        $dsn = 'mysql:dbname=' . $base . ';host=' . $hote;
        $basededonnees = new PDO($dsn, $usager, $motdepasse);
        // Configurer la gestion d'erreurs
        $basededonnees->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // La ligne suivante est importante pour empêcher les problèmesd'affichages
        $basededonnees->exec('SET CHARACTER SET UTF8');

        return $basededonnees;
    }
}
