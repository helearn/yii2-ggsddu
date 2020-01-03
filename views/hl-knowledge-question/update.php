<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model helearn\ggsddu\models\HlKnowledgeQuestion */

$this->title = Yii::t('helearn-yii2ggsddu', 'Update Hl Knowledge Question: {name}', [
    'name' => $model->question_type,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('helearn-yii2ggsddu', 'Hl Knowledge Questions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->question_type, 'url' => ['view', 'question_type' => $model->question_type, 'question_id' => $model->question_id]];
$this->params['breadcrumbs'][] = Yii::t('helearn-yii2ggsddu', 'Update');
?>
<div class="hl-knowledge-question-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
