<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;
use kartik\date\DatePicker;//如果没有date类型字段，请删除本行
use kartik\datetime\DateTimePicker;//如果没有datetime类型字段，请删除本行

/* @var $this yii\web\View */
/* @var $model helearn\ggsddu\models\HlTestPagerSetting */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hl-test-pager-setting-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tpid')->textInput() ?>

    <?= $form->field($model, 'question_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sort')->textInput() ?>

    <?= $form->field($model, 'default_score')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('helearn-yii2ggsddu', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
