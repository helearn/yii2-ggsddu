<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model helearn\ggsddu\models\QuestionChoice */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="question-choice-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'question_stem')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'option1')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'option2')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'option3')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'option4')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'options')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'correct_options')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'answer_process')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'is_multiple')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'created_id')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'oid')->textInput() ?>

    <?= $form->field($model, 'uid')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('helearn-yii2ggsddu', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
