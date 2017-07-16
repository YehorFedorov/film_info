<?php
require_once("database/connection.php");
$get_film_info = $DB->prepare("SELECT * FROM `film_info` WHERE `film_id` = '".$_GET['id']."'");
$get_film_info->execute();
$result = $get_film_info->fetch();
?>