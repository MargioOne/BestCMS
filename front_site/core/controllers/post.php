<?php

/**
 * Created by PhpStorm.
 * User: Pavel
 * Date: 18.02.2016
 * Time: 13:09
 * Project: BeesCMS
 */
class post
{
    public $title, $article;


    function __construct() //конструктор
    {
        $this->get_article_and_pagination();
    }

    function get_article_and_pagination() //получение данных статьи
    {
        $_GET['articles'] = 1;
        $num = 2;
        $articles = $_GET['articles'];
        $articles = intval($articles);
        include(MODELPATCH . "model_post.php");
        $model = new view_post();
        $model->get_count_posts();
        $total_pages = intval(($model->count_posts - 1) / $num) + 1;
        if (empty($articles) || $articles < 0) $articles = 1;
        if ($articles > $total_pages) $articles = $total_pages;
        $start = $articles * $num - $num;
        $model->get_article($start, $num);
        echo $model->count_posts;
    }

    function get_title()
    {

    }
}