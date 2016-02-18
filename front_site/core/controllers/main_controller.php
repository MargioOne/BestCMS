<?php

/**
 * Created by PhpStorm.
 * User: Pavel
 * Date: 18.02.2016
 * Time: 13:09
 * Project: BeesCMS
 */
class main_controller
{
    function __construct()
    {
        include (SITEPATCH."core/views/main_view.php");
        $main_view = new main_view;
    }


}