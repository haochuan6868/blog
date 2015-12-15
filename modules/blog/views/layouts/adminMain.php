<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><span>My Blog</span>Admin</a>
            <ul class="user-menu">
                <li class="dropdown pull-right">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> User <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <ul class="nav menu">
        <li class="parent ">
            <a href="">
                <span class="glyphicon glyphicon-th"></span>内容管理
                <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right">
                <em class="glyphicon glyphicon-menu-down"></em>
            </a>
            <ul class="children collapse" id="sub-item-1">
                <li><a class="" href="index.php?r=blog/admin/content-view"><span class="glyphicon glyphicon-share-alt"></span> 查看</a></li>
                <li><a class="" href="index.php?r=blog/admin/content-add"><span class="glyphicon glyphicon-share-alt"></span> 添加</a></li>
            </ul>
        </li>
        <li class="parent ">
            <a href=""><span class="glyphicon glyphicon-stats"></span>栏目管理
            <span data-toggle="collapse" href="#sub-item-2" class="icon pull-right">
            <em class="glyphicon glyphicon-menu-down"></em>
            </a>
            <ul class="children collapse" id="sub-item-2">
                <li><a class="" href="#"><span class="glyphicon glyphicon-share-alt"></span> 查看</a></li>
                <li><a class="" href="#"><span class="glyphicon glyphicon-share-alt"></span> 添加</a></li>
            </ul>
        </li>
        <li class="parent ">
            <a href=""><span class="glyphicon glyphicon-list-alt"></span>用户管理
            <span data-toggle="collapse" href="#sub-item-3" class="icon pull-right">
            <em class="glyphicon glyphicon-menu-down"></em>
            </a>
            <ul class="children collapse" id="sub-item-3">
                <li><a class="" href="#"><span class="glyphicon glyphicon-share-alt"></span> 查看</a></li>
                <li><a class="" href="#"><span class="glyphicon glyphicon-share-alt"></span> 添加</a></li>
            </ul>
        </li>
    </ul>
</div>

<?= $content ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>