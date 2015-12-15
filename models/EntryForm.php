<?php
/**
 * Created by PhpStorm.
 * User: haochuan
 * Date: 2015/10/15
 * Time: 14:14
 */
namespace yii\models;

use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $email;

    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            ['email', 'email'],
        ];
    }
}
?>