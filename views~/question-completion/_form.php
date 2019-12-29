<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model helearn\ggsddu\models\QuestionCompletion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="question-completion-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'question_stem')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'correct_answer')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'answer_process')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'created_id')->textInput() ?>

    <?= $form->field($model, 'updated_id')->textInput() ?>

    <?= $form->field($model, 'oid')->textInput() ?>

    <?= $form->field($model, 'uid')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('helearn-yii2ggsddu', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
