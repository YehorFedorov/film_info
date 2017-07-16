<?php
require_once("../model/database/connection.php");
$query = $DB->prepare("DELETE FROM `film_info` WHERE `film_id` = '".$_GET['id']."'");
$query->execute();
require_once("../model/change_txt.php");
header("Location: index.php");
?>