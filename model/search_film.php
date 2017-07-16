<?php
$search = trim($_GET['search']);
$film_query = $DB->prepare("SELECT * FROM `film_info` WHERE `title` LIKE '%".$search."%'");
$film_query->execute();
$film_result = $film_query->fetchAll();
?>