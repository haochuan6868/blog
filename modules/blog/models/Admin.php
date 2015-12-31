<?php
/**
 * Created by PhpStorm.
 * User: haochuan
 * Date: 2015/10/22
 * Time: 11:17
 */
namespace app\modules\blog\models;

use Yii;
use yii\base\Model;

use app\modules\blog\models\Auth;

class Admin extends Model
{
    public $username;
    public $password;

    private $_user = false;

    public function rules(){

        return [
            [['username', 'password'], 'required','message'=>'{attribute}不能为空！']
        ];
    }
    public function attributeLabels()
    {
        return [
            'username' => '账号',
            'password' => '密码',
        ];
    }

    public function login()
    {
        if ($this->validate()){
            return Yii::$app->user->login($this->getUser(), 3600 * 24 * 30);
        }else {
            return false;
        }
    }

    public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors())
        {
            $user = $this->getUser();

            if (!$user)
            {
                $this->addError($attribute, '');
            }

        }
    }

    public function getUser()
    {
        if ($this->_user === false)
        {
            $this->_user = Auth::find()->where(['username'=>$this->username,'password'=>$this->password])->one();
        }
        return $this->_user;
    }
}