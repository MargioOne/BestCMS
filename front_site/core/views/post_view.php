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

    function get_body($postrow, $num)
    {
        include_once("tpls/body_page.tpl");
    }
}

/*echo "<table>";
        for ($i = 0; $i < $num; $i++) {
            echo "<tr>
         <td>" . $this->postrow[$i]['title'] . "</td>
         <td>" . $this->postrow[$i]['full_text'] . "</td></tr>
         <tr><td colspan=\"2\">   " . $this->postrow[$i]['date'] . "</td></tr>";
        }
        echo "</table>";
        echo "<a href=\"?articles=2\">2</a>";
        */