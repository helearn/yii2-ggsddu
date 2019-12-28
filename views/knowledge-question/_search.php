<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model helearn\ggsddu\models\KnowledgeQuestionSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="knowledge-question-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'question_type') ?>

    <?= $form->field($model, 'question_id') ?>

    <?= $form->field($model, 'knowledge_id') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('helearn-yii2ggsddu', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('helearn-yii2ggsddu', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
