<?php
require_once("database/connection.php");
$query = $DB->prepare("SELECT * FROM `film_info`");
$query->execute();
$result = $query->fetchAll();
$fd = fopen("../view/sample_movies.txt", 'w+');
foreach ($result as $item) {
    $title = "Title: ".$item['title']."\n";
    $year = "Release Year: ".$item['year']."\n";
    $format = "Format: ".$item['format']."\n";
    $stars = "Stars: ".$item['actors']."\n\n";
    $film = $title.$year.$format.$stars;
    $fd = fopen("../view/sample_movies.txt", 'a+');
    fwrite($fd, $film);
}
?>