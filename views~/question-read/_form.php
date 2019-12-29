<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;
use kartik\date\DatePicker;//如果没有date类型字段，请删除本行
use kartik\datetime\DateTimePicker;//如果没有datetime类型字段，请删除本行

/* @var $this yii\web\View */
/* @var $model helearn\ggsddu\models\QuestionRead */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="question-read-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'question_stem')->widget(CKEditor::className(), ['options' => ['rows' => 6], 'preset' => 'basic' ]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'created_at')->widget(DateTimePicker::classname(), ['options' => ['placeholder' => ''],'pluginOptions' => [ 'autoclose' => true, 'todayHighlight' => true]]) ?>

    <?= $form->field($model, 'updated_at')->widget(DateTimePicker::classname(), ['options' => ['placeholder' => ''],'pluginOptions' => [ 'autoclose' => true, 'todayHighlight' => true]]) ?>

    <?= $form->field($model, 'oqtype')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'oqid')->textInput() ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('helearn-yii2ggsddu', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
