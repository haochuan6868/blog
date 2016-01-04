<?php
/**
 * Created by PhpStorm.
 * User: haochuan
 * Date: 2015/12/22
 * Time: 14:56
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
<div class="jumbotron">
    <div class="container">
        <h1>Hello, world!</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
    </div>
</div>
<div class="container">
    <!-- Example row of columns -->
    <div class="row">
        <?php foreach ($data as $value): ?>
            <div class="col-md-4">
                <h2><?=$value['title'];?></h2>
                <p><?=$value['content'];?></p>
                <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
            </div>
        <?php endforeach;?>
    </div>
    <hr>

    <footer>
        <p>&copy; Company 2016</p>
    </footer>
</div>
