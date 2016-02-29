<?php

/**
 * Created by PhpStorm.
 * User: Pavel
 * Date: 19.02.2016
 * Time: 16:08
 */
class about_controller
{
    public $title;

    function __construct()
    {
        include(VIEWPATCH . "model_post.php");
        $main_view = new main_view($this->title);
    }


}