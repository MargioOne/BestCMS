<?php

/**
 * Created by PhpStorm.
 * User: Pavel
 * Date: 04.03.2016
 * Time: 14:24
 */
class adm_model
{
    function __construct()
    {

    }

    static function set_name_of_site($nameofsite)
    {
        $db = new mysqli(HOSTBD, USERBD, PASSBD, NAMEBD);
        $result = $db->query("UPDATE config SET name_of_site = '$nameofsite'") ;
    }
    static function set_copyrate($copyrate)
    {
        $db = new mysqli(HOSTBD, USERBD, PASSBD, NAMEBD);
        $result = $db->query("UPDATE config SET copyrate = '$copyrate'") ;
    }
    static function set_count_symvol_on_prepage($countsymvolonprepage)
    {
        $db = new mysqli(HOSTBD, USERBD, PASSBD, NAMEBD);
        $result = $db->query("UPDATE config SET count_symvol_on_prepage = '$countsymvolonprepage'") ;
    }
    static function set_count_articles_on_page($countarticlesonpage)
    {
        $db = new mysqli(HOSTBD, USERBD, PASSBD, NAMEBD);
        $result = $db->query("UPDATE config SET count_articles_on_page = '$countarticlesonpage'") ;
    }

}
