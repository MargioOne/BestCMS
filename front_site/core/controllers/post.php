<?php

/**
 * Created by PhpStorm.
 * User: Pavel
 * Date: 18.02.2016
 * Time: 13:09
 * Project: BeesCMS
 */
class post
{
    public $title;

    function __construct()
    {
        $this->get_title();
        include(VIEWPATCH . "main_view.php");
        $main_view = new main_view($this->title);

    }


    function get_title()
    {
        if (empty($_GET['page']) || $_GET['page'] == 'post') {
            $this->title = "POST";
            return $this->title;
        }
    }


}