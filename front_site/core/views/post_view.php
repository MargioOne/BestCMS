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


