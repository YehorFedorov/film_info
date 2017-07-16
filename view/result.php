<?php
if (TRUE) {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Поиск</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
<?php
require_once("header.php");
require_once("../control/search.php");
echo "<p><h2>Результаты поиска по запросу: <strong>".$_GET['search']."</strong></h2></p>";
echo "<br>";
echo "<div class='col-xs-12'>";
if (!empty($film_result) || !empty($actor_result)) {
    if (!empty($film_result)) {
        echo "<div class='col-xs-12'>";
        echo "<h2>Фильмы: </h2>";
        foreach ($film_result as $item) {
            echo "<div class='col-xs-1' style='display: inline-table'>";
            echo "<a href='info.php?id=" . $item['film_id'] . "'>";
            echo "<img src='img/picture.jpg' height='120px' width='120px'>";
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
        echo "</div>";
    }
    if (!empty($actor_result)) {
        echo "<div class='col-xs-12'>";
        echo "<h2>Фильмы с участием актера: </h2>";
        foreach ($actor_result as $item) {
            echo "<div class='col-xs-1' style='display: inline-table'>";
            echo "<a href='info.php?id=" . $item['film_id'] . "'>";
            echo "<img src='img/picture.jpg' height='120px' width='120px'>";
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
        echo "</div>";
    }
}
else {
    echo "<h1>Усп! Наш поиск не нашел ни одного совпадения по вашему запросу:(</h1>";
}
echo "</div>";
?>
    </body>
    </html>
<?php
}
?>
