<?php
/**
 * Created by PhpStorm.
 * User: haochuan
 * Date: 2015/10/19
 * Time: 15:10
 */
namespace app\modules\test\controllers;

use yii\web\Controller;

class TestBootstrapController extends Controller
{
    public $layout = 'test';

    public function actionIndex()
    {
        return $this->render('index');
    }
}