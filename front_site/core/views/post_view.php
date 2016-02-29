<?php

/**
 * Created by PhpStorm.
 * User: Pavel
 * Date: 18.02.2016
 * Time: 13:10
 */
class post_view
{

    function get_header($cssfile, $title)
    {
        include_once("tpls/header.tpl");
    }

    function get_body($postrow, $prev, $next, $left1, $left2, $right1, $right2, $full, $no_full, $last, $cat, $temp)
    {
        $current = $_GET["articles"];
        include_once("tpls/body_page.tpl");
    }

    function get_footer($copyrat)
    {
        include_once("tpls/footer.tpl");
    }
}

/*
 * <?php
    if($_GET['articles']<=$last && $no_full == NULL){
        for ($i = 0; $i < $full; $i++) {
        echo $no_full;
        echo '
    <div class="article">
    <div class="user">Added by: <b>'.$postrow[$i]["user"].'</b></div>
    <div class="time">Addition time: <b>'.$postrow[$i]["time"].'</b></div>
    <hr class="hr1">
    <div class="title_page">
        <header>'.$postrow[$i]["title"].'</header>
    </div>
    <div class="full_text">'.$postrow[$i]["description"].'</div>
    <hr>
    <div class="red_more"><a href="#">Read more...</a></div>
    <div class="date">Addition date: <b>'.$postrow[$i]["date"].'</b></div>
</div>';
}
}?>
*/


