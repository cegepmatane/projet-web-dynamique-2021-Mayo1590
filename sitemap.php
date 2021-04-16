<?php

require "configuration.php";
require CHEMIN_ACCESSEUR . "MissionApolloDAO.php";
$listeMission = MissionApolloDAO::listerMissionApollo();

header("Content-Type: application/xml; charset=utf-8");
echo '<?xml version="1.0" encoding="UTF-8"?>'

?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
            http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
    <!-- created with Free Online Sitemap Generator www.xml-sitemaps.com -->


    <url>
        <loc>http://tiweb.cgmatane.qc.ca/etudiants/2020/lennoxm/projet-web-dynamique-2021-Mayo1590/</loc>
        <lastmod>2021-04-16T18:39:27+00:00</lastmod>
        <priority>1.00</priority>
    </url>
    <url>
        <loc>http://tiweb.cgmatane.qc.ca/etudiants/2020/lennoxm/projet-web-dynamique-2021-Mayo1590/index.php</loc>
        <lastmod>2021-04-16T18:39:27+00:00</lastmod>
        <priority>0.80</priority>
    </url>
    <url>
        <loc>http://tiweb.cgmatane.qc.ca/etudiants/2020/lennoxm/projet-web-dynamique-2021-Mayo1590/liste-mission-apollo.php</loc>
        <lastmod>2021-04-16T18:39:27+00:00</lastmod>
        <priority>0.80</priority>
    </url>
    <url>
        <loc>http://tiweb.cgmatane.qc.ca/etudiants/2020/lennoxm/projet-web-dynamique-2021-Mayo1590/membre.php</loc>
        <lastmod>2021-04-16T18:39:27+00:00</lastmod>
        <priority>0.80</priority>
    </url>
    <url>
        <loc>http://tiweb.cgmatane.qc.ca/etudiants/2020/lennoxm/projet-web-dynamique-2021-Mayo1590/recherche-avancee.php</loc>
        <lastmod>2021-04-16T18:39:27+00:00</lastmod>
        <priority>0.80</priority>
    </url>

    <?php
    foreach ($listeMission as $mission) {
    ?>
        <url>
            <loc>http://tiweb.cgmatane.qc.ca/etudiants/2020/lennoxm/projet-web-dynamique-2021-Mayo1590/mission-apollo.php?mission=<?= $mission['id'] ?></loc>
            <lastmod>2021-04-16T18:39:27+00:00</lastmod>
            <priority>0.64</priority>
        </url>
    <?php
    }
    ?>


    <url>
        <loc>http://tiweb.cgmatane.qc.ca/etudiants/2020/lennoxm/projet-web-dynamique-2021-Mayo1590/membre/inscription-identification.php</loc>
        <lastmod>2021-04-16T18:39:27+00:00</lastmod>
        <priority>0.64</priority>
    </url>


</urlset>