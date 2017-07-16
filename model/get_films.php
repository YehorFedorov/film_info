<?php
require_once("database/connection.php");
if (isset($_GET['sort']))
    $allInfo = $DB->prepare("SELECT * FROM `film_info` ORDER BY `title` ASC");
else
    $allInfo = $DB->prepare("SELECT * FROM `film_info`");
$allInfo->execute();
$fetchedInfo = $allInfo->fetchAll();
?>