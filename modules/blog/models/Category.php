<?php
/**
 * Created by PhpStorm.
 * User: haochuan
 * Date: 2015/12/31
 * Time: 11:21
 */
namespace app\modules\blog\models;

use yii\db\ActiveRecord;

class Category extends ActiveRecord
{
    public static function tableName()
    {
        return 'blog_category';
    }
}