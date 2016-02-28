<?php

/**
 * Created by PhpStorm.
 * User: Pavel
 * Date: 18.02.2016
 * Time: 13:10
 */
class post_view
{

    function get_header($cssfile, $title)
    {
        include_once("tpls/header.tpl");
    }

    function get_body($postrow, $prev, $next, $left1, $left2, $right1, $right2, $full, $no_full, $last, $cat)
    {
        $current = $_GET["articles"];
        include_once("tpls/body_page.tpl");
    }

    function get_footer($copyrat)
    {
        include_once("tpls/footer.tpl");
    }
}

/*<div class="pagination">
    <?php
    if(empty($cat))
    if (!empty($prev)){echo '<a href="?articles='.$prev.'">&larr;</a>';}
    ?>
    <?php
    if (!empty($left2)){echo '<a href="?articles='.$left2.'">'.$left2.'</a>';}
    ?>
    <?php
    if (!empty($left1)){echo '<a href="?articles='.$left1.'">'.$left1.'</a>';}
    ?>
    <?php echo '<b>'.$current.'</b>';?>
    <?php
    if (!empty($right1)){echo '<a href="?articles='.$right1.'">'.$right1.'</a>';}
    ?>
    <?php
    if (!empty($right2)){echo '<a href="?articles='.$right2.'">'.$right2.'</a>';}
    ?>
    <?php
    if (!empty($next)){echo '<a href="?articles='.$next.'&category='.$cat.'">&rarr;</a>';}

    ?>
</div>*/


