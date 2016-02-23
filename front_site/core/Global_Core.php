<?php

/**
 * Created by PhpStorm.
 * User: Pavel
 * Date: 18.02.2016
 * Time: 13:07
 * Project: BeesCMS
 */
class core
{
    public $classnew;

    function __construct()
    {
        $this->rout();
    }

    public function rout()
    {
        if (!empty($_GET['page'])) {
            $control = trim(strip_tags($_GET['page']));
        } else {
            $control = 'post';
            $_GET['page'] = 'post';
        }
        if (empty($_GET['articles'])) $_GET['articles'] = "1";
        if (file_exists(SITEPATCH . "core/controllers/" . $control . ".php")) {
            include(SITEPATCH . "core/controllers/" . $control . ".php");
            $class_control = $control . "_controller";
            $this->classnew = new $class_control;
        } else {
            exit ();
        };
    }
}
