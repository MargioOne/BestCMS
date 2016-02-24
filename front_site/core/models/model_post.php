<?php

/**
 * Created by PhpStorm.
 * User: Pavel
 * Date: 18.02.2016
 * Time: 13:09
 */
class model_post
{
    public $count_posts;
    public $result;
    public $num_of_article;

    function __construct()
    {
        $this->get_count_posts();
        $this->get_count_articles_config();
    }

    function get_article($start, $num)
    {
        $db = new mysqli(HOSTBD, USERBD, PASSBD, NAMEBD);
        $this->result = $db->query("SELECT * FROM article LIMIT $start, $num" );
        return $this->result;
    }

    function get_count_posts()
    {
        $db = new mysqli(HOSTBD, USERBD, PASSBD, NAMEBD);
        $result = $db->query('SELECT count(*) as total FROM article');
        $data = mysqli_fetch_assoc($result);
        $this->count_posts = $data['total'];
        return $this->count_posts;
    }

    function get_count_articles_config()
    {
        $db = new mysqli(HOSTBD, USERBD, PASSBD, NAMEBD);
        $result = $db->query('SELECT count_articles_on_page FROM config');
        $data = mysqli_fetch_assoc($result);
        $this->num_of_article = $data['count_articles_on_page'];
        return $this->num_of_article;
    }

    function get_count_symvol_config()
    {
        $db = new mysqli(HOSTBD, USERBD, PASSBD, NAMEBD);
        $result = $db->query('SELECT count_articles_on_page FROM config');
        $data = mysqli_fetch_assoc($result);
        $this->num_of_article = $data['count_articles_on_page'];
        return $this->num_of_article;
    }
}