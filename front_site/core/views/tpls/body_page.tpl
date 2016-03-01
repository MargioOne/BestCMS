<div class="content">
    <div class="f_box">
        <form action="">
            <select name="category" class="select_cat">
                <option selected value="" disabled>Select category</option>
                <option value="1">Internet</option>
                <option value="2">Home</option>
                <option value="3">Hobby</option>
            </select>
            <input type="submit" class="submit_cat" value="choose">
        </form>
    </div>
    <?php
        if($_GET['articles']==$last && $no_full == 0 && $temp == 0){
    echo '
    <div class="article">
    <div class="no_article">This category does not have articles...</div>
</div>';
}
if($_GET['articles']<$last || ($no_full==0 && $temp != 0)){
for ($i = 0; $i < $full; $i++) {
echo '
<div class="article">
    <div class="user">Added by: <b>'.$postrow[$i]["user"].'</b></div>
    <div class="time">Addition time: <b>'.$postrow[$i]["time"].'</b></div>
    <hr class="hr1">
    <div class="title_page">
        <header><a href="?page=full_page&id='.$postrow[$i]["id"].'">'.$postrow[$i]["title"].'</a></header>
    </div>
    <div class="full_text">'.$postrow[$i]["description"].'</div>
    <hr>
    <div class="red_more"><a href="?page=full_page&id='.$postrow[$i]["id"].'">Read more...</a></div>
    <div class="date">Addition date: <b>'.$postrow[$i]["date"].'</b></div>
</div>';
}
}
if($_GET['articles']==$last && $no_full !== NULL){
for ($i = 0; $i < $no_full; $i++) {
echo '
<div class="article">
    <div class="user">Added by: <b>'.$postrow[$i]["user"].'</b></div>
    <div class="time">Addition time: <b>'.$postrow[$i]["time"].'</b></div>
    <hr class="hr1">
    <div class="title_page">
        <header><a href="?page=full_page&id='.$postrow[$i]["id"].'">'.$postrow[$i]["title"].'</a></header>
    </div>
    <div class="full_text">'.$postrow[$i]["description"].'</div>
    <hr>
    <div class="red_more"><a href="?page=full_page&id='.$postrow[$i]["id"].'">Read more...</a></div>
    <div class="date">Addition date: <b>'.$postrow[$i]["date"].'</b></div>
</div>';
}
}
?>
<div class="pagination">
    <?php
    if(empty($cat)){
    if (!empty($prev)){echo '<a href="?articles='.$prev.'">&larr;</a>';}
    if (!empty($left2)){echo '<a href="?articles='.$left2.'">'.$left2.'</a>';}
    if (!empty($left1)){echo '<a href="?articles='.$left1.'">'.$left1.'</a>';}
    echo '<b>'.$current.'</b>';
    if (!empty($right1)){echo '<a href="?articles='.$right1.'">'.$right1.'</a>';}
    if (!empty($right2)){echo '<a href="?articles='.$right2.'">'.$right2.'</a>';}
    if (!empty($next)){echo '<a href="?articles='.$next.'">&rarr;</a>';}
    }else{
    if (!empty($prev)){echo '<a href="?articles='.$prev.'&category='.$cat.'">&larr;</a>';}
    if (!empty($left2)){echo '<a href="?articles='.$left2.'&category='.$cat.'">'.$left2.'</a>';}
    if (!empty($left1)){echo '<a href="?articles='.$left1.'&category='.$cat.'">'.$left1.'</a>';}
    if (!empty($right1) || !empty($left1)){echo '<b>'.$current.'</b>';}
    if (!empty($right1)){echo '<a href="?articles='.$right1.'&category='.$cat.'">'.$right1.'</a>';}
    if (!empty($right2)){echo '<a href="?articles='.$right2.'&category='.$cat.'">'.$right2.'</a>';}
    if (!empty($next)){echo '<a href="?articles='.$next.'&category='.$cat.'">&rarr;</a>';}
    }
    ?>
</div>
</div>


