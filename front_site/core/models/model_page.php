<?php

/**
 * Created by PhpStorm.
 * User: Pavel
 * Date: 01.03.2016
 * Time: 0:30
 */
class model_page
{
    public $result, $sitename, $copyrate;
    function __construct()
    {
        $this->get_copyrate();
        $this->get_name_site();
    }

    function get_article($id)
    {
        $db = new mysqli(HOSTBD, USERBD, PASSBD, NAMEBD);
        $this->result = $db->query("SELECT * FROM article WHERE id = $id ");
        return $this->result;
    }
    function get_name_site()
    {
        $db = new mysqli(HOSTBD, USERBD, PASSBD, NAMEBD);
        $result = $db->query('SELECT name_of_site FROM config');
        $data = mysqli_fetch_assoc($result);
        $this->sitename = $data['name_of_site'];
        return $this->sitename;
    }

    function get_copyrate()
    {
        $db = new mysqli(HOSTBD, USERBD, PASSBD, NAMEBD);
        $result = $db->query('SELECT copyrate FROM config');
        $data = mysqli_fetch_assoc($result);
        $this->copyrate = $data['copyrate'];
        return $this->copyrate;
    }
}