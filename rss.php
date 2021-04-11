<?php

require "configuration.php";
require CHEMIN_ACCESSEUR . "MissionApolloDAO.php";
$listeMission = MissionApolloDAO::listerMissionApollo();

header("Content-Type: application/xml; charset=utf-8");
echo '<?xml version="1.0" encoding="UTF-8"?>'

?>

<rss version="2.0" xmlns:content="http://purl.org/rss/1.0/modules/content/" xmlns:wfw="http://wellformedweb.org/CommentAPI/" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:atom="http://www.w3.org/2005/Atom" xmlns:sy="http://purl.org/rss/1.0/modules/syndecation/" xmlns:slash="http://purl.org/rss/1.0/modules/slash/">

    <channel>
        <title>Liste de missions Apollo</title>
        <atom:link href="https://tiweb.cgmatane.qc.ca/etudiants/2020/lennoxm/projet-web-dynamique-2021-Mayo1590/rss.php/" rel="self" type="application/rss+xml" />
        <link>https://tiweb.cgmatane.qc.ca/etudiants/2020/lennoxm/projet-web-dynamique-2021-Mayo1590/index.php</link>
        <description>Une liste des missions Apollo</description>
        <lastBuildDate>Tue, 19 mar 2021 20:52:40 -0500</lastBuildDate>
        <language>fr-CA</language>
        <sy:updatePeriod> hourly </sy:updatePeriod>
        <sy:updateFrequency> 1 </sy:updateFrequency>
        <generator>Programmation manuelle</generator>

        <?php
        foreach ($listeMission as $missionApollo) {
        ?>
            <item>
                <title><?= $missionApollo['titre'] ?></title>
                <link>https://tiweb.cgmatane.qc.ca/etudiants/2020/lennoxm/projet-web-dynamique-2021-Mayo1590?id=<?= $missionApollo['id'] ?></link>
                <pubDate>Tue, 19 mar 2021 20:52:40 -0500</pubDate>
                <category>
                    <![CDATA[Utilisateurs]]>
                </category>
                <guid isPermaLink="false">https://tiweb.cgmatane.qc.ca/etudiants/2020/lennoxm/projet-web-dynamique-2021-Mayo1590?id=<?= $missionApollo['id'] ?></guid>
                <description>
                    <![CDATA[<img src="https://tiweb.cgmatane.qc.ca/etudiants/2020/lennoxm/projet-web-dynamique-2021-Mayo1590/image/<?= $missionApollo['image'] ?>" alt="image"/>]]>
                    <![CDATA[<?= $missionApollo['astronautes'] ?>/>]]>
                    <![CDATA[<?= $missionApollo['date'] ?>/>]]>
                </description>
            </item>
        <?php
        }
        ?>

    </channel>

</rss>