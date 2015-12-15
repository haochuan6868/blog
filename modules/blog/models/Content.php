<?php
/**
 * Created by PhpStorm.
 * User: haochuan
 * Date: 2015/10/29
 * Time: 15:25
 */
namespace app\modules\blog\models;

use yii\db\ActiveRecord;

class Content extends ActiveRecord
{
    public static function tableName()
    {
        return 'blog_content';
    }
    public function getAllData()
    {
        return $this->hasOne(ContentData::className(), ['content_id' => 'id']);
    }
}