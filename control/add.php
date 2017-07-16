<?php
require_once("../model/database/connection.php");
$title = $_POST['title'];
$year = $_POST['year'];
$format = $_POST['format'];
$actors = $_POST['actors'];
$query = $DB->prepare("INSERT INTO film_info (`film_id`, `title`, `year`, `format`, `actors`) VALUES (NULL, '" . $title . "', '" . $year . "', '" . $format . "', '" . $actors . "')");
$query->execute();
require_once("../model/change_txt.php");
header("Location: index.php");
?>