<?php

class BaseDeDonnees
{
    public static function getConnection()
    {
        error_reporting(E_ALL);
        ini_set('display_errors', 1);

        $usager = 'lune';
        $motdepasse = 'V!y0j%1hsg'; //ceci est un exemple
        $hote = 'localhost';
        $base = 'lune';

        $dsn = 'mysql:dbname=' . $base . ';host=' . $hote;
        $basededonnees = new PDO($dsn, $usager, $motdepasse);
        // Configurer la gestion d'erreurs
        $basededonnees->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // La ligne suivante est importante pour empêcher les problèmes d'affichages
        $basededonnees->exec('SET CHARACTER SET UTF8');

        return $basededonnees;
    }
}
