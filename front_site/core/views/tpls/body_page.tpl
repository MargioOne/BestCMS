<div class="content">

    <div class="f_box"></div>


<?php
        for ($i = 0; $i < $num; $i++) {
        echo "<div class='article'>
        <header>".$postrow[$i]['title']."</header>

        <p>".$postrow[$i]['description']."</p>    </div>";
        }
?>

</div>
</div>