<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model helearn\ggsddu\models\QuestionChoice */

$this->title = Yii::t('helearn-yii2ggsddu', 'Create Question Choice');
$this->params['breadcrumbs'][] = ['label' => Yii::t('helearn-yii2ggsddu', 'Question Choices'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="question-choice-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
