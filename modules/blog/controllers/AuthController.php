<?php
/**
 * Created by PhpStorm.
 * User: haochuan
 * Date: 2015/11/16
 * Time: 14:58
 */
namespace app\modules\blog\controllers;

use Yii;
use yii\web\Controller;
use app\modules\blog\models\Admin;

class AuthController extends Controller
{
    public $layout = false;
    public function actionLogin()
    {
        $model = new Admin();
        if($model->load(Yii::$app->request->post()))
        {
            if($model->login()) {
                return $this->redirect(['/blog/admin']);
            }else{
                return $this->render('login',['model'=>$model]);
            }
        }
        return $this->render('login',['model'=>$model]);
    }
    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->redirect(['login']);
    }
}