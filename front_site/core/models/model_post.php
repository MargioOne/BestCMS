<?php

/**
 * Created by PhpStorm.
 * User: Pavel
 * Date: 18.02.2016
 * Time: 13:09
 */
class view_post
{
    public $article_row;

    function get_article()
    {
        $db = new mysqli(HOSTBD, USERBD, PASSBD, NAMEBD);
        $result = $db->query('SELECT * FROM article') or die("ERROR: " . mysql_error());;
        $this->article_row = mysqli_fetch_assoc($result);
        //return $this->article_row;
    }

}