<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model helearn\ggsddu\models\QuestionChoiceSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hl-question-choice-search">

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

    <?= $form->field($model, 'option1') ?>

    <?= $form->field($model, 'option2') ?>

    <?php // echo $form->field($model, 'option3') ?>

    <?php // echo $form->field($model, 'option4') ?>

    <?php // echo $form->field($model, 'options') ?>

    <?php // echo $form->field($model, 'correct_options') ?>

    <?php // echo $form->field($model, 'knowledge_ids') ?>

    <?php // echo $form->field($model, 'answer_process') ?>

    <?php // echo $form->field($model, 'is_multiple') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'created_id') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'oid') ?>

    <?php // echo $form->field($model, 'uid') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
