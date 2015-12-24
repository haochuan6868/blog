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
use app\modules\blog\models\Auth;
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
            $identity = Auth::findOne(['username' => $username]);
            Yii::$app->user->login($identity);
            $r = Yii::$app->user->identity;
//            var_dump($r);
            $isGuest = Yii::$app->user->isGuest;
            if($isGuest === false){
                $this->redirect(['/blog/admin']);
            }else{
                var_dump($isGuest);
            }
        }
        return $this->render('login');
    }
}