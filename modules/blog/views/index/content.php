<?php
/**
 * Created by PhpStorm.
 * User: haochuan
 * Date: 2016/1/10
 * Time: 14:19
 */
use yii\helpers\Html;
echo Html::cssFile('@web/css/metro/bootstrap-wysihtml5/bootstrap-wysihtml5.css');
echo Html::cssFile('@web/css/metro/bootstrap-markdown/css/bootstrap-markdown.min.css');
echo Html::jsFile('@web/css/metro/bootstrap-markdown/js/bootstrap-markdown.js');
echo Html::jsFile('@web/css/metro/bootstrap-markdown/lib/markdown.js');
?>
<!-- start header -->
<header class="main-header"  style="background-image: url(http://image.golaravel.com/5/c9/44e1c4e50d55159c65da6a41bc07e.jpg)"">
<div class="container">
    <div class="row">
        <div class="col-sm-12">

            <h1>0101010101</h1>
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
                                <a href="index.php?r=blog/index/category&id=<?=$category['id'];?>" target="_blank"><?=$category['category'];?></a>
                            </li>
                        <?php endforeach;?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
<!-- end navigation -->

<section class="content-wrap">
    <div class="container">
        <div class="row">

            <main class="col-md-8 main-content">


                <article id="61" class="post tag-lumen tag-xin-ban-ben-fa-bu">

                    <header class="post-head">
                        <h1 class="post-title"><?=$content['title'];?></h1>
                        <section class="post-meta">
                            <span class="author">作者：<a href="">haochuan</a></span> &bull;
                            <time class="post-date" datetime="2016年1月8日星期五上午10点33分" title="2016年1月8日星期五上午10点33分">2016年1月8日</time>
                        </section>
                    </header>

<!--                    <section class="featured-media">-->
<!--                        <img src="http://image.golaravel.com/e/d5/0dd5c3a731c98638a076afe8ce6de.png" alt="Lumen 5.2 正式发布">-->
<!--                    </section>-->

                    <section class="post-content" id="post-content">
                        <textarea id="text-input" style="display:none" oninput="this.editor.update()" rows="6" cols="60"><?=$content->allData['content_data'];?></textarea>
                        <div id="preview"></div>
                    </section>

<!--                    <footer class="post-footer clearfix">-->
<!--                        <div class="pull-left tag-list">-->
<!--                            <i class="fa fa-folder-open-o"></i>-->
<!--                            <a href="/tag/lumen/">Lumen</a>, <a href="/tag/xin-ban-ben-fa-bu/">新版本发布</a>-->
<!--                        </div>-->
<!---->
<!--                        <div class="pull-right share">-->
<!--                            <div class="bdsharebuttonbox share-icons">-->
<!--                                <a href="#" class="bds_more" data-cmd="more"></a>-->
<!--                                <a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>-->
<!--                                <a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>-->
<!--                                <a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a>-->
<!--                                <a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a>-->
<!--                                <a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>-->
<!--                            </div>        </div>-->
<!--                    </footer>-->

                </article>

<!--                <div class="about-author clearfix">-->
<!--                    <a href="/author/wangsai/"><img src="http://image.golaravel.com/6/d4/82b9646073bef7a7d67c6cd1db987.png" alt="王赛" class="avatar pull-left"></a>-->
<!---->
<!--                    <div class="details">-->
<!--                        <div class="author">-->
<!--                            关于作者 <a href="/author/wangsai/">王赛</a>-->
<!--                        </div>-->
<!--                        <div class="meta-info">-->
<!--                            <span class="loaction"><i class="fa fa-home"></i>北京</span>-->
<!--                            <span class="website"><i class="fa fa-globe"></i><a href="http://www.bootcss.com/" targer="_blank">个人网站/博客</a></span>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->

                <div class="prev-next-wrap clearfix">

                    <a class="btn btn-default" href="/post/laravel-5-2-zheng-shi-fa-bu/"><i class="fa fa-angle-left fa-fw"></i> Laravel 5.2 正式发布</a>
                    &nbsp;

                </div>


            </main>

            <aside class="col-md-4 sidebar">
                <!-- start widget -->
                <!-- end widget -->


                <!-- start tag cloud widget -->
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
                <!-- end tag cloud widget -->

                <!-- start widget -->
                <!-- end widget -->

                <!-- start widget -->
                <!-- end widget -->                </aside>

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
<script>
    function Editor(input, preview) {
        this.update = function () {
            preview.innerHTML = markdown.toHTML(input.value);
        };
        input.editor = this;
        this.update();
    }
    var $ = function (id) { return document.getElementById(id); };
    new Editor($("text-input"), $("preview"));
</script>