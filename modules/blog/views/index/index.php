<?php
/**
 * Created by PhpStorm.
 * User: haochuan
 * Date: 2015/12/22
 * Time: 14:56
 */
?>
<!-- start header -->
<header class="main-header"  style="background-image: url(http://image.golaravel.com/5/c9/44e1c4e50d55159c65da6a41bc07e.jpg)"">
<div class="container">
    <div class="row">
        <div class="col-sm-12">

            <h1>Write less do more</h1>
<!--            <h2 class="hide">PHP THAT DOESN'T HURT. CODE HAPPY &amp; ENJOY THE FRESH AIR.</h2>-->

            <img src="http://image.golaravel.com/e/b0/4e4bd788405aab87f03d26edc4ab4.png" alt="Laravel" class="hide">
        </div>
    </div>
</div>
</header>
<!-- end header -->
<!-- start navigation -->
<nav class="main-navigation">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="navbar-header">
                        <span class="nav-toggle-button collapsed" data-toggle="collapse" data-target="#main-menu">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-bars"></i>
                        </span>
                </div>
                <div class="collapse navbar-collapse" id="main-menu">
                    <ul class="menu">
                        <li class="nav-current" role="presentation"><a href="/">首页</a></li>
                        <?php foreach ($categories as $category): ?>
                            <li  role="presentation">
                                <a href="index.php?r=blog/index/index&id=<?=$category['id'];?>"><?=$category['category'];?></a>
                            </li>
                        <?php endforeach;?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
<!-- end navigation -->

<!-- start site's main content area -->

<section class="content-wrap">
    <div class="container">
        <div class="row">
            <main class="col-md-8 main-content">
                <?php foreach ($data as $value): ?>
                    <article id=61 class="post tag-lumen tag-xin-ban-ben-fa-bu">
                        <div class="post-head">
                            <h1 class="post-title"><a href="index.php?r=blog/index/content&id=<?=$value['id'];?>"><?=$value['title'];?></a></h1>
                            <div class="post-meta">
                                <span class="author">作者：<a href="/author/wangsai/">haochuan</a></span> &bull;
                                <time class="post-date" datetime="2016年1月8日星期五上午10点33分" title="2016年1月8日星期五上午10点33分">2016年1月8日</time>
                            </div>
                        </div>
                        <div class="featured-media">
                            <a href="/post/lumen-5-2-is-released/"><img src="http://image.golaravel.com/e/d5/0dd5c3a731c98638a076afe8ce6de.png" alt="Lumen 5.2 正式发布"></a>
                        </div>
                        <div class="post-content">
                            <p><?=$value['content'];?></p>
                        </div>
                        <div class="post-permalink">
                            <a href="index.php?r=blog/index/content&id=<?=$value['id'];?>" class="btn btn-default">阅读全文</a>
                        </div>
                    </article>
                <?php endforeach;?>
                <article id=61 class="post tag-lumen tag-xin-ban-ben-fa-bu">

                    <div class="post-head">
                        <h1 class="post-title"><a href="/post/lumen-5-2-is-released/">Lumen 5.2 正式发布</a></h1>
                        <div class="post-meta">
                            <span class="author">作者：<a href="/author/wangsai/">王赛</a></span> &bull;
                            <time class="post-date" datetime="2016年1月8日星期五上午10点33分" title="2016年1月8日星期五上午10点33分">2016年1月8日</time>
                        </div>
                    </div>
                    <div class="featured-media">
                        <a href="/post/lumen-5-2-is-released/"><img src="http://image.golaravel.com/e/d5/0dd5c3a731c98638a076afe8ce6de.png" alt="Lumen 5.2 正式发布"></a>
                    </div>
                    <div class="post-content">
                        <p>Lumen 5.2.0 已经正式发布了！此次发布的版本包含了 Laravel 5.2 的组件并在核心理念上做了重大改变。 建议所有 Lumen 用户阅读相关文档了解以下所提到的改变： 专注提供无状态的 API 服务 Lumen 5.2 对 Lumen 进行了大瘦身专注于，并且将专注提供无状态的 JSON API 服务。</p>
                    </div>
                    <div class="post-permalink">
                        <a href="/post/lumen-5-2-is-released/" class="btn btn-default">阅读全文</a>
                    </div>

                    <footer class="post-footer clearfix">
                        <div class="pull-left tag-list">
                            <i class="fa fa-folder-open-o"></i>
                            <a href="/tag/lumen/">Lumen</a>, <a href="/tag/xin-ban-ben-fa-bu/">新版本发布</a>
                        </div>
                        <div class="pull-right share">
                        </div>
                    </footer>
                </article>
            </main>
            <aside class="col-md-4 sidebar">
                <div class="widget">
                    <h4 class="title">标签云</h4>
                    <div class="content tag-cloud">
                        <a href="/tag/laravel-5-2/">Laravel 5.2</a>
                        <a href="/tag/spark/">Spark</a>
                        <a href="/tag/jing-xiang/">镜像</a>
                        <a href="/tag/xin-ban-ben-fa-bu/">新版本发布</a>
                        <a href="/tag/lts/">LTS</a>
                        <a href="/tag/wei-kuang-jia/">微框架</a>
                        <a href="/tag/lumen/">Lumen</a>
                        <a href="/tag/ming-ming-kong-jian/">命名空间</a>
                        <a href="/tag/laravel4/">Laravel4</a>
                        <a href="/tag/whoops/">Whoops</a>
                        <a href="/tag/event/">Event</a>
                        <a href="/tag/sheng-ji/">升级</a>
                        <a href="/tag/laravle5/">laravle5</a>
                        <a href="/tag/error-page/">错误页</a>
                        <a href="/tag/laravel-5/">Laravel 5</a>
                        <a href="/tag/artisan/">Artisan</a>
                        <a href="/tag/laravel-5-1/">Laravel 5.1</a>
                        <a href="/tag/lravel/">Lravel</a>


                        <a href="/tag-cloud/">...</a>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</section>

