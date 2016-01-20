<?php
/**
 * Created by PhpStorm.
 * User: haochuan
 * Date: 2015/11/12
 * Time: 16:42
 */
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
                    <a href="#">Article List</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN SAMPLE TABLE PORTLET-->
                <div class="portlet box green">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-cogs"></i>Simple Table
                        </div>
                        <div class="tools">
                            <a href="javascript:;" class="collapse">
                            </a>
                            <a href="#portlet-config" data-toggle="modal" class="config">
                            </a>
                            <a href="javascript:;" class="reload">
                            </a>
                            <a href="javascript:;" class="remove">
                            </a>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <table class="table table-striped table-bordered table-hover" id="sample_2">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Ctime</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach($content as $value){
                                echo '<tr>';
                                echo '<td>'.$value['id'].'</td>';
                                echo "<td><a href=index.php?r=blog/admin/content-view&id=".$value['id'].">".$value['title']."</a></td>";
                                echo '<td>'.$value['ctime'].'</td>';
                                echo '<td><a href=index.php?r=blog/admin/content-edit&id='.$value['id'].' class="btn default btn-xs purple"><i class="fa fa-edit"></i> Edit </a>
                                          <a href="javascript:;" class="btn default btn-xs black" onclick="delConent('.$value['id'].')"><i class="fa fa-trash-o"></i> Delete </a></td>';
                                echo '</tr>';
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END SAMPLE TABLE PORTLET-->
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
function delConent(id){
    $.confirm({
        title:'waring',
        content:'Are you sure you want to delete it?',
        confirmButtonClass: 'btn-info',
        cancelButtonClass: 'btn-danger',
        confirm: function(){
            $.ajax({
                url:'index.php?r=blog/admin/content-del',
                data:{id:id},
                type:'GET',
                success: function (data) {
                    if(data === 'success'){
                        $.alert({
                            title:'success',
                            content:'delete data success',
                            confirmButtonClass: 'btn-info',
                            confirm: function () {
                                window.location.reload();
                            }
                        });
                    }
                },
                error:function(){
                    alert('error');
                }
            })
        }
    });

}
</script>
