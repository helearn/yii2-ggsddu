<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model helearn\ggsddu\models\HlQuestionCloze */

$this->title = Yii::t('helearn-yii2ggsddu', 'Update Hl Question Cloze: {name}', [
    'name' => $model->name,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('helearn-yii2ggsddu', 'Hl Question Clozes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('helearn-yii2ggsddu', 'Update');
?>
<div class="hl-question-cloze-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
