<?php

/**
 * Created by PhpStorm.
 * User: Pavel
 * Date: 01.03.2016
 * Time: 12:02
 */
class page_view
{
    function __construct()
    {
    }

    function get_header($cssfile, $title)
    {
        include_once("tpls/header.tpl");
    }

    function get_body($article)
    {
        include_once("tpls/full_page.tpl");
    }

    function get_footer($copyrat)
    {
        include_once("tpls/footer.tpl");
    }
}