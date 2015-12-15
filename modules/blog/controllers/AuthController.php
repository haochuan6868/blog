<?php
/**
 * Created by PhpStorm.
 * User: haochuan
 * Date: 2015/11/16
 * Time: 14:58
 */
namespace app\modules\blog\controllers;

use Yii;
use app\modules\blog\models\Admin;
use yii\web\Controller;
use yii\web\User;

class AuthController extends Controller
{
    public $layout = false;
    public $enableCsrfValidation = false;
    public function actionLogin()
    {
        if(!empty($_POST)) {
            $username = $_POST['username'];
            $identity = Admin::findOne(['username' => $username]);
            Yii::$app->user->login($identity);
        }
        return $this->render('login');
    }
}