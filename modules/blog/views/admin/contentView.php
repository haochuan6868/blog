<?php
/**
 * Created by PhpStorm.
 * User: haochuan
 * Date: 2015/11/12
 * Time: 16:42
 */
use yii\helpers\Html;
echo Html::cssFile('@web/css/metro/bootstrap-wysihtml5/bootstrap-wysihtml5.css');
echo Html::cssFile('@web/css/metro/bootstrap-markdown/css/bootstrap-markdown.min.css');
echo Html::jsFile('@web/css/metro/bootstrap-markdown/js/bootstrap-markdown.js');
echo Html::jsFile('@web/css/metro/bootstrap-markdown/lib/markdown.js');
?>
<div class="page-content-wrapper">
    <div class="page-content">
        <h3 class="page-title">Article List</h3>
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <i class="fa fa-home"></i>
                    <a href="#">Home</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="#">Article</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="#"><?= $title;?></a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
            标题:<?= $title;?>
            <textarea id="text-input" style="display:none" oninput="this.editor.update()" rows="6" cols="60"><?= $content;?></textarea>
            正文:<div id="preview"></div>
            </div>
        </div>
    </div>
</div>
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
