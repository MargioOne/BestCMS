<?php

/**
 * Created by PhpStorm.
 * User: Pavel
 * Date: 19.02.2016
 * Time: 16:08
 */
class gallery
{
    public $title;

    function __construct()
    {
        include(VIEWPATCH . "main_view.php");
        $main_view = new main_view($this->title);
        //if($_GET['page']) {
            //echo 'class=current_page';
        //}
    }

}