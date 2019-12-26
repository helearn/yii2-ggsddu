<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model helearn\ggsddu\models\HlQuestionReadDetailed */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hl-question-read-detailed-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'qid')->textInput() ?>

    <?= $form->field($model, 'question_stem')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'correct_answer')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'answer_process')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'knowledge_ids')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
