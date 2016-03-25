<?php

class Glob_adm_conf
{
    public $now_title, $now_copyrate, $now_count_art, $now_count_sym;
    public $new_title, $new_copyrate, $new_count_art, $new_count_sym;

    function __construct()
    {
        include(VIEWPATCHADMIN . "adm_view.php");
        $view = new adm_view();
        include(MODELPATCHADMIN . "adm_model.php");
        if (!empty($_GET['site_name']) || !empty($_GET['count_symbol']) || !empty($_GET['count_articles']) || !empty($_GET['site_copyrate'])) {
            $this->set_options();
        }
    }

    function set_options()
    {
        if (!empty($_GET['site_name'])) {
            $new_title = $_GET['site_name'];
            adm_model::set_name_of_site($new_title);
        }

        if (!empty($_GET['count_symbol'])) {
            $new_count_sym = $_GET['count_symbol'];
            adm_model::set_count_symvol_on_prepage($new_count_sym);
        }

        if (!empty($_GET['count_articles'])) {
            $new_count_art = $_GET['count_articles'];
            adm_model::set_count_articles_on_page($new_count_art);
        }

        if (!empty($_GET['site_copyrate'])) {
            $new_copyrate = $_GET['site_copyrate'];
            adm_model::set_copyrate($new_copyrate);
        }
    }

    function add_article()
    {
    }

    function set_contact()
    {
    }

    function set_gallery()
    {
    }

}
