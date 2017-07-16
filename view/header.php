<?php
echo "<nav class='navbar navbar-default'>
    <div class='container-fluid'>
        <div class='navbar-left'>
            <a class='navbar-brand' href='index.php'>Хранилище фильмов</a>
            <ul class='nav navbar-nav'>
            <li><a href='sample_movies.txt' download>Скачать</a></li>
            <li><a href='addFilm.php'>Добавить фильм</a></li>
            <li><a href='index.php?sort=alphabetical'>Сортировать фильмы по алфавиту</a></li>
            </ul>
        </div>
        <div class='navbar-right'>
            <form class='navbar-form navbar-right' action='result.php'>
                <div class='form-group'>
                    <input type='text' class='form-control' placeholder='Поиск' name='search' value=''>
                </div>
                <button type='submit' class='btn btn-default'>Найти</button>
            </form>
        </div>
    </div>
</nav>";
?>