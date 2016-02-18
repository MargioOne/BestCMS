<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="<?php echo TPLPATCH.'styles/'.$core->filecss;?>">
    <title>Title</title>

</head>
<body>
<nav class="top_nav">
    <a href="#" <?php if($_GET['page']= 'gallery') {echo 'class="current_page"'};?> >1</a>
    <a href="#" <?php if($_GET['page']='post') echo {echo 'class="current_page"'};?> >2</a>
    <a href="#" <?php if($_GET['page']='about') echo {echo 'class="current_page"'};?> >3</a>
</nav>