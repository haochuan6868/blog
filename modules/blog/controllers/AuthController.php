<?php
/**
 * Created by PhpStorm.
 * User: haochuan
 * Date: 2015/11/16
 * Time: 14:58
 */
namespace app\modules\blog\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\modules\blog\models\Admin;
use app\modules\blog\models\Auth;
use yii\web\User;

class AuthController extends Controller
{
    public $layout = false;
    //public $enableCsrfValidation = true;
    public function actionLogin()
    {
//        if(!empty($_POST)) {
//            $username = $_POST['username'];
//            $identity = Auth::findOne(['username' => $username]);
//            Yii::$app->user->login($identity);
//            $r = Yii::$app->user->id;
//            var_dump($r);exit;
//            $isGuest = Yii::$app->user->isGuest;
//            if($isGuest === false){
//                $this->redirect(['/blog/admin']);
//            }else{
//                var_dump($isGuest);
//            }
//        }
//        return $this->render('login');
            $model = new Admin();
            //var_dump($model->load(Yii::$app->request->post()));
            if($model->load(Yii::$app->request->post()))
            {
                if($model->login()) {
//                    $identity = Yii::$app->user->identity;
//                    var_dump($identity);exit;
                    return $this->redirect(['/blog/admin']);
                }else{
                    return $this->render('login',['model'=>$model]);
                }
            }
        return $this->render('login',['model'=>$model]);
    }
}