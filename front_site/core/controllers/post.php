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
    public $next, $prev, $left1, $left2, $right1, $right2;
    public $full_page, $no_full_page, $last_page;

    function __construct()
    {
        include(MODELPATCH . "model_post.php");
        $model = new model_post();
        $this->get_article_and_pagination($model);
        $this->count($model);
        include(VIEWPATCH . "post_view.php");
        $view = new post_view();
        $this->numb_of_list($model);
        $this->structure_of_list($view, $model);
    }

    function get_article_and_pagination($model)
    {

        if (empty($_GET['category'])) {
            $num = $model->num_of_article;
            $count = $model->count_posts;
            $articles = $_GET['articles'];
            $total_pages = intval(($count - 1) / $num) + 1;
            $this->last_page = $total_pages;
            if (empty($articles) || $articles < 0) $articles = 1;
            if ($articles > $total_pages) $articles = $total_pages;
            $start = $articles * $num - $num;
            $model->get_article($start, $num);

        }else{
            $num = $model->num_of_article;
            $count = $model->count_posts;
            $articles = $_GET['articles'];
            $total_pages = intval(($count - 1) / $num) + 1;
            $this->last_page = $total_pages;
            if (empty($articles) || $articles < 0) $articles = 1;
            if ($articles > $total_pages) $articles = $total_pages;
            $start = $articles * $num - $num;
            $cat = $_GET['category'];
            $model->get_article_by_cat($start, $num, $cat);
        }

        while ($this->postrow[] = mysqli_fetch_array($model->result)) ;
    }

    function structure_of_list($view, $model)
    {
        $title = 'POST PAGE - ' . $model->sitename;
        $cssfile = "styleglobal.css";
        $copyrate = $model->copyrate;
        $view->get_header($cssfile, $title);
        $view->get_body($this->postrow, $this->prev, $this->next, $this->left1, $this->left2, $this->right1, $this->right2, $this->full_page, $this->no_full_page, $this->last_page);
        $view->get_footer($copyrate);
    }

    function numb_of_list($model)
    {
        $total_pages = intval(($model->count_posts - 1) / $model->num_of_article) + 1;
        if (!empty($_GET['articles']) && $_GET['articles'] >= 1 && $_GET['articles'] < $total_pages) $this->next = $_GET['articles'] + 1;
        if (!empty($_GET['articles']) && $_GET['articles'] > 1 && $_GET['articles'] <= $total_pages) $this->prev = $_GET['articles'] - 1;
        if (!empty($_GET['articles']) && $_GET['articles'] > 1 && $_GET['articles'] <= $total_pages) $this->left1 = $_GET['articles'] - 1;
        if (!empty($_GET['articles']) && $_GET['articles'] > 2 && $_GET['articles'] <= $total_pages) $this->left2 = $_GET['articles'] - 2;
        if (!empty($_GET['articles']) && $_GET['articles'] >= 1 && $_GET['articles'] < $total_pages) $this->right1 = $_GET['articles'] + 1;
        if (!empty($_GET['articles']) && $_GET['articles'] >= 1 && $_GET['articles'] < $total_pages - 1) $this->right2 = $_GET['articles'] + 2;
    }

    function count($model)
    {
        $temp = (integer)($model->count_posts / $model->num_of_article);
        $temp2 = $temp * $model->num_of_article;
        $this->no_full_page = $model->count_posts - $temp2;
        $this->full_page = $model->num_of_article;
    }
}