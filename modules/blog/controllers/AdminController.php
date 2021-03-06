<?php
/**
 * Created by PhpStorm.
 * User: haochuan
 * Date: 2015/10/21
 * Time: 17:10
 */
namespace app\modules\blog\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use app\modules\blog\models\Form;
use app\modules\blog\models\Admin;
use app\modules\blog\models\Content;
use app\modules\blog\models\ContentData;
use app\modules\blog\models\Category;
use yii\web\user;
use app\modules\blog\models\Auth;

class AdminController extends Controller
{
    public $layout = 'metronic';
    public $enableCsrfValidation = false;
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                //'only' => ['index','content-add'],
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => [
                            'index',
                            'content-add','content-list','content-view','content-del','content-edit',
                            'category-add','category-list','category-del','category-edit'
                        ],
                        'roles' => ['@'],
                    ]
                ]
            ]
        ];
    }
    /*
     * index
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /*
     * login logout
     */
    public function actionLogin()
    {
        return $this->render("login");
    }
    public function actionLogout()
    {

    }

    /*
     * content
     */
    public function actionContentAdd()
    {
        $data = Yii::$app->request->post();
        if(!empty($data)){
            $contentModel = new Content();
            $contentDataModel = new ContentData();
            $title = $data['title'];
            $content = $data['content'];
            $contentModel->title = $title;
            $contentModel->category_id = $data['category_id'];
            $result = $contentModel->save();
            $contentDataModel->content_id = $contentModel->primaryKey;
            $contentDataModel->content_data = $content;
            $dataResult = $contentDataModel->save();
            if($result && $dataResult){
                return $this->redirect(['content-list']);
            }
        } else {
            $data['categories'] = Category::find()->indexBy('id')->all();
            return $this->render('contentAdd',$data);
        }
    }
    public function actionContentView()
    {
        $id = Yii::$app->request->get('id',2);
        $content = Content::findOne($id);
        $data = $content->allData;
        $value['title']  = $content['title'];
        $value['content'] = $data['content_data'];
        return $this->render('contentView',$value);
    }
    public function actionContentList()
    {
        $data['content'] = Content::find()->indexBy('id')->all();
        return $this->render('contentList',$data);
    }
    public function actionContentDel()
    {
        $id = Yii::$app->request->get('id');
        $content = Content::findOne(['id'=>$id]);
        $contentResult = $content->delete();
        $contentData = ContentData::findOne(['content_id'=>$id]);
        $contentDataResult = $contentData->delete();
        if(($contentResult > 0) && ($contentDataResult > 0 )){
            echo 'success';
        }
    }
    public function actionContentEdit()
    {
        $data = Yii::$app->request->post();
        $id = Yii::$app->request->get('id');
        if(!empty($data)){
            $model = Content::findOne($id);
            $model->title  = $data['title'];
            $model->category_id  = $data['category_id'];
            $contentResult = $model->save();
            $contentDataResult = ContentData::updateAll(['content_data'=>$data['content']],'content_id=:content_id',[':content_id'=>$id]);
            if(($contentResult == true) && ($contentDataResult > 0)){
                //echo 'success';
                return $this->redirect(['content-list']);
            }
        }else{
            $content = Content::findOne($id);
            $contentData = $content->allData;
            $data['id']  = $content['id'];
            $data['title']  = $content['title'];
            $data['categoryId']  = $content['category_id'];
            $data['content'] = $contentData['content_data'];
            $data['categories'] = Category::find()->indexBy('id')->all();
            return $this->render('contentEdit',$data);
        }
    }
    /*
     * category
     */
    public function actionCategoryAdd()
    {
        $data = Yii::$app->request->post();
        if(!empty($data)){
            $model = new Category();
            $model->category = $data['category'];
            $result = $model->save();
            if($result){
                return $this->redirect(['category-list']);
            }
        }
        return $this->render('categoryAdd');
    }
    public function actionCategoryList()
    {
        $data['content'] = Category::find()->indexBy('id')->all();
        return $this->render('categoryList',$data);
    }
    public function actionCategoryEdit()
    {
        $id = Yii::$app->request->get('id');
        $data = Yii::$app->request->post();
        if(!empty($data)){
            $model = Category::findOne($id);
            $model->category  = $data['category'];
            $categoryResult = $model->save();
            if($categoryResult == true){
                return $this->redirect(['category-list']);
            }
        }else {
            $category = Category::findOne($id);
            $data['data'] = $category;
            return $this->render('categoryEdit', $data);
        }
    }
    public function actionCategoryDel()
    {
        $id = Yii::$app->request->get('id');
        $category = Category::findOne(['id'=>$id]);
        $categoryResult = $category->delete();
        if($categoryResult > 0){
            echo 'success';
        }
    }
}