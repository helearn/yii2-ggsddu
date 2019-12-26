<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model helearn\ggsddu\models\HlQuestionClozeSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hl-question-cloze-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'question_stem') ?>

    <?= $form->field($model, 'correct_answer') ?>

    <?= $form->field($model, 'answer_process') ?>

    <?php // echo $form->field($model, 'knowledge_ids') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'created_id') ?>

    <?php // echo $form->field($model, 'updated_id') ?>

    <?php // echo $form->field($model, 'oid') ?>

    <?php // echo $form->field($model, 'uid') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
