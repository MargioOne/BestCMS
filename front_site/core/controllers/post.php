<?php

/**
 * Created by PhpStorm.
 * User: Pavel
 * Date: 18.02.2016
 * Time: 13:09
 * Project: BeesCMS
 */
class post_controller
{
    public $postrow; //масив со статьями

    function __construct()
    {
        include(MODELPATCH . "model_post.php");
        $model = new model_post();
        $this->get_article_and_pagination($model);
        include(VIEWPATCH . "post_view.php");
        $view = new post_view();
        $this->structure_of_list($view, $model->num_of_article);
    }

    function get_article_and_pagination($model)
    {
        $num = $model->num_of_article;
        $count = $model->count_posts;
        $articles = $_GET['articles'];
        $total_pages = intval(($count - 1) / $num) + 1;
        if (empty($articles) || $articles < 0) $articles = 1;
        if ($articles > $total_pages) $articles = $total_pages;
        $start = $articles * $num - $num;
        $model->get_article($start, $num);
        while ($this->postrow[] = mysqli_fetch_array($model->result)) ;

        //sort($this->postrow);
        //$this->get_article_on_post($num);
    }

    function structure_of_list($view, $num)
    {
        $title = 'POST PAGE - ' . NAMESITE;
        $cssfile = "styleglobal.css";
        $copyrate = "copyrat";
        $view->get_header($cssfile, $title);
        $view->get_body($this->postrow, $num);
        $view->get_footer($copyrate);

    }
}