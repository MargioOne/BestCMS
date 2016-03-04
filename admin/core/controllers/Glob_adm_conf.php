<?php

class Glob_adm_conf
{
    function __construct()
    {
        include (VIEWPATCHADMIN."adm_view.php");
        $view = new adm_view();
        include (MODELPATCH."adm_model.php");
        $model = new adm_model();
    }

    function set_article()
    {

    }

    function set_config()
    {
    }

    function set_contact()
    {
    }

    function set_gallery()
    {
    }

}