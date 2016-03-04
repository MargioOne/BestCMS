<?php

/**
 * Created by PhpStorm.
 * User: Pavel
 * Date: 04.03.2016
 * Time: 12:59
 */
class Admin_core
{
    public $classnew;

    function __construct()
    {
        $this->rout();
    }

    public function rout()
    {
        if (!empty($_GET['page_admin'])) {
            $control = trim(strip_tags($_GET['page_admin']));
        } else {
            $control = 'Glob_adm_conf';
            $_GET['page_admin'] = 'Glob_adm_conf';
        }
        if (file_exists(ADMINPATCH . "core/controllers/" . $control . ".php")) {
            include(ADMINPATCH . "core/controllers/" . $control . ".php");
            $this->classnew = new $control;
        } else {
            exit ();
        };
    }

}