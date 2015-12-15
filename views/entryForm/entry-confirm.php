<?php
/**
 * Created by PhpStorm.
 * User: haochuan
 * Date: 2015/10/15
 * Time: 14:43
 */
use yii\helpers\Html;
?>
<p>You have entered the following information:</p>

<ul>
    <li><label>Name</label>: <?= Html::encode($model->name) ?></li>
    <li><label>Email</label>: <?= Html::encode($model->email) ?></li>
</ul>
