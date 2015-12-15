<?php
/**
 * Created by PhpStorm.
 * User: haochuan
 * Date: 2015/10/29
 * Time: 15:31
 */
namespace app\modules\blog\models;

use yii\db\ActiveRecord;

class ContentData extends ActiveRecord
{
    public static function tableName()
    {
        return 'blog_content_data';
    }

}