<div class="content">

    <div class="f_box"></div>
    <?php
        for ($i = 0; $i < $num; $i++) {
        echo '
    <div class="article">
        <div class="user">Добавил: <b>'.$postrow[$i]["user"].'</b></div>
        <div class="time">Время добавления: <b>'.$postrow[$i]["time"].'</b></div>
        <hr class="hr1">
        <div class="title_page"><header>'.$postrow[$i]["title"].'</header></div>
        <div class="full_text">'.$postrow[$i]["description"].'</div>
        <hr>
        <div class="red_more"><a href="#">Читать полностью</a></div>
        <div class="date">Дата добавления: '.$postrow[$i]["date"].' </div>
    </div>';
}
?>
<div><?php if ($_GET['articles']>1){echo '<a href="?articles='.$prev.'">Prev</a>';}?><a href="?articles=<?php echo $_GET['articles']+1; ?>">Next</a></div>
</div>
</div>