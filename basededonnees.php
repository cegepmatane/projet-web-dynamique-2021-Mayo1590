<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

$usager = 'root';
$motdepasse = '';
$hote = 'localhost';
$base = 'lune';

$dsn = 'mysql:dbname='.$base.';host=' . $hote;
$basededonnes = new PDO($dsn, $usager, $motdepasse);
$basededonnes ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$basededonnes->exec('SET CHARACTER SET UTF8');
?>