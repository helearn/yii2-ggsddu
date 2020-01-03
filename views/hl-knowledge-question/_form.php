<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;
use kartik\date\DatePicker;//如果没有date类型字段，请删除本行
use kartik\datetime\DateTimePicker;//如果没有datetime类型字段，请删除本行

/* @var $this yii\web\View */
/* @var $model helearn\ggsddu\models\HlKnowledgeQuestion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hl-knowledge-question-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'question_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'question_id')->textInput() ?>

    <?= $form->field($model, 'knowledge_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('helearn-yii2ggsddu', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
