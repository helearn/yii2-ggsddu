<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model helearn\ggsddu\models\KnowledgeQuestion */

$this->title = Yii::t('helearn-yii2ggsddu', 'Create Knowledge Question');
$this->params['breadcrumbs'][] = ['label' => Yii::t('helearn-yii2ggsddu', 'Knowledge Questions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="knowledge-question-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
