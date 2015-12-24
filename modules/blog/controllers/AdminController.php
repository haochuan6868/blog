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
//use app\modules\blog\models\Admin;
use app\modules\blog\models\Content;
use app\modules\blog\models\ContentData;
use yii\web\user;
use app\models\Admin;

class AdminController extends Controller
{
    public $layout = 'metronic';
    public $enableCsrfValidation = false;
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['index','content-add'],
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => ['index'],
                        'roles' => ['@'],
                    ]
                ]
            ]
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionLogin()
    {
        return $this->render("login");
    }

    public function actionContentAdd()
    {
        $data = Yii::$app->request->post();
        if(!empty($data)){
            $contentModel = new Content();
            $contentDataModel = new ContentData();
            $title = $data['title'];
            $content = $data['content'];
            $contentModel->title = $title;
            $contentModel->save();
            $contentDataModel->content_id = $contentModel->primaryKey;
            $contentDataModel->content_data = $content;
            $contentDataModel->save();
        } else {
            return $this->render('contentAdd');
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
//        $identity = Admin::findOne(['username' => 'haochuan']);
//        Yii::$app->user->login($identity);
//        var_dump(Yii::$app->user);exit;
        $data['content'] = Content::find()->indexBy('id')->all();
        return $this->render('contentList',$data);
    }
}