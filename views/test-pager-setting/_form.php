<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model helearn\ggsddu\models\TestPagerSetting */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="test-pager-setting-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pid')->textInput() ?>

    <?= $form->field($model, 'type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sort')->textInput() ?>

    <?= $form->field($model, 'default_score')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('helearn-yii2ggsddu', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