<footer class="main-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="widget">
                    <h4 class="title">最新文章</h4>
                    <div class="content recent-post">
                        <div class="recent-single-post">
                            <a href="/post/lumen-5-2-is-released/" class="post-title">Lumen 5.2 正式发布</a>
                            <div class="date">2016年1月8日</div>
                        </div>
                        <div class="recent-single-post">
                            <a href="/post/laravel-5-2-zheng-shi-fa-bu/" class="post-title">Laravel 5.2 正式发布</a>
                            <div class="date">2015年12月22日</div>
                        </div>
                        <div class="recent-single-post">
                            <a href="/post/new-features-of-laravel-5-2/" class="post-title">Laravel 5.2 要发布了，来看看都有哪些新特性吧</a>
                            <div class="date">2015年12月12日</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="widget">
                    <h4 class="title">标签云</h4>
                    <div class="content tag-cloud">
                        <a href="/tag/laravel/">Laravel</a>
                        <a href="/tag/getting-started-with-laravel/">Laravel入门教程</a>
                        <a href="/tag/laravel-5/">Laravel 5</a>
                        <a href="/tag/eloquent/">Eloquent</a>
                        <a href="/tag/xin-ban-ben-fa-bu/">新版本发布</a>
                        <a href="/tag/laravel-5-1/">Laravel 5.1</a>
                        <a href="/tag/laravle5/">laravle5</a>
                        <a href="/tag/composer/">Composer</a>
                        <a href="/tag/php/">PHP</a>
                        <a href="/tag/orm/">ORM</a>
                        <a href="/tag/artisan/">Artisan</a>
                        <a href="/tag/lumen/">Lumen</a>
                        <a href="/tag/lts/">LTS</a>
                        <a href="/tag/laravel-5-2/">Laravel 5.2</a>
                        <a href="/tag/installation/">安装</a>

                        <a href="/tag-cloud/">...</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="widget">
                    <h4 class="title">合作伙伴</h4>
                    <div class="content tag-cloud friend-links">
                        <a href="http://www.bootcss.com" title="Bootstrap中文网" onclick="_hmt.push(['_trackEvent', 'link', 'click', 'bootcsscom'])" target="_blank">Bootstrap中文网</a>
                        <a href="http://www.bootcdn.cn" title="开放CDN服务" onclick="_hmt.push(['_trackEvent', 'link', 'click', 'bootcdncn'])" target="_blank">开放CDN服务</a>
                        <a href="http://www.gruntjs.net" title="Grunt中文网" onclick="_hmt.push(['_trackEvent', 'link', 'click', 'gruntjsnet'])" target="_blank">Grunt中文网</a>
                        <a href="http://www.gulpjs.com.cn/" title="Gulp中文网" onclick="_hmt.push(['_trackEvent', 'link', 'click', 'gulpjscomcn'])" target="_blank">Gulp中文网</a>
                        <hr>
                        <a href="http://lodashjs.com/" title="Lodash中文文档" onclick="_hmt.push(['_trackEvent', 'link', 'click', 'lodashjscom'])" target="_blank">Lodash中文文档</a>
                        <a href="http://www.jquery123.com/" title="jQuery中文文档" onclick="_hmt.push(['_trackEvent', 'link', 'click', 'jquery123com'])" target="_blank">jQuery中文文档</a>
                        <hr>
                        <a href="https://www.upyun.com/" title="又拍云" onclick="_hmt.push(['_trackEvent', 'link', 'click', 'upyun'])" target="_blank">又拍云</a>
                        <a href="http://www.ucloud.cn/" title="UCloud" onclick="_hmt.push(['_trackEvent', 'link', 'click', 'ucloud'])" target="_blank">UCloud</a>
                    </div>
                </div></div>
        </div>
    </div>
</footer>
<!--<nav class="navbar navbar-dark bg-primary navbar-fixed-top">-->
<!--    <div class="container">-->
<!--        <a class="navbar-brand" href="#">My blog</a>-->
<!--        <ul class="nav navbar-nav">-->
<!--            <li class="nav-item active">-->
<!--                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>-->
<!--            </li>-->
<!--            --><?php //foreach ($categories as $category): ?>
<!--            <li class="nav-item">-->
<!--                <a class="nav-link" href="index.php?r=blog/index/category&id=--><?//=$category['id'];?><!--">--><?//=$category['category'];?><!--</a>-->
<!--            </li>-->
<!--            --><?php //endforeach;?>
<!--        </ul>-->
<!--    </div>-->
<!--</nav>-->
<!--<div class="jumbotron">-->
<!--    <div class="container">-->
<!--        <h1>Hello, world!</h1>-->
<!--        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>-->
<!--        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>-->
<!--    </div>-->
<!--</div>-->
<!--<div class="container">-->
<!--    <!-- Example row of columns -->
<!--    <div class="row">-->
<!--        --><?php //foreach ($data as $value): ?>
<!--            <div class="col-md-4">-->
<!--                <h2>--><?//=$value['title'];?><!--</h2>-->
<!--                <p>--><?//=$value['content'];?><!--</p>-->
<!--                <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>-->
<!--            </div>-->
<!--        --><?php //endforeach;?>
<!--    </div>-->
<!--    <hr>-->
<!---->
<!--    <footer>-->
<!--        <p>&copy; Company 2016</p>-->
<!--    </footer>-->
<!--</div>-->
