<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;
use kartik\date\DatePicker;//如果没有date类型字段，请删除本行
use kartik\datetime\DateTimePicker;//如果没有datetime类型字段，请删除本行

/* @var $this yii\web\View */
/* @var $model helearn\ggsddu\models\HlKnowledge */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hl-knowledge-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pid')->textInput() ?>

    <?= $form->field($model, 'level')->textInput() ?>

    <?= $form->field($model, 'is_menu')->textInput() ?>

    <?= $form->field($model, 'sort')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?php //echo $form->field($model, 'created_at')->widget(DateTimePicker::classname(), ['options' => ['placeholder' => ''],'pluginOptions' => [ 'autoclose' => true, 'todayHighlight' => true]]) ?>

    <?php //echo $form->field($model, 'updated_at')->widget(DateTimePicker::classname(), ['options' => ['placeholder' => ''],'pluginOptions' => [ 'autoclose' => true, 'todayHighlight' => true]]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('helearn-yii2ggsddu', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
