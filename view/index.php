<?php
require_once("../model/database/setup.php");
require_once("../model/reader.php");
if (TRUE) {
    ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title>Фильмы</title>
            <link rel="stylesheet" href="css/bootstrap.min.css">
            <link rel="stylesheet" href="css/style.css">
        </head>
        <body>
        <?php
        require_once("header.php");
        echo "<h1>Фильмы</h1>";
        require_once("films.php");
        ?>
        </body>
        </html>
    <?php
}
?>