<?php
/**
 * Created by PhpStorm.
 * User: haochuan
 * Date: 2015/10/21
 * Time: 18:26
 */
?>
<link href="css/metro/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<script src="js/metro/jquery.min.js" type="text/javascript"></script>
<script src="css/metro/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<body>
<div>
    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container-fluid">
            <ul class="nav navbar-nav">
                <li><a href="#">主页</a></li>
                <li><a href="#">导航</a></li>
            </ul>
        </div>
    </nav>
</div>

<div id="myCarousel" class="carousel slide">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="item active">
            <img src="img/1.jpg" width="300" alt="First slide">
        </div>
        <div class="item">
            <img src="img/2.jpg" width="300" alt="Second slide">
        </div>
        <div class="item">
            <img src="img/3.jpg" width="300" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
    <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div>
<div>
    <div class="row">
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="" alt="">
                <div class="caption">
                    <h3>Thumbnail label</h3>
                    <p>Some Text</p>
                    <p><a href="#" class="btn btn-primary" role="button">Button</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<div style="background-color: #000000">

</div>
</body>