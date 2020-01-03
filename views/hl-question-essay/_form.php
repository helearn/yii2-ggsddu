<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;
use kartik\date\DatePicker;//如果没有date类型字段，请删除本行
use kartik\datetime\DateTimePicker;//如果没有datetime类型字段，请删除本行

/* @var $this yii\web\View */
/* @var $model helearn\ggsddu\models\HlQuestionEssay */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hl-question-essay-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'question_stem')->widget(CKEditor::className(), ['preset' => 'custom','clientOptions' => ['filebrowserImageUploadUrl' => 'upload'] ]) ?>

    <?= $form->field($model, 'correct_answer')->widget(CKEditor::className(), ['preset' => 'custom','clientOptions' => ['filebrowserImageUploadUrl' => 'upload'] ]) ?>

    <?= $form->field($model, 'answer_process')->widget(CKEditor::className(), ['preset' => 'custom','clientOptions' => ['filebrowserImageUploadUrl' => 'upload'] ]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?php //echo $form->field($model, 'created_at')->widget(DateTimePicker::classname(), ['options' => ['placeholder' => ''],'pluginOptions' => [ 'autoclose' => true, 'todayHighlight' => true]]) ?>

    <?php //echo $form->field($model, 'updated_at')->widget(DateTimePicker::classname(), ['options' => ['placeholder' => ''],'pluginOptions' => [ 'autoclose' => true, 'todayHighlight' => true]]) ?>

    <?= $form->field($model, 'oqtype')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'oqid')->textInput() ?>

    <?php //echo $form->field($model, 'user_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('helearn-yii2ggsddu', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
