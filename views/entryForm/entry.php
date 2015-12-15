<?php
/**
 * Created by PhpStorm.
 * User: haochuan
 * Date: 2015/10/15
 * Time: 14:43
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'email') ?>

    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>

<?php $form = ActiveForm::end(); ?>
