<?php
/**
 * Created by PhpStorm.
 * User: haochuan
 * Date: 2015/10/21
 * Time: 18:23
 */
namespace app\modules\blog\controllers;

use Yii;
use yii\web\Controller;
use app\modules\blog\models\Content;
use app\modules\blog\models\ContentData;
use app\modules\blog\models\Category;

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
        $data['categories'] = Category::find()->asArray()->all();
        return $this->render('index',$data);
    }
    public function actionCategory()
    {
        $categoryId = Yii::$app->request->get('id','');
        $data['categories'] = Category::find()->asArray()->all();
        $data['data'] = Content::find()->where(['category_id'=>$categoryId])->asArray()->all();
        return $this->render('category',$data);
    }
    public function actionContent()
    {
        $contentId = Yii::$app->request->get('id','');
        $content = Content::find()->where(['id'=>$contentId])->joinWith('allData')->one();
        print_r($content);
        //$contentData = $content->allData();
    }
}