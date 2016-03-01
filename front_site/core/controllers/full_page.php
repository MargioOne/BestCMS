<?php

/**
 * Created by PhpStorm.
 * User: Pavel
 * Date: 29.02.2016
 * Time: 23:59
 */
class full_page_controller
{
    public $article;
    function __construct()
    {
        include (MODELPATCH."model_page.php");
        $model = new model_page;
        include (VIEWPATCH."page_view.php");
        $view = new page_view();
        $this->get_article($_GET['id'], $model);
        $this->structure_of_list($view, $model);
    }

    function get_article($id, $model)
    {
        $model->get_article($id);
        $this->article = mysqli_fetch_assoc($model->result);
    }

    function structure_of_list($view, $model)
    {
        $title = $this->article['title']." - ". $model->sitename;
        $cssfile = "styleglobal.css";
        $copyrate = $model->copyrate;
        $view->get_header($cssfile, $title);
        $view->get_body($this->article);
        $view->get_footer($copyrate);
    }

}