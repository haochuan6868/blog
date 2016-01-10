<?php
/**
 * Created by PhpStorm.
 * User: haochuan
 * Date: 2016/1/10
 * Time: 14:19
 */
?>
<nav class="navbar navbar-dark bg-primary navbar-fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">My blog</a>
        <ul class="nav navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <?php foreach ($categories as $category): ?>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?r=blog/index/category&id=<?=$category['id'];?>"><?=$category['category'];?></a>
                </li>
            <?php endforeach;?>
        </ul>
    </div>
</nav>
<div class="container" style="margin-top: 80px">
<h2><?=$content['title'];?></h2>
<h6><?=$content->allData['content_data'];?></h6>
</div>