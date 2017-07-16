<?php
if (TRUE) {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Фильмы</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/react/0.14.0/react.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/react/0.14.0/react-dom.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/babel-core/5.6.15/browser.js"></script>
    </head>
    <body>
    <?php
    require_once("header.php");
    ?>
    <h1>Добавить фильм</h1>
    <div class="col-lg-4 centeredPos" id="film_form"></div>
    <script type="text/babel" src="add_film_form.js"></script>
    </body>
    </html>
    <?php
}
    ?>
