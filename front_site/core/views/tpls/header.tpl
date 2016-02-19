<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="<?php echo CSSPATCH.'styleglobal.css';?>">
    <title><?php echo $this->title;?></title>

</head>
<body>
<nav class="top_nav">
    <a href="?page=gallery"<?php if($_GET['page']=='gallery'){echo 'class=current_page';}?>>1</a>
    <a href="?page=post"<?php if($_GET['page']=='post'){echo 'class=current_page';}?>>2</a>
    <a href="?page=about" >3</a>
    <?php print_r($_GET); ?>
</nav>
