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
    public $count_posts;
    public $result;

    function get_article( $start, $num)
    {
        $db = new mysqli(HOSTBD, USERBD, PASSBD, NAMEBD);
        $this->result = $db->query('SELECT * FROM article LIMIT 1, 2');
        //while(!empty($result)){$this->article_row = mysqli_fetch_assoc($result);}

        return $this->result;


    }

    function get_count_posts()
    {
        $db = new mysqli(HOSTBD, USERBD, PASSBD, NAMEBD);
        $result = $db->query('SELECT COUNT(*) FROM article');
        $this->count_posts = mysqli_fetch_assoc($result);
        $this->count_posts = intval($this->count_posts);
        return $this->count_posts;
    }
}