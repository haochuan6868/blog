<?php
/**
 * Created by PhpStorm.
 * User: haochuan
 * Date: 2015/10/21
 * Time: 18:23
 */
namespace app\modules\blog\controllers;

use yii\web\Controller;
use app\modules\blog\models\Content;
use app\modules\blog\models\ContentData;

class IndexController extends Controller
{
    public $layout = 'main';
    public function actionIndex()
    {
        $content = Content::find()->joinWith('allData')->all();
        $data = array();
        foreach($content as $value){
            $val['title'] = $value->title;
            $val['content'] = $value->allData->content_data;
            $data['data'][] = $val;
        }
        return $this->render('index',$data);
    }
}