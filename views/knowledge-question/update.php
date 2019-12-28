<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model helearn\ggsddu\models\KnowledgeQuestion */

$this->title = Yii::t('helearn-yii2ggsddu', 'Update Knowledge Question: {name}', [
    'name' => $model->question_type,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('helearn-yii2ggsddu', 'Knowledge Questions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->question_type, 'url' => ['view', 'question_type' => $model->question_type, 'question_id' => $model->question_id, 'knowledge_id' => $model->knowledge_id]];
$this->params['breadcrumbs'][] = Yii::t('helearn-yii2ggsddu', 'Update');
?>
<div class="knowledge-question-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
