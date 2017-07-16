<?php
require_once("../model/get_info.php");
if (TRUE) {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>
            <?php
            echo $result['title'];
            ?>
        </title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
    <?php
    require_once("header.php");
    require_once("display_result.php");
    ?>
    </body>
    </html>
    <?php
}
?>
