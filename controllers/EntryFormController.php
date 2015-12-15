<?php
/**
 * Created by PhpStorm.
 * User: haochuan
 * Date: 2015/10/15
 * Time: 14:29
 */
namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\EntryForm;

class EntryFormController extends Controller
{
    public function actionEntry()
    {
        $model = new EntryForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {

            return $this->render('entry-confirm', ['model' => $model]);
        } else {
            return $this->render('entry', ['model' => $model]);
        }
    }
}