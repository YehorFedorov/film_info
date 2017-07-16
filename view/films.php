<?php
require_once("../model/get_films.php");
foreach ($fetchedInfo as $item) {
    echo "<div class='col-xs-2' style='display: inline-table'>";
    echo "<a href='info.php?id=".$item['film_id']."'>";
    echo "<img src='img/picture.jpg' height='280px' width='280px'>";
    echo "</a>";
    echo "<div class='center'>";
    echo "<strong>";
    echo $item['title'];
    echo "</strong>";
    echo "<div class='center'>";
    echo $item['year'];
    echo "</div>";
    echo "</div>";
    echo "</div>";
}
?>