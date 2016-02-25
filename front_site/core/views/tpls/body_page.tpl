<div class="content">

    <div class="f_box"></div>
    <?php
    if($_GET['articles']<$last){
        for ($i = 0; $i < $full; $i++) {
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
}else{
for ($i = 0; $i < $no_full; $i++) {
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
}
?>
<div class="pagination">
    <?php
    if (!empty($prev)){echo '<a href="?articles='.$prev.'">&larr;</a>';}
    ?>
    <?php
    if (!empty($left2)){echo '<a href="?articles='.$left2.'">'.$left2.'</a>';}
    ?>
    <?php
    if (!empty($left1)){echo '<a href="?articles='.$left1.'">'.$left1.'</a>';}
    ?>
    <?php echo '<b>'.$current.'</b>';?>
    <?php
    if (!empty($right1)){echo '<a href="?articles='.$right1.'">'.$right1.'</a>';}
    ?>
    <?php
    if (!empty($right2)){echo '<a href="?articles='.$right2.'">'.$right2.'</a>';}
    ?>
    <?php
    if (!empty($next)){echo '<a href="?articles='.$next.'">&rarr;</a>';}

    ?>
</div>
</div>