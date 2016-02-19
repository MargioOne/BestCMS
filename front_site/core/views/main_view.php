<?php

/**
 * Created by PhpStorm.
 * User: Pavel
 * Date: 18.02.2016
 * Time: 13:10
 */
class main_view
{
    public $title;

    function __construct($tmptitle)
    {
        $this->title = $tmptitle;
        include(TPLPATCH . 'header.tpl');
    }

}