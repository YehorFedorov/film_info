<?php
require_once("database/connection.php");
$info = explode("\n\n", file_get_contents("../view/sample_movies.txt"));
foreach ($info as $item) {
    $film_info = explode("\n", $item);
    if (!empty($film_info[0])) {
        $title = substr($film_info[0], 7);
        $year = substr($film_info[1], 14);
        $format = substr($film_info[2], 8);
        $stars = substr($film_info[3], 7);
        if (!empty($title) && !empty($year) && !empty($format) && !empty($stars)) {
            $duplicates = $DB->prepare("SELECT * FROM `film_info` WHERE `title` = '" . $title . "'");
            $duplicates->execute();
            if ($duplicates->rowCount() == 0) {
                $query = $DB->prepare("INSERT INTO film_info (`film_id`, `title`, `year`, `format`, `actors`) VALUES (NULL, '" . $title . "', '" . $year . "', '" . $format . "', '" . $stars . "')");
                $query->execute();
            }
        }
    }
}
?>