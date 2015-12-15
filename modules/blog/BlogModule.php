<?php
/**
 * Created by PhpStorm.
 * User: haochuan
 * Date: 2015/10/21
 * Time: 17:04
 */
namespace app\modules\blog;
use yii\base\Module;

class BlogModule extends Module
{
    public $controllerNamespace = 'app\modules\blog\controllers';

    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
}