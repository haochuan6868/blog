<?php
/**
 * Created by PhpStorm.
 * User: haochuan
 * Date: 2016/1/24
 * Time: 14:44
 */
?>
<div class="page-content-wrapper">
    <div class="page-content">
        <h3 class="page-title">Category Add</h3>
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <i class="fa fa-home"></i>
                    <a href="#">Home</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="#">Category</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="#">Category Add</a>
                </li>
            </ul>
        </div>
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-green">
                    <i class="icon-pin font-green"></i>
                    <span class="caption-subject bold uppercase"> ADD CATEGORY</span>
                </div>
            </div>
            <div class="portlet-body form">
                <form role="form" method="post" action="index.php?r=blog/admin/category-add">
                    <div class="form-body">
                        <div class="form-group form-md-line-input form-md-floating-label has-info">
                            <input type="text" class="form-control input-lg" id="form_control_1" name="category">
                            <label for="form_control_1">Input Category Name ...</label>
                        </div>
                    </div>
                    <div class="form-actions noborder">
                        <button type="submit" class="btn blue">Submit</button>
                        <button type="button" class="btn default">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
