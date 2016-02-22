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
    public $title;

    function __construct() //конструктор
    {
        $this->get_article();
    }

    function get_article() //получение данных статьи
    {
        include(MODELPATCH . "model_post.php");
        $model = new view_post();
        $model->get_article();
        // В $article_row хранятся данные с базы таблицы article.
    }

    function get_title()
    {

    }


}