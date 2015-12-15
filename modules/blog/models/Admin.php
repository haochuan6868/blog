<?php
/**
 * Created by PhpStorm.
 * User: haochuan
 * Date: 2015/10/22
 * Time: 11:17
 */
namespace app\modules\blog\models;

use yii\db\ActiveRecord;

class Admin extends ActiveRecord
{
    public static function tableName()
    {
        return 'blog_admin';
    }

    public function rules()
    {
        return [
            [['username', 'password'], 'required'],
            [['username'], 'string', 'max' => 50],
            [['password'], 'string', 'max' => 50],
        ];
    }

    public function attributeLabels()
    {
        return [
            'username' => 'username',
            'password' => 'password'
        ];
    }

    public function setPassword($password)
    {
        $this->password = md5($password);
    }

    public function validatePassword($password)
    {
        return $this->password === md5($password);
    }
}