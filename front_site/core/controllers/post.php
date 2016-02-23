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
    public $title, $article;
    public $postrow;
    public $num = 2;

    function __construct() //конструктор
    {
        $this->get_article_and_pagination();
    }

    function get_article_and_pagination() //получение данных статьи
    {
        $num = 2;
        $articles = $_GET['articles'];
        $articles = intval($articles);
        include(MODELPATCH . "model_post.php");
        $model = new model_post();
        $model->get_count_posts();
        $total_pages = intval(($model->count_posts - 1) / $num) + 1;
        if (empty($articles) || $articles < 0) $articles = 1;
        if ($articles > $total_pages) $articles = $total_pages;
        $start = $articles * $num - $num;
        $model->get_article($start, $num);
        /*while ($row = mysqli_fetch_assoc($model->result)) {
            printf ("%s (%s)\n", $row["id"], $row["title"]);
        }*/
        while ( $this->postrow[] = mysqli_fetch_array($model->result));

        print_r($_GET['page']);
        echo "<table>";
        for($i = 0; $i < $num; $i++)
        {
            echo "<tr>
         <td>".$this->postrow[$i]['id']."</td>
         <td>".$this->postrow[$i]['title']."</td></tr>
       <tr><td colspan=\"2\">".$this->postrow[$i]['date']."</td></tr>";
        }
        echo "</table>";
        echo "<a href=\"?page=post&articles=0\">2</a>";
    }

    function get_title()
    {

    }

    public function setTitle($title)
    {

    }
}