<?php
/**
 * Created by PhpStorm.
 * User: haochuan
 * Date: 2015/11/12
 * Time: 14:39
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>My Blog</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
    <link href="css/metro/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/metro/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/metro/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/metro/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
    <link href="css/metro/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/metro/select2/select2.css" rel="stylesheet" type="text/css" />
    <link href="css/metro/datatables/plugins/bootstrap/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="css/metro/components.css" id="style_components" rel="stylesheet" type="text/css"/>
    <link href="css/metro/plugins.css" rel="stylesheet" type="text/css"/>
    <link href="css/metro/layout.css" rel="stylesheet" type="text/css"/>
    <link id="style_color" href="css/metro/darkblue.css" rel="stylesheet" type="text/css"/>
    <link href="css/metro/custom.css" rel="stylesheet" type="text/css"/>

    <script src="js/metro/jquery.min.js" type="text/javascript"></script>
    <script src="js/metro/jquery-migrate.min.js" type="text/javascript"></script>
    <script src="js/metro/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="css/metro/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/metro/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
    <script src="js/metro/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script src="js/metro/jquery.blockui.min.js" type="text/javascript"></script>
    <script src="js/metro/jquery.cokie.min.js" type="text/javascript"></script>
    <script src="css/metro/uniform/jquery.uniform.min.js" type="text/javascript"></script>
    <script src="css/metro/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="css/metro/select2/select2.min.js"></script>
    <script type="text/javascript" src="css/metro/datatables/media/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="css/metro/datatables/plugins/bootstrap/dataTables.bootstrap.js"></script>
    <script src="js/metro/metronic.js" type="text/javascript"></script>
    <script src="js/metro/layout.js" type="text/javascript"></script>
    <script src="js/metro/quick-sidebar.js" type="text/javascript"></script>
    <script src="js/metro/demo.js" type="text/javascript"></script>
    <script src="js/metro/table-managed.js"></script>
</head>

<body class="page-header-fixed page-quick-sidebar-over-content ">
<div class="page-header -i navbar navbar-fixed-top">
    <div class="page-header-inner">
        <div class="page-logo">

        </div>
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
        </a>
        <div class="top-menu">
            <ul class="nav navbar-nav pull-right">
                <li class="dropdown dropdown-user">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <img alt="" class="img-circle" src=""/>
					<span class="username username-hide-on-mobile">
					Hao Chuan </span>
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-default">
                        <li>
                            <a href="extra_profile.html">
                                <i class="icon-user"></i> My Profile </a>
                        </li>
                        <li>
                            <a href="page_calendar.html">
                                <i class="icon-calendar"></i> My Calendar </a>
                        </li>
                        <li>
                            <a href="inbox.html">
                                <i class="icon-envelope-open"></i> My Inbox <span class="badge badge-danger">
							3 </span>
                            </a>
                        </li>
                        <li>
                            <a href="page_todo.html">
                                <i class="icon-rocket"></i> My Tasks <span class="badge badge-success">
							7 </span>
                            </a>
                        </li>
                        <li class="divider">
                        </li>
                        <li>
                            <a href="extra_lock.html">
                                <i class="icon-lock"></i> Lock Screen </a>
                        </li>
                        <li>
                            <a href="index.php?r=blog/auth/logout">
                                <i class="icon-key"></i> Log Out </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown dropdown-quick-sidebar-toggler">
                    <a href="index.php?r=blog/auth/logout" class="dropdown-toggle">
                        <i class="icon-logout"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="clearfix">
</div>

<div class="page-container">
    <div class="page-sidebar-wrapper">
        <div class="page-sidebar navbar-collapse collapse">
            <ul class="page-sidebar-menu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                <li class="sidebar-toggler-wrapper">
                    <div class="sidebar-toggler">
                    </div>
                </li>
                <li class="sidebar-search-wrapper">
                    <form class="sidebar-search " action="extra_search.html" method="POST">
                        <a href="javascript:;" class="remove">
                            <i class="icon-close"></i>
                        </a>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search...">
							<span class="input-group-btn">
							<a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
							</span>
                        </div>
                    </form>
                </li>
                <!--Index-->
                <li class="start ">
                    <a href="index.php?r=blog/admin/">
                        <i class="icon-home"></i>
                        <span class="title">Home</span>
                    </a>
                </li>
                <!--User-->
                <li>
                    <a href="javascript:;">
                        <i class="icon-users"></i>
                        <span class="title">Admin</span>
                        <span class="arrow "></span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="#">Admin List</a>
                        </li>
                        <li>
                            <a href="#">Admin Add</a>
                        </li>
                    </ul>
                </li>
                <!--Category-->
                <li>
                    <a href="javascript:;">
                        <i class="icon-list"></i>
                        <span class="title">Category</span>
                        <span class="arrow "></span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="index.php?r=blog/admin/category-list">Category List</a>
                        </li>
                        <li>
                            <a href="index.php?r=blog/admin/category-add">Category Add</a>
                        </li>
                    </ul>
                </li>
                <!--Content-->
                <li class="active">
                    <a href="javascript:;">
                        <i class="icon-docs"></i>
                        <span class="title">Article</span>
                        <span class="arrow "></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="active">
                            <a href="index.php?r=blog/admin/content-list">Article List</a>
                        </li>
                        <li>
                            <a href="index.php?r=blog/admin/content-add">Article Add</a>
                        </li>
                        <li>
                            <a href="#">Article View</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <?= $content ?>
</div>
<script>
    jQuery(document).ready(function() {
        // initiate layout and plugins
        Metronic.init(); // init metronic core components
        Layout.init(); // init current layout
        QuickSidebar.init(); // init quick sidebar
        Demo.init(); // init demo features
        TableManaged.init();
    });
</script>
</body>
</html>
