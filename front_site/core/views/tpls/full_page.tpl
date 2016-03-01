<div class="content">
    <div class="article_page">
        <div class="back"><a href="<?php echo $_SERVER['HTTP_REFERER'] ?>">&larr; Back</a></div>
        <div class="title_article"><header><?php echo $article["title"]; ?></header></div>
        <div class="text_article"><?php echo $article["fill_text"]; ?></div>
        <div class="time_add"><?php echo $article["time"].' | '.$article["date"]; ?></div>
        <div class="user_add"><?php echo $article["user"]; ?></div>
    </div>
</div>