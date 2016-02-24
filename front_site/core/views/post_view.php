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

    function get_body($postrow, $num)
    {
        $prev = $_GET["articles"]-1;
        include_once("tpls/body_page.tpl");
    }

    function get_footer($copyrat)
    {
        include_once("tpls/footer.tpl");
    }
}
/*<?php
        for ($i = 0; $i < $num; $i++) {
        echo "<div class='article'>
        <header>".$postrow[$i]['title']."</header>

        <p>".$postrow[$i]['description']."</p>    </div>";
        }
?>*/
