<?php
/**
 * Created by PhpStorm.
 * User: haochuan
 * Date: 2015/10/21
 * Time: 18:23
 */
namespace app\modules\blog\controllers;

use yii\web\Controller;

class IndexController extends Controller
{
    public $layout = 'main';
    public function actionIndex()
    {
        echo 'aaa';
    }
}