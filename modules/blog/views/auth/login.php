<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
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

    <link href="css/metro/select2/select2.css" rel="stylesheet" type="text/css" />
    <link href="css/metro/login-soft.css" rel="stylesheet" type="text/css"/>

    <link href="css/metro/components.css" id="style_components" rel="stylesheet" type="text/css"/>
    <link href="css/metro/plugins.css" rel="stylesheet" type="text/css"/>
    <link href="css/metro/layout.css" rel="stylesheet" type="text/css"/>
    <link id="style_color" href="css/metro/darkblue.css" rel="stylesheet" type="text/css"/>
    <link href="css/metro/custom.css" rel="stylesheet" type="text/css"/>
</head>
<?php $form = ActiveForm::begin([
    'action' => ['auth/login'],
    'method'=>'post',
]);?>
<body class="login">
<div class="logo"></div>
<div class="menu-toggler sidebar-toggler"></div>
<div class="content">
<!--    <form class="login-form" action="index.php?r=blog/auth/login" method="post">-->
        <h3 class="form-title">Login to your account</h3>
        <div class="alert alert-danger display-hide">
            <button class="close" data-close="alert"></button>
			<span>
			Enter any username and password. </span>
        </div>
        <div class="form-group">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">Username</label>
            <div class="input-icon">
<!--                <i class="fa fa-user"></i>-->
                <?= $form->field($model, 'username') ?>
<!--                <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="username"/>-->
            </div>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Password</label>
            <div class="input-icon">
                <?= $form->field($model, 'password')->passwordInput() ?>
<!--                <i class="fa fa-lock"></i>-->
<!--                <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password"/>-->
            </div>
        </div>
        <div class="form-actions">
<!--<label class="checkbox"><input type="checkbox" name="remember" value="1"/> Remember me </label>-->
<!--            <button type="submit" class="btn blue pull-right">-->
<!--                Login <i class="m-icon-swapright m-icon-white"></i>-->
<!--            </button>-->
            <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
        </div>
<!--    </form>-->
</div>
</body>
<?php ActiveForm::end(); ?>
<script src="js/metro/jquery.min.js" type="text/javascript"></script>
<script src="js/metro/jquery-migrate.min.js" type="text/javascript"></script>
<script src="css/metro/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/metro/jquery.blockui.min.js" type="text/javascript"></script>
<script src="css/metro/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="js/metro/jquery.cokie.min.js" type="text/javascript"></script>

<script src="js/metro/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="js/metro/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
<script src="css/metro/select2/select2.min.js" type="text/javascript"></script>

<script src="js/metro/metronic.js" type="text/javascript"></script>
<script src="js/metro/layout.js" type="text/javascript"></script>
<script src="js/metro/demo.js" type="text/javascript"></script>
<script src="js/metro/login-soft.js" type="text/javascript"></script>
<script>
    jQuery(document).ready(function() {
        Metronic.init();
        Layout.init();
        Login.init();
        Demo.init();
        $.backstretch([
                "img/loginbg/1.jpg",
                "img/loginbg/2.jpg",
                "img/loginbg/3.jpg",
                "img/loginbg/4.jpg"
            ], {
                fade: 1000,
                duration: 8000
            }
        );
    });
</script>
</html>