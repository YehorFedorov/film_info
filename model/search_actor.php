<?php
$search = trim($_GET['search']);
$actor_query = $DB->prepare("SELECT * FROM `film_info` WHERE `actors` LIKE '%".$search."%'");
$actor_query->execute();
$actor_result = $actor_query->fetchAll();
?>