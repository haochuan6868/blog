<?php

namespace app\models;

use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

class Admin extends ActiveRecord implements IdentityInterface
{
    public static function tableName()
    {
        return 'blog_admin';
    }

    public static function findIdentity($id)
    {
        return static::findOne($id);
    }
    public static function findIdentityByAccessToken($token, $type = null)
    {

    }
    public function getId()
    {

    }
    public function getAuthKey()
    {

    }
    public function validateAuthKey($authKey)
    {

    }
}
?>