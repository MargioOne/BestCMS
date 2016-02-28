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
    public $sitename;
    public $copyrate;
    public $num_of_symvol;

    function __construct()
    {
        $this->get_count_articles_config();
        $this->get_name_site();
        $this->get_copyrate();
        $this->get_count_symvol_config();
    }

    function get_article($start, $num, $cat)
    {
        $db = new mysqli(HOSTBD, USERBD, PASSBD, NAMEBD);
        if (!empty($cat)){
            $this->result = $db->query("SELECT * FROM article WHERE Cattegory = $cat ORDER BY date LIMIT $start, $num");
        } else{
            $this->result = $db->query("SELECT * FROM article ORDER BY date LIMIT $start, $num");
        }
        return $this->result;
    }

    function get_count_posts($cat)
    {
        $db = new mysqli(HOSTBD, USERBD, PASSBD, NAMEBD);
        if (!empty($cat)){
            $result = $db->query("SELECT count(`title`) as total FROM article WHERE `Cattegory` = $cat");
        }else{
            $result = $db->query('SELECT count(*) as total FROM article');
        }
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
        $result = $db->query('SELECT count_symvol_on_prepage FROM config');
        $data = mysqli_fetch_assoc($result);
        $this->num_of_symvol = $data['count_symvol_on_prepage'];
        return $this->num_of_symvol;
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

    //////////////////////////////////////////// for category
    function get_article_by_cat($start, $num, $cat)
    {
        $db = new mysqli(HOSTBD, USERBD, PASSBD, NAMEBD);
        $this->result_by_cat = $db->query("SELECT * FROM article WHERE Cattegory = $cat ORDER BY date LIMIT $start, $num");
        return $this->result_by_cat;
    }

    function get_count_posts_by_cat($cat)
    {

        $db = new mysqli(HOSTBD, USERBD, PASSBD, NAMEBD);
        $result = $db->query("SELECT count(`title`) as total FROM article WHERE `Cattegory` = $cat");
        $data = mysqli_fetch_assoc($result);
        $this->count_posts_by_cat = $data['total'];
        return $this->count_posts_by_cat;
    }
}