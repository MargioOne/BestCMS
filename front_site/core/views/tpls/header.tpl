<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="<?php echo CSSPATCH.$cssfile;?>">
    <title><?php echo $title; ?></title>

</head>
<body>
<nav class="top_nav">
    <a href="?page=gallery" <?php if($_GET['page']=='gallery'){echo 'class=current_page';}?> >GALLARY</a>
    <a href="?page=post" <?php if($_GET['page']=='post' || $_GET['page']=='full_page'){echo 'class=current_page';}?> >POST</a>
    <a href="?page=about" <?php if($_GET['page']=='about'){echo 'class=current_page';}?> >ABOUT US</a>
</nav>
