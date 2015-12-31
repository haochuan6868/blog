<?php
/**
 * Created by PhpStorm.
 * User: haochuan
 * Date: 2015/11/18
 * Time: 14:38
 */
namespace app\modules\blog\models;

use Yii;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

class Auth extends ActiveRecord implements IdentityInterface
{
//    public $id;
//    public $username;
//    public $password;
//    public $authKey;
//    public $accessToken;

    public static function tableName()
    {
        return 'blog_admin';
    }
    public static function findIdentity($id)
    {
//        $temp = parent::find()->where(['id'=>$id])->one();
//        return isset($temp)?new static($temp):null;
        return static::findOne($id);
    }
    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['access_token' => $token]);
    }
    public function getId()
    {
        return $this->id;
    }
    public  function  getUser(){
        return $this->username;
    }
    public function getAuthKey()
    {
        //return $this->authKey;
    }
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }
}