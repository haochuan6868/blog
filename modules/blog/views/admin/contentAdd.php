<?php
/**
 * Created by PhpStorm.
 * User: haochuan
 * Date: 2015/10/28
 * Time: 17:57
 */
use yii\helpers\Html;
echo Html::cssFile('@web/css/metro/bootstrap-wysihtml5/bootstrap-wysihtml5.css');
echo Html::cssFile('@web/css/metro/bootstrap-markdown/css/bootstrap-markdown.min.css');
echo Html::jsFile('@web/css/metro/bootstrap-markdown/js/bootstrap-markdown.js');
echo Html::jsFile('@web/css/metro/bootstrap-markdown/lib/markdown.js');
?>
<div class="page-content-wrapper">
    <div class="page-content">
        <h3 class="page-title">Article Add</h3>
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
                    <a href="#">Article Add</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN VALIDATION STATES-->
                <div class="portlet box green">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-gift"></i>Advance Validation
                        </div>
                    </div>
                    <div class="portlet-body form">
                        <!-- BEGIN FORM-->
                        <form action="index.php?r=blog/admin/content-add" method="POST" id="form_sample_3" class="form-horizontal">
                            <div class="form-body">
                                <div class="form-group">
                                    <label class="control-label col-md-1">Title:</label>
                                    <div class="col-md-7">
                                        <input type="text" name="title" data-required="1" class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-1">Category:</label>
                                    <div class="col-md-7">
                                        <select class="form-control" name="category_id">
                                            <?php
                                                foreach($categories as $category){
                                                    echo "<option value=".$category['id'].">" . $category["category"] . "</option>";
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-1">Content</label>
                                    <div class="col-md-11">
                                        <textarea name="content" data-provide="markdown" rows="20" data-error-container="#editor_error"></textarea>
                                        <div id="editor_error">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-offset-9 col-md-3">
                                        <button type="submit" class="btn green">Submit</button>
                                        <button type="button" class="btn default">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- END FORM-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
