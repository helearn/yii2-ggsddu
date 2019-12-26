<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model helearn\ggsddu\models\HlQuestionChoice */

$this->title = Yii::t('app', 'Update Hl Question Choice: {name}', [
    'name' => $model->name,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Hl Question Choices'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="hl-question-choice-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
