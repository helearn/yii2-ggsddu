<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model helearn\ggsddu\models\QuestionChoice */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hl-question-choice-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'name')->textInput() ?>

    <?= $form->field($model, 'question_stem')->textInput() ?>

    <?= $form->field($model, 'option1')->textInput() ?>

    <?= $form->field($model, 'option2')->textInput() ?>

    <?= $form->field($model, 'option3')->textInput() ?>

    <?= $form->field($model, 'option4')->textInput() ?>

    <?= $form->field($model, 'options')->textInput() ?>

    <?= $form->field($model, 'correct_options')->textInput() ?>

    <?= $form->field($model, 'knowledge_ids')->textInput() ?>

    <?= $form->field($model, 'answer_process')->textInput() ?>

    <?= $form->field($model, 'is_multiple')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'created_id')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'oid')->textInput() ?>

    <?= $form->field($model, 'uid')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
