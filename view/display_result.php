<?php
echo "<div class='col-sm-3'>";
echo "<img src='img/picture.jpg' width='100%' height='100%'>";
echo "<strong><h1>";
echo $result['title'];
echo "</h1></strong>";
echo "Уникальный номер: ".$result['film_id']."<br>";
echo "Год выпуска: ".$result['year']."<br>";
echo "Формат: ".$result['format']."<br>";
echo "Актерский состав: ".$result['actors']."<br>";
echo "<button class='btn btn-danger' ><a href='send_del_request.php?id=".$_GET['id']."'>Удалить фильм</a></button>";
echo "</div>";
echo "<div class='container'>";
echo "<strong><h2>";
echo "Сюжет";
echo "</h2></strong>";
echo "<div class='col-sm-7'>";
echo "<h4>";
echo "Lorem ipsum dolor sit amet, platonem convenire mei at, ne quo quando fabulas. Primis elaboraret sit ad, ius ei justo adolescens. Aliquip maiestatis eu ius. An hinc virtute elaboraret est, sed te timeam perfecto reformidans. In eripuit euismod alienum nam, cu vivendo phaedrum usu.

An vel novum dissentiunt. Est ea sapientem dissentiunt. Te partem scriptorem cotidieque sea, id mei vide causae quaeque, mei ad alii ridens malorum. Antiopam suscipiantur an qui, sit ad partiendo scripserit.

Vis in dolore aliquid, ut duo sint petentium splendide. Semper impetus suscipit eum ei, vis quando dicant consequuntur ut, ex dolorum omnesque eos. Fugit quando no nam. Illum possim salutatus pri ea, ius in sale corpora legendos. Dicit fierent te vis, ex ridens ancillae ius, his duis decore antiopam cu. Ne audiam intellegam pro.

Ei probo prodesset appellantur eos, debet iisque lobortis usu ex, ut mea doctus debitis adolescens. Et vim fastidii vivendum, vim aperiam neglegentur ea, an eos tation graece noluisse. Etiam assentior id vel, ex meis commune vim. Sea ignota altera an, mollis vocent scriptorem te quo, vel ad intellegat consectetuer. Liber elitr intellegat mei ut, et option sanctus facilis eos. Iuvaret definiebas mea no, quem scaevola repudiare an mea.

In vix oratio volutpat omittantur, no graeci mnesarchum repudiandae eum, at est debet oporteat. Assum possim scribentur id vis. Quo veritus admodum qualisque in, ei solum novum facilisi his, pri ei sumo tempor. Zril regione cu sed, ius ad diam facilis imperdiet.";
echo "</h4>";
echo "</div>";
echo "</div>";
?>